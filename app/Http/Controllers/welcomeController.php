<?php

namespace App\Http\Controllers;

use App\Welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
    {
        $choix=0;

        $listwelcome = welcome::all();

        return view('fr.welcomes.index', compact('listwelcome','choix'));
    }

    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix=0;
            return view('fr.welcomes.createwelcome',compact('choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $welcome = new welcome();


            $welcome->Frcontenu = $request->input('FrContenu');

            $welcome->Encontenu = $request->input('EnContenu');


            $welcome->save();

            session()->flash('success', "L'information a été bien enregisté");
            return redirect('/fr');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix=0;

            $welcome = welcome::find($id);

            return view('fr.welcomes.editwelcome', compact('welcome','choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $welcome = welcome::find($id);


            $welcome->Frcontenu = $request->input('FrContenu');

            $welcome->Encontenu = $request->input('EnContenu');


            $welcome->save();

            return redirect('/fr');

        } else {
            $choix=8;
            return view('fr.errors.404');
        }

    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $welcome = welcome::find($id);
            $welcome->delete();

            return redirect('/fr');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }
}
