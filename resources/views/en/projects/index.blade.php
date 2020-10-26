@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Projects </title>
@endsection

@section('content')
    <section class="container section">

        <br/>


        <table class="table table-sm tableSite ">
            <thead>
            <tr>
                <th class="thproject">
                    Responsibles
                </th>
                <th class="thproject">
                    Entitle
                </th>
                <th class="thproject">
                    Start
                </th>

                <th class="thproject">
                    End
                </th>

            </tr>

            </thead>
            <tbody>
            @foreach( $listproject as $project )
                <tr>
                    <td class="responsableProjects">
                        {!! $project->Responsable !!}
                    </td>
                    <td class="underline ">
                        {{ $project->EnIntitule }}
                        <a class="lirePlus " href="{{ url('en/research_projects/'.$project->id) }}"> <i
                            ></i> <span>
                                Read more</span> </a>

                    </td>

                    <td>
                        @php
                        if ( ($project->DateStart) != (NULL)){
                                 echo Carbon\Carbon::parse($project->DateStart)->format('M-Y');
                        }
                        @endphp
                    </td>
                    <td>
                        @php
                            if ( ($project->DateEnd) != (NULL)){
                                     echo Carbon\Carbon::parse($project->DateEnd)->format('M-Y');
                            }
                        @endphp                    </td>

                </tr>

            @endforeach


            </tbody>

        </table>
    </section>




@endsection('content')



