@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Publications | {{ $publication->FrIntitule }} </title>
@endsection

@section('content')
    <section class="container section">

        <br/>
        <H5>{{$publication->EnTitre}}</H5>
        <H7>{{$publication->Auteur}}</H7>

        <div class="text-justify underline">{!! $publication->EnContenu !!}</div>

        <footer class="blockquote-footer"> {{$publication->Journal}} {{$publication->Annee}} </footer>


    </section>
@endsection