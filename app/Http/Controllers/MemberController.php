<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function show($id)
    {
        $choix=2;
        $member = member::find($id);

        return view('fr.members.cv', compact('member','choix'));
    }

    public function index()
    {

        $choix=2;
        $listmember =  member::orderBy('Nom')->get();


        return view('fr.members.index', compact('listmember','choix'));
    }


    public function create()
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix=2;
            return view('fr.members.createmember',compact('choix'));

        } else {
            $choix=8;
            return view('fr.errors.404');
        }

    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $member = new Member();

            $member->Nom = $request->input('Nom');
            $member->Prenom = $request->input('Prenom');
            $member->Email = $request->input('Email');


            $member->FrFormation = $request->input('FrFormation');
            $member->FrPublications = $request->input('FrPublications');


            $member->EnFormation = $request->input('EnFormation');
            $member->EnPublications = $request->input('EnPublications');

            $member->save();

            session()->flash('success', 'Le cv a été bien enregisté');
            return redirect('fr/members');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }

    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix=2;
            $member = member::find($id);

            return view('fr.members.editMemeber', compact('member','choix'));
        } else {
            $choix=8;
            return view('fr.errors.404');
        }

    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $member = member::find($id);

            $member->Nom = $request->input('Nom');
            $member->Prenom = $request->input('Prenom');
            $member->Email = $request->input('Email');


            $member->FrFormation = $request->input('FrFormation');
            $member->FrPublications = $request->input('FrPublications');


            $member->EnFormation = $request->input('EnFormation');
            $member->EnPublications = $request->input('EnPublications');


            $member->save();

            return redirect('fr/members');
        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $member = member::find($id);
            $member->delete();

            return redirect('fr/members');

        } else {
            $choix=8;
            return view('fr.errors.404');
        }
    }

}
