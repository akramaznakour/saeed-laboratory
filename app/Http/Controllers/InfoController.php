<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function index()
    {
        $choix=7;
        $listinfo = info::all();

        return view('fr.infos.index', compact('listinfo','choix'));
    }

    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $choix=7;
            return view('fr.infos.createinfo',compact('choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $info = new info();

            $info->FrInformation = $request->input('FrInformation');
            $info->FrValeur = $request->input('FrValeur');


            $info->EnInformation = $request->input('EnInformation');
            $info->EnValeur = $request->input('EnValeur');

            $info->save();

            session()->flash('success', "L'information a été bien enregisté");
            return redirect('fr/contact');

        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix=7;
            $info = info::find($id);

            return view('fr.infos.editinfo', compact('info','choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $info = info::find($id);
            $info->FrInformation = $request->input('FrInformation');
            $info->FrValeur = $request->input('FrValeur');


            $info->EnInformation = $request->input('EnInformation');
            $info->EnValeur = $request->input('EnValeur');

            $info->save();

            return redirect('fr/contact');

        } else {
            $choix=8;
            return view('fr.errors.404');
        }

    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $info = info::find($id);
            $info->delete();

            return redirect('fr/contact');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }
}
