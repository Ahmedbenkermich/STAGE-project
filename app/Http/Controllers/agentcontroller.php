<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cheque;
use App\Models\banque;
use App\Models\compte;
use App\Models\User;


class agentcontroller extends Controller
{

    
    public function success()
    {
        return view('agent_pages.succsess');
    }

    public function home()
    {
        $agent = User::where('type_user', 'agent')->count();
        $caissier = User::where('type_user', 'caissier')->count();
        $emis = cheque::where('emission', 'emis')->count();
        $non_emis = cheque::where('emission', 'non_emis')->count();
        $banque = banque::count();

        return view('agent_pages.home_agent',compact('agent', 'caissier', 'emis', 'non_emis', 'banque'));
    }

    public function agent()
    {
        return view('agent_pages.agent');
    }

   
    public function store(Request $request) {
        $currentYear = date('Y');
        
        $request->validate([
            'num' => [
                'required',
                'size:10',
                function ($attribute, $value, $fail) use ($currentYear) {
                    if (!preg_match('/^' . $currentYear . '\d{6}$/', $value)) {
                        $fail('The ' . $attribute . ' must start with the current year and be followed by 6 digits.');
                    }
                },
            ],
            'montant' => ['required', 'numeric'],
            'benefication' => 'required|string',
            'motif' => 'required|string',
            'type_cheque' => 'required|in:P,S,F,p,s,f',
            'code_banque' => ['required', 'exists:banques,code_banque'],
            'compte_id'=>['required', 'numeric'],
            'compte_password'=>['required', 'min:6'],
            'date_valeur'=>'required|date',  
            'date_entree_caisse'=>'required|date'  
        ]);
    
        cheque::create([
            'num' => $request->num,
            'montant' => $request->montant,
            'benefication' => $request->benefication,
            'motif' => $request->motif,
            'type_cheque' => $request->type_cheque,
            'code_banque'=> $request->code_banque,
            'date_valeur'=> $request->date_valeur,
            'date_entree_caisse'=> $request->date_entree_caisse,
        ]);
    
        
        Compte::create([
            'compte_id' => $request->compte_id,
            'code_banque'=> $request->code_banque,
            'compte_password'=>$request->compte_password,
        ]);
    
        return redirect('/succsess');
    }
    
    
   
}
