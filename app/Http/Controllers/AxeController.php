<?php

namespace App\Http\Controllers;

use App\Axe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AxeController extends Controller
{
    public function index()
    {
        $choix=1;

        $listaxe = axe::all();

        return view('fr.axes.index', compact('listaxe','choix'));

    }

    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $choix=1;
            return view('fr.axes.createaxe', compact('choix'));
        } else {
            $choix=8;
            return view('fr.errors.404',compact('choix'));
        }
    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $axe = new axe();

            $axe->FrTitre   = $request->input('FrTitre');
            $axe->Frcontenu = $request->input('FrContenu');
            $axe->EnTitre   = $request->input('EnTitre');
            $axe->Encontenu = $request->input('EnContenu');

            $axe->save();

            session()->flash('success', " l'axe a été bien enregisté" );
            return redirect('fr/research_axes');

        } else {
            return view('fr.errors.404',compact('choix'));
        }
    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix=1;
            $axe = axe::find($id);

            return view('fr.axes.editaxe', compact('axe' , 'choix'));

        } else {
            $choix=8;
            return view('fr.errors.404',compact('choix'));
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $axe = axe::find($id);

            $axe->FrTitre   = $request->input('FrTitre');
            $axe->Frcontenu = $request->input('FrContenu');
            $axe->EnTitre   = $request->input('EnTitre');
            $axe->Encontenu = $request->input('EnContenu');

            $axe->save();

            return redirect('fr/research_axes');
        } else {
            $choix=8;
            return view('fr.errors.404',compact('choix'));
        }
    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $axe = axe::find($id);
            $axe->delete();

            return redirect('fr/research_axes');
        } else {
            $choix=8;
            return view('fr.errors.404',compact('choix'));
        }
    }
}
