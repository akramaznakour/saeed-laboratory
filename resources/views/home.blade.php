@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div role="tab" id="heading1">

                    <button class="collapsed btn btn-primary "
                            data-toggle="collapse"
                            data-parent="#accordion "
                            href="#collapse1"
                            aria-expanded="false"
                            aria-controls="collapse1">


                        Editer vitre <données></données>
                    </button>

                </div>


                <div id="collapse1" class="collapse text-justify" role="tabpanel"
                     aria-labelledby="heading1">

                    <form action="{{ url('home') }}" method="post">

                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}

                        <br/>

                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="name" class="form-control"
                                   value=" {{ Auth::user()->name }}"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"
                                   value=" {{ Auth::user()->email }}"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"/>
                        </div>

                        <div class="d-inline-flex">

                            <button type="submit" class=" btn btn-primary">
                                Enregistrer
                            </button>

                            <a data-toggle="collapse"
                               data-parent="#accordion "
                               href="#collapse1"
                               aria-expanded="false"
                               aria-controls="collapse1">
                                <button class=" btn btn-warning">
                                    Annuler
                                </button>
                            </a>
                        </div>

                    </form>


                    <br/>
                </div>


            </div>


            <div class="col-md-6">
                <div role="tab" id="heading2">

                    <button class="collapsed btn btn-primary container-fluid"
                            data-toggle="collapse"
                            data-parent="#accordion "
                            href="#collapse2"
                            aria-expanded="false"
                            aria-controls="collapse1">


                        Créer un nevaux admin
                    </button>

                </div>


                <div id="collapse2" class="collapse text-justify" role="tabpane2"
                     aria-labelledby="heading2">

                    <form action="{{ url('home/create') }}" method="post">

                        <input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}

                        <br/>

                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control"/>
                        </div>


                            <button type="submit" class=" btn btn-primary">
                                creer
                            </button>




                    </form>


                    <br/>
                </div>


            </div>
        </div>
    </div>
@endsection

