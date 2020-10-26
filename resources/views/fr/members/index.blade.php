@extends('fr.layouts.master')


@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Membres </title>
@endsection

@section('content')

    <section class="container section ">

        <div>

            @if (Auth::check() && Auth::user()->is_admin )
                <a href="{{ url( 'fr/members/create') }}">
                    <button class=" btn btn-success ">
                        Nouveau
                    </button>
                </a>

            @endif
        </div>


        @if( session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        <br/>

        <table>
            <tbody>

            @foreach( $listmember as $member)


                <tr>

                    <td>
                        <a href="{{ url('fr/members/'.$member->id) }}">
                            &diamondsuit;
                            &nbsp;
                            {{ $member->Nom }}
                            &nbsp;
                        </a>

                    </td>
                    <td>
                        <a href="{{ url('fr/members/'.$member->id) }}">
                            {{ $member->Prenom }}

                        </a>
                    </td>
                    <td >
                        <a href="{{ url('fr/members/'.$member->id) }}">
                            &nbsp;
                            <i>
                                <span style="font-size: 12px; color: gray;">
                                :: {{ $member->FrFormation }}

                            </span>
                            </i>
                        </a>
                    </td>

                    @if (Auth::check() && Auth::user()->is_admin )
                        <td>
                            <div class="d-inline-flex">

                                <a class=" " href="{{ url('fr/members/'.$member->id.'/edit') }}">
                                    <button class="btn btn-warning">
                                        Editer
                                    </button>
                                </a>

                                <form action="{{ url('fr/members/'.$member->id) }}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger " type="submit"
                                            href="{{ url('fr/members/'.$member->id.'/edit') }}">Supprimer
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
