@extends('layouts.master')
@section('content')

    <section class="bar background-white no-mb">
        <div class="container">

            <div class="col-md-12">
                <div class="heading text-center">
                    <h2>Hola {{ auth()->user()->name }}</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h2>Ubicaciones</h2>
                    @foreach($locations as $location)
                        <div class="col-sm-12">
                                <div class="box-simple box-dark same-height">
                                    <h3>{{$location->name}}</h3>
                                    <p>{{$location->address}}.</p>
                                </div>
                            </div>
                    @endforeach
                     <button type="button" class="btn btn-lg btn-template-primary"> <a href="/location/create" style="color:white">Agregar ubicación</a> </button>
                </div>

                <div class="col-sm-8">

                </div>
                </div>
            </div>
        </div>
    </section>

@endsection