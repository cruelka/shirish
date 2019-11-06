@extends('layouts.app')
@section('content')

    <div class="content">
        <div class="blue darken-1 z-depth-1">
            <div id="main-slider">
                <div class="slide-element background">
                    <img class="responsive-img" src="/img/slider.png">

                </div>
                <div class="slide-element background">
                    <img class="responsive-img" src="/img/slider.png">
                </div>
            </div>
        </div>
        <div class="section">
            <h5 class="center-align blue-grey-text darken-2 "> Header 1</h5>


                <div class="blue darken-1 z-depth-1">
                    <div id="deals-slider" class="row">

                        @for($i = 0; $i < 5; $i ++)
                            @include('partials.product')
                        @endfor
                    </div>
                </div>

        </div>
        <div class="section">
            <h5 class="center-align blue-grey-text darken-2 "> Header 2</h5>

            <div class="row">
                @for($i = 0; $i < 3; $i ++)
                    @include('partials.product')
                @endfor
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $("#main-slider").slick({
            infinite: false,
            dots: true,
            adaptiveHeight: true,
            arrows:true,
            // the magic
            responsive: [{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
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
    <script>
        $("#deals-slider").slick({
            dots: true,
            adaptiveHeight: true,
            arrows:true,
            slidesPerRow: 3,

            // the magic
            responsive: [{

                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
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
