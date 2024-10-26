<?php
namespace App\Http\Controllers;

use App\Models\cheque;
use Illuminate\Http\Request;

class chequeController extends Controller
{
    public function index() {
        $data = cheque::all();
        return view('admin_pages.show-cheque', ['cheques' => $data]);
    }

    public function create() {
        return view('admin_pages.create-cheque');
    }

    

    public function edit($id) {
        $cheque = cheque::find($id);
        return view('admin_pages.edit-cheque', ['cheque' => $cheque]);
    }

    public function update(Request $request, $id) {
        $currentYear = date('Y');
    
        $request->validate([
            'num' => [
                'required',
                'size:10',
                function ($attribute, $value, $fail) use ($currentYear) {
                    // Check if it starts with the current year and has 6 digits following it
                    if (!preg_match('/^' . $currentYear . '\d{6}$/', $value)) {
                        $fail('The ' . $attribute . ' must start with the current year and be followed by 6 digits.');
                    }
                },
            ],
            'montant' => ['required', 'numeric'],
            'benefication' => 'required|string',
            'motif' => 'required|string',
            'type_cheque' => 'required|in:P,S,F,p,s,f',
        ]);
    
        $cheque = cheque::findOrFail($id);
        $cheque->update([
            'num' => $request->num,
            'montant' => $request->montant,
            'benefication' => $request->benefication,
            'motif' => $request->motif,
            'type_cheque' => $request->type_cheque,
        ]);
    
        return redirect()->route('cheques.index');
    }

    public function destroy($id) {
        $cheque = cheque::findOrFail($id);
        $cheque->delete();
        return redirect()->route('cheques.index');
    }
}
