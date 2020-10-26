@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA  | Equipements </title>
@endsection

@section('content')

    <section class="container section">

        <form action=" {{ url('fr/equipments/'.$equipment->id)}}" method="post">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <br/>
            <div class="form-group">
                <label  >Nom ( français )</label>
                <input type="text" name="FrInformation" class="form-control" value="{{ $equipment->FrInformation }} ">
            </div>
            <div class="form-group">
                <label  >Caractéristiques ( français )</label>
                <input type="text" name="FrValeur" class="form-control" value="{{ $equipment->FrValeur }} ">
            </div>


            <div class="form-group">
                <label  >Nom ( anglais )</label>
                <input type="text" name="EnInformation" class="form-control" value="{{ $equipment->EnInformation }} ">
            </div>
            <div class="form-group">
                <label  >Caractéristiques ( anglais )</label>
                <input type="text" name="EnValeur" class="form-control" value="{{ $equipment->EnValeur }} ">
            </div>


            <div class="d-inline-flex">

                <button type="submit" class=" btn btn-primary">
                    Enregistrer
                </button>

                <a href="{{ url('fr/contact')}}">
                    <button  class=" btn btn-warning">
                        Annuler
                    </button>
                </a>
            </div>


        </form>

    </section>
@endsection('content')
