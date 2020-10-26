@extends('fr.layouts.master')
@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA  | Projets </title>
@endsection

@section('head')
    <script src="{{URL::asset('js/tinymce/tinymce.min.js')}}"></script>

        <script> tinyMCE.init({
            selector: 'textarea',
            mode:'advanced',
            force_br_newlines: true,
            force_p_newlines: true,
            forced_root_block: '',
            height: 150,
            menubar: true,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ]
        });
    </script>

@endsection('head')

@section('content')

    <section class="container section">

        <form action=" {{ url('fr/research_projects/'.$project->id)}}" method="post">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <br/>

            <div class="form-group">
                <label  >Responsables</label>
                <textarea type="text" name="Responsable" class="form-control" > {!! $project->Responsable !!}</textarea>
            </div>
            <div class="form-group">
                <label  >Intitule ( français ) </label>
                <input type="text" name="FrIntitule" class="form-control" value="{{ $project->FrIntitule }}">
            </div>
            <div class="form-group">
                <label  >Intitule ( anglais ) </label>
                <input type="text" name="EnIntitule" class="form-control" value="{{ $project->EnIntitule }}">
            </div>
            <div class="form-group">

                <label>Date de commencement</label>
                <br/>
                <h7>Mois</h7>

                <select name="mois_start" class="selector custom-select   ">

                    <option value="1">Janvier</option>
                    <option value="2">Février</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Aout</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>

                -

                <h7>Annee</h7>
                <input type="number" name="annee_start" value="{{Carbon\Carbon::parse($project->DateStart)->format('Y')}}"/>
            </div><div class="form-group">

                <label>Date de fin</label>
                <br/>
                <h7>mois</h7>

                <select name="mois_end" class="selector custom-select   ">

                    <option value="1">Janvier</option>
                    <option value="2">Février</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Aout</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>

                -

                <h7>Annee</h7>
                <input type="number" name="annee_end" value="{{Carbon\Carbon::parse($project->DateEnd)->format('Y') }}"/>
            </div>

            <div class="form-group">
                <label  >Contenu de la page du projet (HTML) </label>
                <textarea type="text" name="Content" class="form-control" >{!!$project->Content!!}</textarea>
            </div>


            <div class="d-inline-flex">

                <button type="submit" class=" btn btn-primary">
                    Enregistrer
                </button>

                <a href="{{ url('fr/research_projects')}}">
                    <button class=" btn btn-warning">
                        Annuler
                    </button>
                </a>
            </div>


        </form>

    </section>
@endsection('content')
