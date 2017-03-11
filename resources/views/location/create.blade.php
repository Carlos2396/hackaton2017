@extends('layouts.master')

@section('content')
    <div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <h2 class="text-uppercase">Agregar ubicación</h2>

                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                <hr>

                <form action="/register" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre de la ubicación</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Agregar</button>
                </div>
                </form>
                @include('layouts.errors')
            </div>
        </div>
</div>
@endsection