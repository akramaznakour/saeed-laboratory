@extends('fr.layouts.master')


@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Projets </title>

    <style>
        .table {
            font-size: 10px;
        }
    </style>
@endsection

@section('content')
    <section class="container section">


        @if (Auth::check() && Auth::user()->is_admin)
            <div>
                <a href="{{ url( 'fr/research_projects/create') }}">
                    <button class=" btn btn-success ">
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

        <table class="table table-sm tableSite ">
            <thead>
            <tr>
                <th class="thproject">
                    Responsables
                </th>
                <th class="thproject">
                    Intitulé
                </th>
                <th class="thproject">
                    Début
                </th>

                <th class="thproject">
                    Fin
                </th>
                @if (Auth::check() && Auth::user()->is_admin )
                    <th class="thproject">

                    </th>
                @endif
            </tr>

            </thead>
            <tbody>
            @foreach( $listproject as $project )
                <tr>
                    <td class="responsableProjects">

                        {!!$project->Responsable !!}
                    </td>
                    <td class="underline ">
                        {{ $project->FrIntitule }}
                        <a class="lirePlus " href="{{ url('fr/research_projects/'.$project->id) }}"> <i
                                    class="icon-next"></i> <span class="">
                                lire plus</span> </a>

                    </td>

                    <td>
                        @php
                            if ( ($project->DateStart) != (NULL)){
                                       switch ( Carbon\Carbon::parse($project->DateStart)->format('m') )
                                        {    case '1':
                                                echo "Jan";
                                                break;
                                            case '2':
                                                echo "Fév";
                                                break;
                                            case '3':
                                                echo "Mar";
                                                break;
                                            case '4':
                                                echo "Avr";
                                                break;
                                            case '5':
                                                echo "Mai";
                                                break;
                                            case '6':
                                                echo "Jun";
                                                break;
                                            case '7':
                                                echo "Jul";
                                                break;
                                            case '8':
                                                echo "Aou";
                                                break;
                                            case '9':
                                                echo "Sep";
                                                break;
                                            case '10':
                                                echo "Oct";
                                                break;
                                             case '11':
                                                echo "Nov";
                                                break;
                                            case '12':
                                                echo "Déc";
                                                break;

                                        };
                              echo Carbon\Carbon::parse($project->DateStart)->format('-Y');
                            }
                        @endphp

                    </td>

                    <td>
                        @php
                            if ( ($project->DateEnd) != (NULL)){

                                  switch ( Carbon\Carbon::parse($project->DateEnd)->format('m') )
                                 {    case '1':
                                         echo "Jan";
                                         break;
                                     case '2':
                                         echo "Fév";
                                         break;
                                     case '3':
                                         echo "Mar";
                                         break;
                                     case '4':
                                         echo "Avr";
                                         break;
                                     case '5':
                                         echo "Mai";
                                         break;
                                     case '6':
                                         echo "Jun";
                                         break;
                                     case '7':
                                         echo "Jul";
                                         break;
                                     case '8':
                                         echo "Aou";
                                         break;
                                     case '9':
                                         echo "Sep";
                                         break;
                                     case '10':
                                         echo "Oct";
                                         break;
                                      case '11':
                                         echo "Nov";
                                         break;
                                     case '12':
                                         echo "Déc";
                                         break;
                                 };

                                 echo Carbon\Carbon::parse($project->DateEnd)->format('-Y');}
                        @endphp
                    </td>

                    @if (Auth::check() && Auth::user()->is_admin )
                        <td>

                            <div class="d-inline-flex">

                                <a href="{{ url('fr/research_projects/'.$project->id.'/edit') }}">
                                    <button class="btn btn-warning ">Editer</button>
                                </a>


                                <form action="{{ url('fr/research_projects/'.$project->id) }}" method="post">

                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger " type="submit"
                                            href="{{ url('fr/research_projects/'.$project->id.'/edit') }}"> Supprimer
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



