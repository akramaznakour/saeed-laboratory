@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Equipements </title>
@endsection

@section('content')
    <section class="container section">


        @if (Auth::check() && Auth::user()->is_admin)
            <div>

                <a href="{{ url( 'fr/equipments/create') }}">
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
        @endif

        <br/>
        <table class="table table-sm tableSite">

            <thead>
            <th class="thproject">
                Nom
            </th>
            <th class="thproject">
                Caractéristiques
            </th>
            @if (Auth::check() && Auth::user()->is_admin )
                <th class="thproject">
                </th>
            @endif
            </thead>
            <tbody>
            @foreach( $listEquipment as $Equipment )

                <tr>

                    <td>
                        &nbsp;
                        {{ $Equipment->FrInformation }}

                    </td>
                    <td>
                        &nbsp;
                        {{ $Equipment->FrValeur }}

                    </td>
                    @if (Auth::check() && Auth::user()->is_admin )


                        <td >
                            <div class="d-inline-flex">

                            <a href="{{ url('fr/equipments/'.$Equipment->id.'/edit') }}">
                                <button class="btn btn-warning ">
                                    Editer
                                </button>
                            </a>


                            <form action="{{ url('fr/equipments/'.$Equipment->id) }}" method="post">

                                {{csrf_field()}}
                                {{method_field('DELETE')}}

                                <button class="btn btn-danger " type="submit"
                                        href="{{ url('fr/equipments/'.$Equipment->id.'/edit') }}"> Supprimer
                                </button>

                            </form>
                            </div>
                        </td>

                    @endif


                </tr>

            @endforeach


            </tbody>
        </table>
    </section>






@endsection('content')



