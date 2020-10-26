@extends('fr.layouts.master')


@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Membres | {{ $member->Nom.' '.$member->Prenom }} </title>
@endsection

@section('content')

    <section class="container section">
        <br/>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm ">

                    <tbody>

                    <tr>
                        <th>Prenom</th>
                        <td>{{ $member->Prenom }}</td>
                    </tr>

                    <tr>
                        <th width="20%">Nom</th>
                        <td>{{ $member->Nom }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $member->Email }}</td>
                    </tr>
                    <tr>
                        <th>Titre</th>
                        <td>{!! $member->FrFormation !!}  </td>
                    </tr>

                    <tr class="underline">
                        <th>Publications</th>
                        <td>{!! $member->FrPublications !!}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>





    </section>


@endsection('content')
