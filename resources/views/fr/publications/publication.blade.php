@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA  | Publication | {{ $publication->FrIntitule }} </title>
@endsection

@section('content')
    <section class="container section">

        <br/>
        <H5>{{$publication->FrTitre}}</H5>
        <H7>{{$publication->Auteur}}</H7>

        <div class="text-justify underline"> {!! $publication->FrContenu !!}</div>

        <footer class="blockquote-footer"> {{$publication->Journal}} {{$publication->Annee}} </footer>


    </section>
@endsection