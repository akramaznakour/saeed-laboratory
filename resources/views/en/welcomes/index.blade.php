@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA </title>
@endsection


@section('content')
    <section class="container section">

        <br/>

        @foreach( $listwelcome as $welcome )

            <div class="textWelcome underline container text-justify">
                {!! $welcome->EnContenu !!}
            </div>

            <hr/>
            <br/>

        @endforeach
    </section>




@endsection('content')



