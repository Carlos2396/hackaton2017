@extends('layouts.master')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <h2 class="text-uppercase">Registro</h2>

                <p class="lead">¿Aún no te has registrado?</p>
                <p>Al registrarte podras utilizar nuestro servicio de recolección de reciclables desde la comodidad de tu hogar.</p>
                <p class="text-muted">Si ya tienes una cuenta da click <a href="/login">aquí</a> para iniciar sesión.</p>

                <hr>

                <form action="/register" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmación de contraseña:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Registrarme</button>
                </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
    </div>
</div>
@endsection