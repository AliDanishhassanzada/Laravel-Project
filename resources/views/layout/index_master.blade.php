<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="author" content="Ali Danish">
        <title>GOALZAR</title>
        <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">
    </head>
    <body>
        <header> 
            <h1><a href="{{ route("index") }}">GOALZARA</a></h1>
            <input id="menu-hamburger" type="checkbox">
            <nav id="menu">
                <ul>
                    <li><a href="{{ route("index") }}">Home</a></li>
                    <li><a href="{{ route("reservation.craete") }}">Reservation</a></li>
                    <li><a href="{{ route("menu") }}">Menu</a></li>
                    <li><a href="{{ route("view.create") }}">ViewPoint</a></li>
                </ul>
            </nav>
        </header>
        @yield('content')


        <footer>
            <ul class="icons">
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fab fa-facebook"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
            </ul>
            <section class="address">
                <div class="all">
                    <div>
                        <h1>Address</h1>
                        <p>5 Pule Sourkh Street</p>
                        <p>Kabul  , Code 1001</p>
                    </div>
                    <div>
                        <h1>Opening Hours</h1>
                        <p>Sat - Wen:6am - 6pm</p>
                        <p>Thr - Fri:6pm - 6am</p>
                    </div>
                    <div>
                        <h1>Contact  Us</h1>
                        <p>info@goalzara.com</p>
                        <p id="si">077 258 3688</p>
                    </div>
                </div>
                <hr>
                <p id="copyright">Made in 2023 with Ali Danish</p>
                <p id="langs">Created with HTML CSS JAVASCRIPT LARAVEL and MYSQL</p>
            </section>
        </footer>
    </body>
</html> 