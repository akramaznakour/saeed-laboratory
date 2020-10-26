@extends('fr.layouts.master')


@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA </title>
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
            ],
        });
    </script>

@endsection

@section('content')

    <section class="container section">

        <form action=" {{ url('fr/welcome')}}" method="post">

            {{ csrf_field() }}

            <br/>

            <div class="form-group">

                <label>
                    Contenu ( Français ) (HTML)
                </label>

                <textarea type="text" name="FrContenu" class="form-control"></textarea>

            </div>

            <div class="form-group">

                <label>
                    Contenu ( anglais ) (HTML)
                </label>

                <textarea type="text" name="EnContenu" class="form-control"></textarea>

            </div>

            <div class=" form-group">
                <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
            </div>


        </form>

    </section>
@endsection('content')
