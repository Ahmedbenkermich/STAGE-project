<?php

namespace App\Http\Controllers;
use App\Models\cheque;
use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\banque;
use App\Models\User;

use Illuminate\Http\Request;

class caissierController extends Controller
{
    public function index(Request $request) {
        $query = cheque::query();
    
        if ($request->filled('num')) {
            $query->where('num', 'like', '%' . $request->input('num') . '%');
        }
        if ($request->filled('type_cheque')) {
            $query->where('type_cheque', 'like', '%' . $request->input('type_cheque') . '%');
        }
        if ($request->filled('montant')) {
            $query->where('montant', 'like', '%' . $request->input('montant') . '%');
        }
        if ($request->filled('date')) {
            $query->whereDate('date_emission', $request->input('date'));
        }
        if ($request->filled('emission')) {
            $query->where('emission', $request->input('emission'));
        }
        if ($request->filled('benefication')) {
            $query->where('benefication', 'like', '%' . $request->input('benefication') . '%');
        }
    
        $data = $query->get();
    
        return view('caissier_pages.caissier', ['cheques' => $data]);
    }
    


    public function generatePdf(Request $request)
{
    $num = $request->input('num');
    $type_cheque = $request->input('type_cheque');
    $montant = $request->input('montant');
    $benefication = $request->input('benefication');
    $date = $request->input('date');
    $emission = $request->input('emission');

    $cheques = cheque::query()
        ->when($num, fn($query) => $query->where('num', 'like', "%$num%"))
        ->when($type_cheque, fn($query) => $query->where('type_cheque', $type_cheque))
        ->when($montant, fn($query) => $query->where('montant', 'like', "%$montant%"))
        ->when($benefication, fn($query) => $query->where('benefication', 'like', "%$benefication%"))
        ->when($date, fn($query) => $query->whereDate('date', $date))
        ->when($emission, fn($query) => $query->where('emission', $emission))
        ->get();

    $pdf = Pdf::loadView('pdf.cheque_report', ['cheques' => $cheques]);

    return $pdf->download('cheque_report.pdf');
}

    public function home(){
        $agent = User::where('type_user', 'agent')->count();
        $caissier = User::where('type_user', 'caissier')->count();
        $emis = cheque::where('emission', 'emis')->count();
        $non_emis = cheque::where('emission', 'non_emis')->count();
        $banque = banque::count();

        return view('caissier_pages.home_caissier',compact('agent', 'caissier', 'emis', 'non_emis', 'banque'));
    }
    
    public function emis($id){
        $cheque = cheque::find($id);

        return view('caissier_pages.emis',['cheque' => $cheque]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'emission' => 'required|string',
            'date_emission' => 'required|date', 
        ]);
        $cheque = cheque::find($id);

        $cheque->emission= $request->input('emission');
        $cheque->date_emission = $request->input('date_emission');
        $cheque->save();

      return redirect('/caissier')->with('success', 'Cheque updated successfully.');
    }
}
