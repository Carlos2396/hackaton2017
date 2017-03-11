@extends('layouts.master')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <h2 class="text-uppercase">Crear cuenta</h2>

                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                <hr>

                <form action="customer-orders.html" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email-login">Email</label>
                    <input type="text" class="form-control" id="email-login" required>
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
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i> Registrarme</button>
                </div>
                </form>
            </div>
        </div>
</div>
@endsection