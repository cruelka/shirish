@extends('layouts.app')
@section('content')

    <div class="content">
        <div class="">
            <div id="main-slider">
                <div class="slide-element background">
                    <img class="responsive-img" style="margin: 0 auto" src="/img/slider.png">

                </div>
                <div class="slide-element background">
                    <img class="responsive-img" style="margin: 0 auto" src="/img/slider.png">
                </div>
            </div>
            <div class="row white">
                <div class="col s12 m4 border-right border-secondary">
                    <div class="row">
                        <div class="col s12 m4 background ">
                            <img src="/img/ab-bg.jpg" class="responsive-img padding-small">
                        </div>
                        <div class="col s12 m8">
                            <p class="font-weight-bold ">Free shipping worldwide</p>
                            <p>text is here</p>
                        </div>
                    </div>

                </div>
                <div class="col s12 m4">
                    <div class="row">
                        <div class="col s12 m4 background">
                            <img src="/img/ab-bg.jpg" class="responsive-img padding-small">
                        </div>
                        <div class="col s12 m8">
                            <p class="font-weight-bold ">Free shipping worldwide</p>
                            <p>text is here</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="row">
                        <div class="col s12 m4 background">
                            <img src="/img/ab-bg.jpg" class="responsive-img padding-small">
                        </div>
                        <div class="col s12 m8">
                            <p class="font-weight-bold ">Free shipping worldwide</p>
                            <p>text is here</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="section ">
            <h5 class="left-align blue darken-1 white-text padding-small "> Deals of the Week</h5>

            <div class=" darken-1">
                <div id="deals-slider" class="row">
                    @for($i = 0; $i < 5; $i ++)
                        @include('partials.product-timer')
                    @endfor
                </div>
            </div>

        </div>
        <div class="section">
            <div class=" container">
                <h5 class="left-align blue-grey-text darken-2 "> New Products</h5>
                <div class="divider"></div>
                <div class="grey darken-1 ">
                    <div id="promo-slider" class="row">
                        @for($i = 0; $i < 5; $i ++)
                            @include('partials.product')
                        @endfor
                    </div>
                </div>
                <div class="divider"></div>

            </div>

        </div>
        <div class="section">

            <h5 class="left-align text-left">Top trending search this week</h5>
            <div>
                <div id="small-slider" class="row">
                    @for($i = 0; $i < 7; $i ++)
                        @include('partials.product-small')
                    @endfor
                </div>
            </div>
            <div class="divider"></div>
        </div>
    <div class="section">
        <div class="row">
            <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Banner </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Banner </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Banner </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
    <div class="section">
        <div class="row">
            <div class="section-header">
                <div class="row">
                    <h5 class="left-align col s12 m6">Cookware</h5>
                    <div class="right-align col s12 m6">
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Sets</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Egg poachers</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Frying pans</a>
                    </div>
                </div>
            </div>
            <div>
                <div id="big-slider" class="row">
                    @for($i = 0; $i < 5; $i ++)
                        @include('partials.product')
                    @endfor
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="section-header">
                <div class="row">
                    <h5 class="left-align col s12 m6">Electrical & Appliances</h5>
                    <div class="right-align col s12 m6">
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Mixers</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Toasters</a>
                        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Blenders</a>
                    </div>
                </div>
            </div>
            <div>
                <div id="big-slider-2" class="row">
                    @for($i = 0; $i < 5; $i ++)
                        @include('partials.product')
                    @endfor
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col s6 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">brand </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
            <div class="col s6 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">brand </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
            <div class="col s6 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">brand </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
            <div class="col s6 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">brand </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
            <div class="col s6 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">brand </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
            <div class="col s6 m2">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">brand </span>
                        <p>Description.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
        <div class="section">

            <h5 class="left-align">Most Viewed</h5>

            <div>
                <div id="most-viewed-slider" class="row">
                    @for($i = 0; $i < 7; $i ++)
                        @include('partials.product-small-horizontal')
                    @endfor
                </div>
            </div>
            <div class="divider"></div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $("#most-viewed-slider").slick({
            infinite: false,
            dots: true,
            slidesToShow: 4,
            arrows: true,
            // the magic
            responsive: [{

                breakpoint: 1024,
                settings: {
                    infinite: true
                }

            }, {

                breakpoint: 600,
                settings: {
                    dots: true
                }

            }, {

                breakpoint: 300,
                settings: "unslick" // destroys slick

            }]
        });
    </script>
    <script>
        $("#main-slider").slick({
            infinite: false,
            arrows: true,
            // the magic
            responsive: [{

                breakpoint: 1024,
                settings: {
                    infinite: true
                }

            }, {

                breakpoint: 600,
                settings: {
                    dots: true
                }

            }, {

                breakpoint: 300,
                settings: "unslick" // destroys slick

            }]
        });
    </script>
    <script>
        $("#deals-slider").slick({
            dots: true,
            adaptiveHeight: true,
            arrows: true,
            slidesToShow: 3,

            responsive: [{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                }

            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }

            }, {

                breakpoint: 300,

                settings: "unslick" // destroys slick

            }]
        });
    </script>
    <script>
        $("#promo-slider").slick({
            dots: true,
            adaptiveHeight: true,
            arrows: true,
            slidesToShow: 3,

            responsive: [{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                }

            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }

            }, {

                breakpoint: 300,

                settings: "unslick" // destroys slick

            }]
        });
    </script>
    <script>
        $("#big-slider").slick({
            dots: true,
            adaptiveHeight: true,
            arrows: true,
            slidesToShow: 3,

            responsive: [{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                }

            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }

            }, {

                breakpoint: 300,

                settings: "unslick" // destroys slick

            }]
        });
    </script>
    <script>
        $("#big-slider-2").slick({
            dots: true,
            adaptiveHeight: true,
            arrows: true,
            slidesToShow: 3,

            responsive: [{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                }

            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }

            }, {

                breakpoint: 300,

                settings: "unslick" // destroys slick

            }]
        });
    </script>
    <script>
        $("#small-slider").slick({
            dots: true,
            adaptiveHeight: true,
            arrows: true,
            slidesToShow: 6,

            responsive: [{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 6,
                    infinite: true
                }

            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    dots: true
                }

            }, {

                breakpoint: 300,

                settings: "unslick" // destroys slick

            }]
        });
    </script>

@endsection
