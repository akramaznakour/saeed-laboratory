@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Publications </title>
@endsection


@section('content')
    <section class="container section">

        <br/>

        <table class="table table-sm ">
            <ul>
                @foreach( $listpublication as $publication )
                    <tr>
                        <td style="padding-left:25px">

                            <li>
                                <a href="{{ url('en/publications/'.$publication->id) }}">
                                   <span class="titrePublication">
                                       {{$publication->EnTitre}} /
                                       <span class="publicationjournal">
                                               <b>
                                                   &nbsp;&nbsp;{{$publication->Journal}} {{$publication->Annee}}
                                               </b>
                                       </span>
                                   </span>
                                </a>

                            </li>

                        </td>
                    </tr>


                @endforeach
            </ul>
        </table>


    </section>


@endsection('content')



