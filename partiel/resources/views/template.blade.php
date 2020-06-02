<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    {!! Html::style('lib/bootstrap/bootstrap.css') !!}
    {!! Html::style('css/films.css') !!}

    <title>@yield('titrePage')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">

        <a class="navbar-brand" href="{{url('/films')}}">Filmsweb</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/films')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Voir...
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/categories')}}">Les catégories</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Ajouter
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/films.create')}}">Ajouter un film</a>
                        <!--<a class="dropdown-item" href="{{url('/categories.create')}}">Ajouter une catégorie</a>-->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<header>
    <h1>@yield('titreItem')</h1>
</header>
@yield('contenu')

<footer class="footer">
    <p>FilmWeb - copyright 3AInfo - 2020</p>
</footer>
{!! Html::script('lib/jquery/jquery-3.5.1.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
{!! Html::script('lib/js/bootstrap.js/bootstrap.js') !!}
</body>
</html>