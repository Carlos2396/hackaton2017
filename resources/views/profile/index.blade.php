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
                <div class="col-md-12">
                    <div="row">
                        <div class="col-md-3">
                            <h2>Ubicaciones</h2>
                        </div>
                        <div class="col-md-9">
                            <a href="/location" class="btn btn-primary text-center">Agregar ubicación</a>
                        </div>
                    </div>
                    @foreach($locations as $location)
                        <div class="col-sm-3">
                                <div class="box-simple box-white same-height">
                                    <h3>{{$location->name}}</h3>
                                    <p>{{$location->address}}.</p>
                                    <a href="/location/delete/{{$location->id}}"><button type="button" class="btn btn-xs btn-danger">Eliminar</button></a>
                                    <button type="button" class="btn btn-xs btn-info">Editar</button>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="row">
                        <h2>Pines actuales</h2>
                        @include('layouts.map')
                    </div>
                    <br>

                    <div class="row">
                    <h4>Agregar un nuevo pin</h4>
                        <form method="POST" action="/profile">
                            {{ csrf_field() }}

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="location">Ubicación</label>
                                    <select name="location" id="location">
                                        @foreach($locations as $location)
                                            <option value="{{$location->id}}">{{$location->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="residue_type">Tipo de residuo</label>
                                    <select name="residue_type" id="residue_type">
                                        @foreach($residue_types as $residue_type)
                                            <option value="{{$residue_type->id}}">{{$residue_type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </div>
                        </form>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

@endsection