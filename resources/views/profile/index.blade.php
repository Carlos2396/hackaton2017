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
                                <div class="box-simple box-white same-height">
                                    <h3>{{$location->name}}</h3>
                                    <p>{{$location->address}}.</p>
                                </div>
                            </div>
                    @endforeach
                    <p><a href="/localization/create" class="btn btn-template-main">Agregar ubicación</a>
                    </p>
                </div>

                <div class="col-sm-8">
                    <h2>Pines actuales</h2>
                    @include('layouts.map')
                </div>
                </div>
            </div>
        </div>
    </section>

@endsection