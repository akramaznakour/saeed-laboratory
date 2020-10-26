<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Null_;

class EventController extends Controller
{


    public function index()
    {
        $choix = 4;
        $listevent = event::orderBy('Date', 'dsc')->get();
        return view('fr.events.index', compact('listevent', 'choix'));
    }

    public function show($id)
    {
        $choix = 4;
        $event = event::find($id);
        return view('fr.events.event', compact('event', 'choix'));
    }

    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $choix = 4;

            return view('fr.events.createevent', compact('choix'));
        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {


            $img_name = time() . '.' . $request->file('Affiche_url')->getClientOriginalExtension();

            $event = new event();

            $event->FrTitre = $request->input('FrTitre');
            $event->EnTitre = $request->input('EnTitre');

            $event->Date = $request->input('Date');

            $event->Lieu = $request->input('Lieu');

            $event->FrDescription = $request->input('FrDescription');
            $event->EnDescription = $request->input('EnDescription');
            $event->Affiche_url = $img_name;


            $event->save();
            $request->file('Affiche_url')->move(
                base_path() . '/public/img/affiches/', $img_name
            );
            session()->flash('success', "L'evenment a été bien enregisté");
            return redirect('fr/scientific_events');

        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix = 4;
            $event = event::find($id);
            return view('fr.events.editevent', compact('event', 'choix'));

        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {


            $event = Event::find($id);

            if (($request->file('Affiche_url'))) {

                $img = time() . '.' . $request->file('Affiche_url')->getClientOriginalExtension();

            }
            $event->FrTitre = $request->input('FrTitre');
            $event->EnTitre = $request->input('EnTitre');

            $event->Date = $request->input('Date');

            $event->Lieu = $request->input('Lieu');

            $event->FrDescription = $request->input('FrDescription');
            $event->EnDescription = $request->input('EnDescription');


            if (($request->file('Affiche_url'))) {

                $event->Affiche_url = $img;
            }

            $event->save();


            if (($request->file('Affiche_url'))) {

                $request->file('Affiche_url')->move(
                    base_path() . '/public/img/affiches/', $img
                );
            }
            return redirect('fr/scientific_events');


        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $event = event::find($id);
            $event->delete();

            return redirect('fr/scientific_events');
        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }
}
