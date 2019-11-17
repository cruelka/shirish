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
                    <li><a href="#">Login</a></li>
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

                <a href="#" class="brand-logo padding-small"><img src="/img/logo-shirish.png"></a>
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
            <a class="waves-effect blue darken-1 btn"><i class="material-icons left">free_breakfast</i>Glassware</a>
            <a class="waves-effect blue darken-1 btn"><i class="material-icons left">kitchen</i>Kitchen Products</a>
            <a class="waves-effect blue darken-1 btn"><i class="material-icons left">cloud</i>Tableware</a>
            <a class="waves-effect blue darken-1 btn"><i class="material-icons left">spa</i>Cleaning Products</a>
            <a class="waves-effect blue darken-1 btn"><i class="material-icons left">child_friendly</i>Kidswear</a>
            <a class="waves-effect blue darken-1 btn"><i class="material-icons left">business_center</i>Office Supplies</a>
        </div>
    </div>
    @yield('content')

    <footer class="page-footer white">
        <div class="container">
            <div class="row">
                <div class="col l3 s12">
                    <div class="white-text"><img src="/img/logo-shirish.png"></div>
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
            </div>
            <div class="col l3 s12">
                Instagram section
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
    });
</script>
@yield('scripts')
</body>
</html>
