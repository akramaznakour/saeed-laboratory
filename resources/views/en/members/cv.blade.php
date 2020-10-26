@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Members | {{ $member->Nom }} {{ $member->Prenom }} </title>
@endsection

@section('content')

    <section class="container section">

        <br/>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm  ">

                    <tbody>
                    <tr>
                        <th width="20%">First Name</th>
                        <td>{{ $member->Prenom }}</td>
                    </tr>

                    <tr>
                        <th >Last Name</th>
                        <td>{{ $member->Nom }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $member->Email }}</td>
                    </tr>


                    <tr>
                        <th>Title</th>
                        <td>{!! $member->EnFormation !!}  </td>
                    </tr>

                    <tr class="underline">
                        <th>Publications</th>
                        <td>{!! $member->EnPublications !!}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </section>
@endsection('content')
