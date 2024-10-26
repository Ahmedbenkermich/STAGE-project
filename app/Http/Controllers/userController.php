<?php

namespace App\Http\Controllers;
use App\Models\cheque;
use App\Models\banque;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class userController extends Controller
{
    public function dash(){
        $agent = User::where('type_user', 'agent')->count();
        $caissier = User::where('type_user', 'caissier')->count();
        $emis = cheque::where('emission', 'emis')->count();
        $non_emis = cheque::where('emission', 'non_emis')->count();
        $banque = banque::count();

        return view('admin_pages.welcome', compact('agent', 'caissier', 'emis', 'non_emis', 'banque'));

    }
    public function index() {
        $data = User::all();
        return view('admin_pages.show-user', ['users' => $data]);
    }

    public function create() {
        return view('admin_pages.create-user');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'type_user'=> 'required|in:admin,agent,caissier',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'type_user'=> $request->type_user,
            'password' => Hash::make($request->password),
        ]);


        return redirect()->route('users.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('admin_pages.edit-user', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'type_user'=> ['required', 'string'],
            'username' => ['required', 'string',  'max:255', 'unique:users,username,'.$id],
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'type_user'=> $request->type_user,
            'username' => $request->username,
        ]);

        return redirect()->route('users.index');
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
