@extends('layouts.master')

@section('content')
    <section class="no-mb">
        <div class="jumbotron">

            <div class="dark-mask"></div>

            <div class="container">
                <div class="row mb-small">
                    <div class="col-sm-12 text-center">
                        <h1>Universal is great</h1>
                        <h2>Last week more than 100 companies signed up to help them in their projects.</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-small">
                        <img class="img-responsive" src="img/template-mac.png" alt="">
                    </div>

                    <div class="col-sm-6 text-center-xs">
                        <p class="text-uppercase">Business. Corporate. Agency.
                            <br />Portfolio. Blog. E-commerce.
                            <br />We have covered everything.</p>
                        <p>See our current packages comparison
                            <br />to choose the right one for you.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bar background-gray no-mb padding-big text-center-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">Acerca de nosotros</h2>
                    <p class="lead mb-small"></p>
                    <p class="mb-small">We have prepared literally <strong>everything you would possibly need building corporate, e-commerce or portfolio website</strong>. If you still miss something, let us know and we will try to include it in theme's future updates.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/template-easy-customize.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section class="bar background-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Tipos de desechos</h2>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                     <div class="row">
                    @foreach($residues as $residue)
                        <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="team-member.html">
                                        <img src="img/{{$residue->image}}" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="team-member.html">{{$residue->name}}</a></h3>
                                <p class="role">{{$residue->description}}</p>
                            </div>
                            <!-- /.team-member -->
                        </div>
                    @endforeach
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->
            </section>

    <section class="bar no-mb color-white padding-big text-center-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="img/template-easy-code.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h2 class="text-uppercase">Clean, valid and documented code &amp; support</h2>
                    <p class="lead mb-small">We made our best to help you</p>
                    <p class="mb-small">Everything in this template is properly named and categorized. In case you don't find in the documentation answer to your question, our support is here to help!</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bar background-gray no-mb padding-big text-center-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-uppercase">Easy to customize</h2>
                    <p class="mb-small">We have made this template with focus on future client customization. You get <strong>40+ prepared HTML templates</strong>, many <strong>reusable components</strong> and <strong>LESS files</strong> for even easier template customization.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/template-easy-customize.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

    <section class="bar background-gray no-mb">
        <div class="container">
        <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Colaboradores</h2>
                            </div>
                        </div>
                    </div>
            <div class="row">
                @foreach($affiliates as $affiliate)
                        <div class="col-md-3 col-sm-3">
                            <div class="team-member" data-animate="fadeInUp">
                                <div class="image">
                                    <a href="{{$affiliate->link}}}">
                                        <img src="img/{{$affiliate->image}}" alt="" class="img-responsive img-circle">
                                    </a>
                                </div>
                                <h3><a href="{{$affiliate->link}}}">{{$affiliate->name}}</a></h3>
                                <p class="role">{{$affiliate->description}}</p>
                            </div>
                            <!-- /.team-member -->
                        </div>
                    @endforeach
                    <!-- /.owl-carousel -->
                </div>

            </div>
        </div>
    </section>

@endsection