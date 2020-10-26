@extends('en.layouts.master')

@section('title')
    <title>Research Laboratory EST ESSAOUIRA | Projets | {{ $project->intitule }}  </title>
@endsection


@section('content')
    <section class="container section">

        <br/>


        <table class=" tableSite table-sm table">
            <tbody>

            <tr>
                <th>
                    Entitle
                </th>
                <td>
                    {{ $project->EnIntitule }}

                </td>
            </tr>

            <tr>
                <th>
                    Responsibles
                </th>
                <td class="responsableUL">
                    {!! $project->Responsable !!}

                </td>
            </tr>

            <tr>
                <th>
                    Started
                </th>
                <td>
                    @php
                        if ( ($project->DateStart) != (NULL)){
                                 echo Carbon\Carbon::parse($project->DateStart)->format('M-Y');
                        }
                    @endphp
                </td>
            </tr>
            <tr>
                <th>
                    Ended
                </th>
                <td>
                    @php
                        if ( ($project->DateEnd) != (NULL)){
                                 echo Carbon\Carbon::parse($project->DateEnd)->format('M-Y');
                        }
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
