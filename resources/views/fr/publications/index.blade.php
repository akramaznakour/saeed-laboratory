@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Publications </title>

@endsection


@section('content')
    <section class="container section">


        @if (Auth::check() && Auth::user()->is_admin)
            <div>
                <a href="{{ url( 'fr/publications/create') }}">
                    <button class=" btn btn-success">
                        Nouveau
                    </button>
                </a>
                <br/><br/>
            </div>
        @endif

        @if( session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        <br/>

        <table class="table table-sm  " >
            <ul>

                @foreach( $listpublication as $publication )
                    <tr>
                        <td style="padding-left:25px">

                            <li >
                                <a href="{{ url('fr/publications/'.$publication->id) }}">
                                   <span class="titrePublication">&nbsp;&nbsp;
                                       {{$publication->FrTitre}} /
                                       <span class="publicationjournal">
                                               <b>
                                                   {{$publication->Journal}} {{$publication->Annee}}
                                               </b>
                                       </span>
                                   </span>
                                </a>

                            </li>

                        </td>
                        @if (Auth::check() && Auth::user()->is_admin )
                            <td class="d-inline-flex">

                                <a href="{{ url('fr/publications/'.$publication->id.'/edit') }}">
                                    <button class="btn btn-warning ">Editer</button>
                                </a>


                                <form action="{{ url('fr/publications/'.$publication->id) }}" method="post">

                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger " type="submit"
                                            href="{{ url('fr/publications/'.$publication->id.'/edit') }}"> Supprimer
                                    </button>

                                </form>
                            </td>
                        @endif

                    </tr>


                @endforeach
            </ul>

        </table>
    </section>




@endsection('content')



