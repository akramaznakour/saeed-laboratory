<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $choix = 5;
        $listEquipment = Equipment::all();

        return view('fr.equipments.index', compact('listEquipment', 'choix'));
    }

    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix = 5;
            return view('fr.equipments.createEquipment', compact('choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $Equipment = new Equipment();

            $Equipment->FrInformation = $request->input('FrInformation');
            $Equipment->FrValeur = $request->input('FrValeur');


            $Equipment->EnInformation = $request->input('EnInformation');
            $Equipment->EnValeur = $request->input('EnValeur');


            $Equipment->save();

            session()->flash('success', "L'information a été bien enregisté");
            return redirect('fr/equipments');
        } else {
            return view('fr.errors.404');
        }
    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix = 5;
            $equipment = Equipment::find($id);

            return view('fr.equipments.editequipment', compact('equipment', 'choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $Equipment = Equipment::find($id);

            $Equipment->FrInformation = $request->input('FrInformation');
            $Equipment->FrValeur = $request->input('FrValeur');


            $Equipment->EnInformation = $request->input('EnInformation');
            $Equipment->EnValeur = $request->input('EnValeur');

            $Equipment->save();

            return redirect('fr/equipments');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $Equipment = Equipment::find($id);
            $Equipment->delete();

            return redirect('fr/equipments');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

}
