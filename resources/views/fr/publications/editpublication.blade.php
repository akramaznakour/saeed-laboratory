@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA  | Publications </title>
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

        <form action=" {{ url('fr/publications/'.$publication->id)}}" method="post">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <br/>

            <div class="form-group">
                <label  >Titre( Français )</label>
                <input type="text" name="FrTitre" class="form-control" value=" {{$publication->FrTitre}}">
            </div>

            <div class="form-group">
                <label  >Titre( anglais )</label>
                <input type="text" name="EnTitre" class="form-control" value=" {{$publication->EnTitre}}">
            </div>
            <div class="form-group">
                <label  >Auteur</label>
                <input type="text" name="Auteur" class="form-control" value=" {{$publication->Auteur}}">
            </div>
            <div class="form-group">
                <label  >Contenu( Français ) ( HTML )</label>
                <textarea type="text" name="FrContenu" class="form-control"> {!!  $publication->FrContenu!!}</textarea>
            </div>

            <div class="form-group">
                <label  >Contenu( anglais ) ( HTML )</label>
                <textarea type="text" name="EnContenu" class="form-control"> {!! $publication->EnContenu!!} </textarea>
            </div>
            <div class="form-group">
                <label  >Anneé</label>
                <input type="text" name="Annee" class="form-control" value=" {{$publication->Annee}}">
            </div>
            <div class="form-group">
                <label  >Journal</label>
                <input type="text" name="Journal" class="form-control" value=" {{$publication->Journal}}">
            </div>
            
            <div class="d-inline-flex">

                <button type="submit" class=" btn btn-primary">
                    Enregistrer
                </button>

                <a href="{{ url('fr/publications')}}">
                    <button  class=" btn btn-warning">
                        Annuler
                    </button>
                </a>
            </div>



        </form>

    </section>
@endsection('content')
