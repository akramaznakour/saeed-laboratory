@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA </title>
@endsection


@section('content')

    <section class="container section">

        <div>
            @if (Auth::check() && Auth::user()->is_admin)
                <a href="{{ url( 'fr/welcome/create') }}">
                    <button class=" btn btn-success ">
                        Nouveau
                    </button>
                </a>
                <br/>
            @endif
        </div>


        @if( session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif


        @foreach( $listwelcome as $welcome )

            <br/>

            <div class="textWelcome underline text-justify container">
                {!! $welcome->FrContenu !!}
            </div>

            @if (Auth::check() && Auth::user()->is_admin )
                <br/>
                <div class="d-inline-flex">

                    <a href="{{ url('fr/welcome/'.$welcome->id.'/edit') }}">
                        <button class="btn btn-warning ">Editer</button>
                    </a>


                    <form action="{{ url('fr/welcome/'.$welcome->id) }}" method="post">

                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <button class="btn btn-danger " type="submit"
                                href="{{ url('fr/welcome/'.$welcome->id.'/edit') }}"> Supprimer
                        </button>

                    </form>
                </div>
            @endif
            <hr/>
            <br/>
        @endforeach
    </section>




@endsection('content')



