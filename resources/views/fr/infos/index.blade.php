@extends('fr.layouts.master')


@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Contact </title>
@endsection


@section('content')
    <section class="section container">

        @if (Auth::check() && Auth::user()->is_admin)
            <div>
                <a href="{{ url( 'fr/contact/create') }}">
                    <button class=" btn btn-success pull-right">
                        Nouveau
                    </button>
                </a>
            </div>
        @endif


        @if( session()->has('success'))
            <br/>
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            <br/>
        @endif

        <br/>

        <div class="row">

            <dev class="col-lg-8 col-md-12">


                <table class="table table-sm tableSite ">

                    <tbody>
                    @foreach( $listinfo as $info )

                        <tr>

                            <td>
                               <b> {{ $info->FrInformation }} </b>
                            </td>
                            <td>
                                {!! $info-> FrValeur !!}
                            </td>
                            <div>
                                @if (Auth::check() && Auth::user()->is_admin )
                                    <td>


                                        <div class="d-inline-flex">
                                            <a class="contact "
                                               href="{{ url('fr/contact/'.$info->id.'/edit') }}">
                                                <button class="btn btn-warning ">
                                                    Editer
                                                </button>
                                            </a>


                                            <form action="{{ url('fr/contact/'.$info->id) }}" method="post">

                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}

                                                <button class="btn btn-danger " type="submit"
                                                        href="{{ url('en/contact/'.$info->id.'/edit') }}"> Supprimer
                                                </button>

                                            </form>

                                        </div>
                                    </td>

                                @endif

                            </div>

                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </dev>
            <dev class="col-lg-4  ">

                <div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6807.445123258634!2d-9.731454!3d31.449303999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46dca5f5d7fd7be8!2sEcole+Sup%C3%A9rieure+de+Technologie+d&#39;Essaouira!5e0!3m2!1sfr!2sus!4v1498044653951"
                            width="100%" height="100%" frameborder="0" style="border:0 ; margin-top: 10px;"
                            allowfullscreen></iframe>
                </div>

                <br/>

            </dev>

        </div>
    </section>





@endsection('content')



