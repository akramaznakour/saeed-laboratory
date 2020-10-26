@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Evenements | {{$event->FrTitre}}</title>
@endsection


@section('content')
    <section class="container section">


        <br/>


        <h5 class="text-center text-capitalize">{{$event->FrTitre}}</h5>

        <table class="table table-striped table-sm ">
            <tbody >
            <tr>
                <th>
                    Date :
                </th>
                <td>
                    <div>{{$event->Date}}</div>

                </td>
                <th>
                    Lieu :
                </th>
                <td>
                    <div>{{$event->Lieu}}</div>

                </td>
            </tr>
            </tbody>
        </table>


        <div class="text-justify small textEvent ">  {!!  $event->FrDescription !!}
        </div>

        <br/>

        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <a href="{{asset('img/affiches/'.$event->Affiche_url)}}">
                    <img class="img-fluid"
                         src="{{asset('img/affiches/'.$event->Affiche_url)}}"/>
                </a>
            </div>
            <div class="col-sm-5"></div>
        </div>

    </section>

@endsection('content')



