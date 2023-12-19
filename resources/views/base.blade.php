<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/index.js') }}"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60 ">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid" style="background: #e20c0c;" >
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"
                    data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar" >
            <ul class="nav navbar-nav" >
                <li><a href="#about">MOI</a></li>
                <li><a href="#skills">COMPETENCES</a></li>
                <li><a href="#experience">EXPERIENCES</a></li>
                <li><a href="#education">EDUCATION</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#recommandation">RECOMMENDATION</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('register') }}">
                    <span class="gluphicon glyphicon-log-in">
                        Login
                    </span></a>
                </li>
            </ul>
        </div>
        <!-- <div class="white-divider"></div> -->
    </div>
</nav>

@yield('content')

<footer class="text-center">
    <a href="#about">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <h5> copyright © 2023 APPRENDRE-A-CODER.COM </h5>
</footer>
</body>
</html>
