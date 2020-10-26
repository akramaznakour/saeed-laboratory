<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{

    public function show($id)
    {
        $choix=6;
        $publication = publication::find($id);
        return view('fr.publications.publication', compact('publication','choix'));
    }

    public function index()
    {
        $choix=6;
        $listpublication = publication::orderBy('annee','dsc')->get();

        return view('fr.publications.index', compact('listpublication','choix'));
    }

    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin) {
            $choix=6;
            return view('fr.publications.createpublication',compact('choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $publication = new publication();

            $publication->FrTitre = $request->input('FrTitre');
            $publication->EnTitre = $request->input('EnTitre');
            $publication->FrContenu = $request->input('FrContenu');
            $publication->EnContenu = $request->input('EnContenu');
            $publication->Auteur = $request->input('Auteur');
            $publication->Annee = $request->input('Annee');
            $publication->Journal = $request->input('Journal');

            $publication->save();

            session()->flash('success', 'La publication a été bien enregisté');
            return redirect('fr/publications');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix=6;
            $publication = publication::find($id);

            return view('fr.publications.editpublication', compact('publication','choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $publication = publication::find($id);

            $publication->FrTitre = $request->input('FrTitre');
            $publication->EnTitre = $request->input('EnTitre');
            $publication->FrContenu = $request->input('FrContenu');
            $publication->EnContenu = $request->input('EnContenu');
            $publication->Auteur = $request->input('Auteur');
            $publication->Annee = $request->input('Annee');
            $publication->Journal = $request->input('Journal');


            $publication->save();

            return redirect('fr/publications');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $publication = publication::find($id);
            $publication->delete();

            return redirect('fr/publications');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

}
