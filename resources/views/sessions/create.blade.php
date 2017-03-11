@extends('layouts.master')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <h2 class="text-uppercase">Inicio de sesión</h2>

                <p class="lead">Inicia sesión para poder utilizar el servicio de recolección</p>
                <p>Gracias por contribuir con el ambiente y la sociedad</p>
                <p class="text-muted">Si aun no eres un usuario registrado da click <a href="/register">aquí</a> para registrate.</p>
                <hr>

                <form method="POST" action="/login">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>
</div>
@endsection