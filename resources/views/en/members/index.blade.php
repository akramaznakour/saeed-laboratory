@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Members </title>
@endsection

@section('content')

    <section class="container section">

        <br/>
        <table >
            <tbody>

            @foreach( $listmember as $member)


                <tr>

                    <td>
                        <a href="{{ url('en/members/'.$member->id) }}">
                            &diamondsuit;
                            &nbsp;
                            {{ $member->Nom }}
                            &nbsp;
                        </a>

                    </td>
                    <td>
                        <a href="{{ url('en/members/'.$member->id) }}">
                            {{ $member->Prenom }}
                            &nbsp;
                        </a>
                    </td>
                    <td >
                        <a href="{{ url('en/members/'.$member->id) }}">
                            &nbsp;
                            <i>
                                <span style="font-size: 12px; color: gray;">
                                :: {{ $member->EnFormation }}

                            </span>
                            </i>
                        </a>
                    </td>
                </tr>







            @endforeach

            </tbody>
        </table>
    </section>
@endsection('content')
