@extends('en.layouts.master')

@section('title')
    <title> Research Laboratory EST ESSAOUIRA | Research Axes </title>
@endsection

@section('content')

    <section class="container section">
        <br/>

        <table class="table table-sm">
            @foreach( $listaxe as $axe )

                <tr>

                    <td>

                        <div role="tab" id="heading{{ $axe->id }}">

                            <a class="collapsed " data-toggle="collapse" data-parent="#accordion"
                               href="#collapse{{ $axe->id }}"
                               aria-expanded="false"
                               aria-controls="collapse{{ $axe->id }}">
                                <span class="titreAxe">
                                    {{$axe->EnTitre }}
                                </span>
                            </a>

                        </div>


                        <div id="collapse{{ $axe->id }}" class="collapse text-justify" role="tabpanel"
                             aria-labelledby="heading{{ $axe->id }}">
                           <span class="textAxe">
                               {!!   $axe->EnContenu !!}
                           </span>
                        </div>


                    </td>

                </tr>

            @endforeach


        </table>


    </section>




@endsection('content')



