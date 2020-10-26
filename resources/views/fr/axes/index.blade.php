@extends('fr.layouts.master')
@section('title')
    <title> Laboratoire De Recherche EST ESSAOUIRA | Axes De Recherche </title>
@endsection
@section('content')

    <section class="container section">


        @if (Auth::check() && Auth::user()->is_admin)
            <div>
                <a href="{{ url( 'fr/research_axes/create') }}">
                    <button class=" btn btn-success ">
                        Nouveau
                    </button>
                </a>
            </div>
        @endif


        @if( session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif

        <br/>

        <table class="table table-sm">
            @foreach( $listaxe as $axe )


                <tr>

                    <td>


                        <div role="tab" id="heading{{ $axe->id }}">

                            <a class="collapsed "
                               data-toggle="collapse"
                               data-parent="#accordion "
                               style="text-decoration: none;"
                               href="#collapse{{ $axe->id }}"
                               aria-expanded="false"
                               aria-controls="collapse{{ $axe->id }}">

                                <span class="titreAxe" >
                                    {{$axe->FrTitre }}
                                </span>
                            </a>

                        </div>


                        <div id="collapse{{ $axe->id }}" class="collapse text-justify" role="tabpanel"
                             aria-labelledby="heading{{ $axe->id }}">
                            <span class="textAxe">
                                {!!   $axe->FrContenu !!}
                            </span>
                        </div>

                        @if (Auth::check() && Auth::user()->is_admin )

                            <div class="d-inline-flex">
                                <a
                                        href="{{ url('fr/research_axes/'.$axe->id.'/edit') }}">
                                    <button class="btn btn-warning">
                                        Editer
                                    </button>
                                </a>


                                <form action="{{ url('fr/research_axes/'.$axe->id) }}" method="post">

                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}

                                    <button class="btn btn-danger " type="submit"
                                            href="{{ url('fr/research_axes/'.$axe->id.'/edit') }}"> Supprimer
                                    </button>

                                </form>
                            </div>

                        @endif

                    </td>

                </tr>

            @endforeach


        </table>


    </section>




@endsection('content')



