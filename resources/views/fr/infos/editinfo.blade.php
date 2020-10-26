@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA  | Contact </title>
@endsection


@section('content')

    <section class="container section">

        <form action=" {{ url('fr/contact/'.$info->id)}}" method="post">

            <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}

            <br/>

            <div class="form-group">
                <label  >Information ( français )</label>
                <input type="text" name="FrInformation" class="form-control" value=" {{ $info-> FrInformation}}">
            </div>
            <div class="form-group">
                <label  >Valeur ( français )</label>
                <input type="text" name="FrValeur" class="form-control" value=" {{ $info-> FrValeur}}">
            </div>


            <div class="form-group">
                <label  >Information ( anglais )</label>
                <input type="text" name="EnInformation" class="form-control" value=" {{ $info-> EnInformation}}">
            </div>
            <div class="form-group">
                <label  >Valeur ( anglais )</label>
                <input type="text" name="EnValeur" class="form-control" value=" {{ $info-> EnValeur}}">
            </div>



            <div class="d-inline-flex">

                <button type="submit" class=" btn btn-primary">
                    Enregistrer
                </button>

                <a href="{{ url('fr/contact')}}">
                    <button class=" btn btn-warning">
                        Annuler
                    </button>
                </a>
            </div>


        </form>

    </section>
@endsection('content')
