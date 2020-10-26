@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA  | Evenements </title>
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

        });
    </script>

@endsection('head')


@section('content')

    <section class="container section">

        <form action=" {{ url('fr/scientific_events/'.$event->id)}}" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <br/>

            <div class="form-group">
                <label  >Titre ( français ) </label>
                <input type="text" name="FrTitre" class="form-control" value="{{ $event->FrTitre }}">
            </div>

            <div class="form-group">
                <label  >Titre ( anglais ) </label>
                <input type="text" name="EnTitre" class="form-control" value="{{ $event->EnTitre }}">
            </div>

            <div class="form-group nv-noData">
                <label  >Date</label>
                <input type="date" name="Date" class="form-control" value="{{ $event->Date }}">
            </div>

            <div class="form-group">
                <label>Lieu</label>
                <input type="text" name="Lieu" class="form-control" value="{{ $event->Lieu }}">
            </div>

            <div class="form-group">
                <label  >Description ( français ) (HTML)</label>
                <textarea type="text" name="FrDescription" class="form-control" > {!! $event->FrDescription !!}"  </textarea>
            </div>

            <div class="form-group">
                <label  >Description ( anglais ) (HTML) </label>
                <textarea type="text" name="EnDescription" class="form-control" > {!! $event->EnDescription !!}"  </textarea>
            </div>

            <div class="form-group">
                <label  >Affiche</label>
                <input type="file" class="form-control-file" name="Affiche_url">
            </div>


            <button type="submit" class=" btn btn-primary">
                Enregistrer
            </button>

            <a href="{{ url('fr/scientific_events')}}" class="btn btn-warning " style="color: white; font-family: Arial;">
                    Annuler

            </a>



        </form>

    </section>
@endsection('content')
