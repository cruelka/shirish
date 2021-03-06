<!DOCTYPE html >
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Shirish </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="fullscreen">
    <div class="headerline sticky-top">
        <nav>
            <div class="nav-wrapper blue darken-1">
                <a href="#" data-target="slide-out" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right  hide-on-med-and-down">
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                    @guest
                        <li><a href="/login">Login</a></li>
                    @else
                        <li><a href="/home">Hi, {{ Auth::user()->name }}</a></li>

                    @endguest
                </ul>
                <ul class="sidenav" id="slide-out">
                    <li>
                        <div class="user-view">
                            <div class="background blue lighten-5">
                                <img src="/img/ab-bg.jpg">
                            </div>
                            <a href="/"><img src="/img/logo-shirish.png"></a>
                            <a href="#"><span class="white-text name">Login</span></a>
                            <a href="#"><span class="white-text email">Registration</span></a>
                        </div>
                    </li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Login</a></li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="section">
        <nav class="z-depth-0">
            <div class="nav-wrapper white no row">

                <a href="/" class="brand-logo padding-small"><img src="/img/logo-shirish.png"></a>
                <form class="center-align col s5 offset-l4 hide-on-med-and-down">
                    <div class="input-field">
                        <input id="search" placeholder="Search here..." type="search" required>
                        <label class="label-icon" for="search"><i
                                class="material-icons blue-text darken-1-text">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
                <ul class="right hide-on-med-and-down">
                    <li><a class="grey-text darken-1-text" href="sass.html">Phone number</a></li>
                    <li><a class="grey-text darken-1-text" href="collapsible.html"><i class="material-icons">shopping_cart</i></a>
                    </li>
                </ul>

            </div>
        </nav>

    </div>
    <div class="section">
        <div class="center">
            @if(isset($data))
                <ul class="tabs ">
                    @foreach($data as $category)

                        <li class="tab col s3 blue-text darken-1">
                            <a href="#swipe-{{$category->id}}">{{$category->name}}</a>
                        </li>

                    @endforeach
                </ul>
                @foreach($data as $category)
                <div id="swipe-{{$category->id}}" class="padding-small col s12 blue-text">
                  @foreach($category->childs as $child)
                        <a class="waves-effect blue darken-1 btn btn-link" href="#">
                          {{$child->name}}
                        </a>
                    @endforeach
                </div>
                @endforeach


            @endif
        </div>
    </div>
    @yield('content')

    <footer class="page-footer white">
        <div class="container">
            <div class="row">
                <div class="col l3 s12">
                    <div class="white-text"><img style="width: 80%" src="/img/logo-shirish.png"></div>
                    <p class="grey-text text-darken-1">
                        +971 43 234234234234</p>
                    <p class="grey-text text-darken-1">
                        email</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="grey-text text-darken-1">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="grey-text text-darken-1">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-1" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <p class="grey-text text-darken-1">Instagram section</p>
                </div>
            </div>

        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
        var el = document.querySelectorAll('.tabs');
        var instance = M.Tabs.init(el);

    });
</script>
@yield('scripts')
</body>
</html>
