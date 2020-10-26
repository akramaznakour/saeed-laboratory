@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Equipments </title>
@endsection

@section('content')
    <section class="container section">

        <br/>

        <table class="table tableSite table-sm">

            <thead>
            <th class="thproject">
                Name
            </th>
            <th class="thproject">
                Characteristics
            </th>
            </thead>
            <tbody>

            @foreach( $listEquipment as $Equipment )

                <tr>

                    <td> &nbsp;
                        {{ $Equipment->EnInformation }}

                    </td>
                    <td> &nbsp;
                        {{ $Equipment->EnValeur }}

                    </td>


                </tr>
            @endforeach


            </tbody>
        </table>
    </section>






@endsection('content')



