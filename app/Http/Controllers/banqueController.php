<?php

namespace App\Http\Controllers;

use App\Models\banque;
use Illuminate\Http\Request;

class banqueController extends Controller
{
    
    public function create(){
        return view('admin_pages.create-banque');
    }

    public function store(Request $request)
    {
       

        $request->validate([
            'name_banque' => ['required'],
            

        ]);

        banque::create([
            'name_banque' => $request->name_banque,
           

        ]);

        return redirect('/admin');
    }
}
