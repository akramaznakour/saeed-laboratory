@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Evenements </title>
@endsection

@section('content')
    <section class="container section">

        <br/>
        <h5 class="container titleEvent text-capitalize">News</h5>

        <table class="table table-responsive  ">

            <tbody>
            @foreach( $listevent as $event )
                @if( $today = \Carbon\Carbon::now() <= $event->Date )
                    <tr>

                        <td>
                            <h7><b>
                                    - {{$event->EnTitre}}
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

                            <div class="text-justify textEvent underline "> {!! str_limit(" $event->EnDescription ", 270) !!}
                                <a class="lirePlus"
                                   href="{{ url('en/scientific_events/'.$event->id) }}">
                                    Read more </a>
                            </div>


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

    <section class="container section " id="eventSection">

        <br/>
        <h5 class="container titleEvent text-capitalize">Organized Events</h5>

        <table class="table table-responsive ">

            <tbody>
            @foreach( $listevent as $event )
                @if( $today = \Carbon\Carbon::now() > $event->Date )
                    <tr>

                        <td>
                            <br/>
                            <h7><b>
                                    - {{$event->EnTitre}}
                                </b></h7>                            <table class="table table-sm table-striped ">

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

                            <div class="text-justify textEvent underline"> {!! str_limit(" $event->EnDescription ", 270) !!}
                                <a class="lirePlus"
                                   href="{{ url('en/scientific_events/'.$event->id) }}">
                                    Read more </a>
                            </div>
                            <br/><br/>

                        </td>


                        <td width="18%" style="vertical-align: middle;" class="hidden-xs-down">
                            <br/><br/><br/>
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



