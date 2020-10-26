@extends('fr.layouts.master')


@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Membres </title>
@endsection

@section('head')
    <script src="{{URL::asset('js/tinymce/tinymce.min.js')}}"></script>

    <script> tinyMCE.init({
            selector: 'textarea',
            mode: 'advanced',
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
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });
    </script>

@endsection

@section('content')

    <section class="container section">

        <form action=" {{ url('fr/members/'.$member->id)}}" method="post">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <br/>

            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" name="Nom" class="form-control" value="{{ $member->Nom }}">
            </div>

            <div class="form-group">
                <label for="">Prenom</label>
                <input type="text" name="Prenom" class="form-control" value="{{ $member->Prenom }}">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="Email" class="form-control" value="{{ $member->Email }}">
            </div>

            <div class="form-group">
                <label for="">Titre ( Français )</label>
                <input type="text" name="FrFormation" class="form-control" value=" {{$member->FrFormation}} "/>
            </div>

            <div class="form-group">
                <label  >Publications ( Français ) (HTML)</label>
                <textarea type="text" name="FrPublications"
                       class="form-control"> {!!$member->FrPublications !!} </textarea>
            </div>

            <div class="form-group">
                <label  >Titre ( anglais )</label>
                <input type="text" name="EnFormation" class="form-control" value=" {{$member->EnFormation}} "/>
            </div>

            <div class="form-group">
                <label  >Publications ( anglais ) (HTML)</label>
                <textarea type="text" name="EnPublications"
                          class="form-control"> {!!$member->EnPublications !!} </textarea>
            </div>

            <div class="d-inline-flex">

                <button type="submit" class=" btn btn-primary">
                    Enregistrer
                </button>

                <a href="{{ url('fr/members')}}">
                    <button class=" btn btn-warning">
                        Annuler
                    </button>
                </a>
            </div>

        </form>

    </section>
@endsection('content')
