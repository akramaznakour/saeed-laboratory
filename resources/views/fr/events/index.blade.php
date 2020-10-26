@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Evenements </title>
@endsection


@section('content')

    <section class="container section">


        @if (Auth::check() && Auth::user()->is_admin )
            <div>
                <a href="{{ url( 'fr/scientific_events/create') }}">
                    <button class=" btn btn-success pull-right">
                        Nouveau
                    </button>
                </a>
            </div>
        @endif

        @if( session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            <br/>
        @endif

        <br/>
        <h5 class="container titleEvent" >Actualités<br></h5>

        <table class="table ">

            <tbody>
            @foreach( $listevent as $event )
                @if( $today = \Carbon\Carbon::now() <= $event->Date )
                    <tr>

                        <td>
                            <h7><b>
                                    - {{$event->FrTitre}}
                                </b></h7>
                            <table class="table table-sm table-striped ">

                                <tbody>
                                <tr>
                                    <th>
                                        Date :
                                    </th>
                                    <td>
                                        <div>{{$event->Date}}</div>

                                    </td>
                                    <th>
                                        Location :
                                    </th>
                                    <td>
                                        <div>{{$event->Lieu}}</div>

                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="text-justify textEvent underline "> {!! str_limit(" $event->FrDescription ", 270) !!}
                                <a class="lirePlus"
                                   href="{{ url('fr/scientific_events/'.$event->id) }}">
                                    Lire plus </a>
                            </div>


                            @if (Auth::check() && Auth::user()->is_admin )
                                <div class="d-inline-flex">
                                    <a href="{{ url('fr/scientific_events/'.$event->id.'/edit') }}">
                                        <button class="btn btn-warning">Editer</button>
                                    </a>

                                    <form action="{{ url('fr/scientific_events/'.$event->id) }}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger " type="submit"
                                                href="{{ url('fr/scientific_events/'.$event->id.'/edit') }}">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>

                            @endif

                        </td>


                        <td width="18%" style="vertical-align: middle;" class="hidden-xs-down">
                            <a href="{{asset('img/affiches/'.$event->Affiche_url)}}">
                                <img  class="img-fluid" src="{{asset('img/affiches/'.$event->Affiche_url)}}"/>
                            </a>
                        </td>


                    </tr>


                @endif
            @endforeach

            </tbody>
        </table>
    </section>

    <section class="container section " id="eventSection">

        <br/>
        <h5 class="container titleEvent text-capitalize ">événements organisés </h5>

        <table class="table table-responsive">

            <tbody>
            @foreach( $listevent as $event )
                @if( $today = \Carbon\Carbon::now() > $event->Date )
                    <tr>

                        <td>
                            <h7><b>
                                    - {{$event->FrTitre}}
                                </b></h7>
                            <table class="table table-sm table-striped ">
                                <tbody>
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

                            <div class="text-justify textEvent underline"> {!! str_limit(" $event->FrDescription ", 270) !!}
                                <a class="lirePlus"
                                   href="{{ url('fr/scientific_events/'.$event->id) }}">
                                    Lire plus </a>
                            </div>


                            @if (Auth::check() && Auth::user()->is_admin )
                                <div class="d-inline-flex">
                                    <a href="{{ url('fr/scientific_events/'.$event->id.'/edit') }}">
                                        <button class="btn btn-warning">Editer</button>
                                    </a>

                                    <form action="{{ url('fr/scientific_events/'.$event->id) }}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger " type="submit"
                                                href="{{ url('fr/scientific_events/'.$event->id.'/edit') }}">
                                            Supprimer
                                        </button>
                                    </form>
                                </div>

                            @endif

                        </td>

                        <td width="18%" style="vertical-align: middle;" class="hidden-xs-down">

                            <a href="{{asset('img/affiches/'.$event->Affiche_url)}}">
                                <img class="img-fluid" src="{{asset('img/affiches/'.$event->Affiche_url)}}"/>
                            </a>
                        </td>


                    </tr>



                @endif
            @endforeach

            </tbody>
        </table>


    </section>
@endsection('content')



