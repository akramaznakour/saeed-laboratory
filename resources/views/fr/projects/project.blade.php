@extends('fr.layouts.master')

@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Projets | {{ $project->FrIntitule }} </title>
@endsection

@section('content')
    <section class="container section">

        <br/>

        <table class="table table-sm tableSite ">
            <tbody>

            <tr>
                <th>
                    Intitule
                </th>
                <td>
                    {{ $project->FrIntitule }}

                </td>
            </tr>

            <tr>
                <th>
                    Responsables
                </th>
                <td class="responsableUL">
                    {!! $project->Responsable !!}
                </td>
            </tr>
            <tr>
                <th>
                    Debut
                </th>
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
            </tr>
            <tr>
                <th>
                    Fin
                </th>
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
            </tr>
            <tr>
                <th>
                    PJ
                </th>
                <td class="underline">
                    {!! $project->Content !!}
                </td>
            </tr>


            </tbody>
        </table>

    </section>
@endsection
