@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA  | Equipements </title>
@endsection

@section('content')

    <section class="container section">

        <form action=" {{ url('fr/equipments')}}" method="post">

            {{ csrf_field() }}

            <br/>
            <div class="form-group">
                <label  >Nom ( français )</label>
                <input type="text" name="FrInformation" class="form-control">
            </div>
            <div class="form-group">
                <label  >Caractéristiques ( français )</label>
                <input type="text" name="FrValeur" class="form-control">
            </div>


            <div class="form-group">
                <label  >Nom ( anglais )</label>
                <input type="text" name="EnInformation" class="form-control">
            </div>
            <div class="form-group">
                <label  >Caractéristiques ( anglais )</label>
                <input type="text" name="EnValeur" class="form-control">
            </div>

            <div class=" form-group">
                <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
            </div>


        </form>

    </section>
@endsection('content')
