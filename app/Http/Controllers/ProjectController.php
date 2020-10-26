<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function show($id)
    {
        $choix = 3;
        $project = project::find($id);
        return view('fr.projects.project', compact('project', 'choix'));
    }

    public function index()
    {
        $choix = 3;
        $listproject = project::all();

        return view('fr.projects.index', compact('listproject', 'choix'));
    }

    public function create()
    {
        $choix = 3;
        if (Auth::check() && Auth::user()->is_admin) {

            return view('fr.projects.createproject', compact('choix'));
        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $project = new project();

            $project->Responsable = $request->input('Responsable');
            $project->FrIntitule = $request->input('FrIntitule');
            $project->EnIntitule = $request->input('EnIntitule');

            if (($request->input('annee_start') != "") && ($request->input('mois_start') != "")) {
                $project->DateStart = Carbon::create(($request->input('annee_start')), ($request->input('mois_start')));
            }

            if (($request->input('annee_end') != "") && ($request->input('mois_end') != "")) {
                $project->DateEnd = Carbon::create(($request->input('annee_end')), ($request->input('mois_end')));
            }

            $project->Content = $request->input('Content');

            $project->save();

            session()->flash('success', 'Le projet a été bien enregisté');
            return redirect('fr/research_projects');
        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function edit($id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $choix = 3;
            $project = project::find($id);

            return view('fr.projects.editproject', compact('project', 'choix'));
        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function update(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $project = project::find($id);


            $project->Responsable = $request->input('Responsable');
            $project->FrIntitule = $request->input('FrIntitule');
            $project->EnIntitule = $request->input('EnIntitule');


            if (($request->input('annee_start') == "")) {
                $project->DateStart = NULL;
            } else {
                $project->DateStart = Carbon::create(($request->input('annee_start')), ($request->input('mois_start')));
            }

            if (($request->input('annee_end') == "")) {
                $project->DateEnd = NULL;
            } else {
                $project->DateEnd = Carbon::create(($request->input('annee_end')), ($request->input('mois_end')));
            }

            $project->Content = $request->input('Content');

            $project->save();

            return redirect('fr/research_projects');
        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }

    public function destroy(Request $request, $id)
    {
        if (Auth::check() && Auth::user()->is_admin) {

            $project = project::find($id);
            $project->delete();

            return redirect('fr/research_projects');
        } else {
            $choix = 8;
            return view('fr.errors.404');
        }
    }
}
