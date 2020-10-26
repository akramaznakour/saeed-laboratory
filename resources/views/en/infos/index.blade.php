@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Contact </title>
@endsection

@section('content')

    <section class="section container">

        <br/>

        <div class="row">

            <dev class="col-lg-8 col-md-12">


                <table class="table table-sm tableSite ">
                    <tbody>
                    @foreach( $listinfo as $info )

                        <tr>

                            <td>
                                <b> {{ $info->EnInformation }} </b>

                            </td>
                            <td>
                                {!! $info-> EnValeur !!}
                            </td>


                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </dev>

            <dev class="col-lg-4  ">

                               <div class="container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6807.445123258634!2d-9.731454!3d31.449303999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x46dca5f5d7fd7be8!2sEcole+Sup%C3%A9rieure+de+Technologie+d&#39;Essaouira!5e0!3m2!1sfr!2sus!4v1498044653951"
                            width="100%" height="100%" frameborder="0" style="border:0 ; margin-top: 10px;" allowfullscreen></iframe>
                </div>

                <br/>

            </dev>

        </div>
    </section>





@endsection('content')



