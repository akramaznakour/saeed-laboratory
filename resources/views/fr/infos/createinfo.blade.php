@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Contact </title>
@endsection

@section('content')

    <section class="container section">

        <form action=" {{ url('fr/contact')}}" method="post">

            {{ csrf_field() }}
            <div class="form-group">

                <br/>

                <div class="form-group">
                    <label>Information ( français )</label>
                    <input type="text" name="FrInformation" class="form-control">
                </div>
                <div class="form-group">
                    <label>Valeur ( français )</label>
                    <input type="text" name="FrValeur" class="form-control">
                </div>


                <div class="form-group">
                    <label>Information ( anglais )</label>
                    <input type="text" name="EnInformation" class="form-control">
                </div>
                <div class="form-group">
                    <label>Valeur ( anglais )</label>
                    <input type="text" name="EnValeur" class="form-control">
                </div>


                <div class=" form-group">
                    <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
                </div>
            </div>


        </form>

    </section>
@endsection('content')
