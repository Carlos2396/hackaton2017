@extends('layouts.master')

@section('content')
    <div class="container">
        <!-- /.row -->
            <div class="row">
        @foreach($residues as $residue)
            <div class="col-md-3 col-sm-3">
                <div class="team-member" data-animate="fadeInUp">
                    <div class="image">
                        <a href="#">
                            <img src="img/marker{{$residue->id}}.png" alt="" class="img-responsive img-circle">
                        </a>
                    </div>
                    <h3><a href="#">{{$residue->name}}</a></h3>
                </div>
                <!-- /.team-member -->
            </div>
        @endforeach
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<div class="row">
    <div class="col-md-12">
        @include('layouts.map')
    </div>
</div>

@endsection