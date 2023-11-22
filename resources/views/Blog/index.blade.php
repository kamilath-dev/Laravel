@extends('base')

@section('title', 'Acceuil du blog')

@section('content')
    <section id="about" class="container-fluid">
        <div class="col-xs-8 col-md-4 profile-picture">
            <img src={{ asset("images/me.jpg") }} alt="kamilath" class="img-circle">

        </div>
        <div class="heading">
            <h1>Hello, c'est moi kamilath</h1>
            <h2>Developpeur Web</h2>
            <a href="docs/20.6 CV_JOHN.pdf.pdf" class="button1">Telecharger Cv</a>
        </div>

    </section>

    <section id="skills">
        <div class="red-divider"></div>
        <div class="heading">
            <h2>Compétences</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>HTML 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>CSS 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90"
                             aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <h5>MY SQL 90%</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85"
                             aria-valuemin="0" aria-valuemax="100" style="width:85%">
                            <h5>PHP 85%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            <h5>BOOTSTRAP 80%</h5>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75"
                             aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            <h5>LARAVEL 75%</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="experience">


        <div class="container">
            <div class="white-divider"></div>
            <div class="heading" >
                <h2>Experience Professionelle</h2>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>GOOGLE</h3>
                                <h4>Développement Web Sénior</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small>2013-2015 </p>
                            </div>
                            <div class="timeline-body">
                                <p>Ajout de la possibilité d'écouter une traduction dans Google Translate</p>
                                <p>Développement de Google Suggest en mode Offline</p>
                                <p>Nouveau design du player de Youtube adapté au mobile</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container-inverted">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>FACEBOOK</h3>
                                <h4>Développement Web </h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small>2010-2013 </p>
                            </div>
                            <div class="timeline-body">
                                <p>Développement du bouton Share pour les applis Web mobile</p>
                                <p>Développement de Google Suggest en mode Offline</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                    <div class="timeline-panel-container">
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h3>TWITTER</h3>
                                <h4>Développement Web Junior</h4>
                                <p class="text-muted"><small class="glyphicon glyphicon-time"></small>2007-2010 </p>
                            </div>
                            <div class="timeline-body">
                                <p>Création et Développement du Retweet pour l'appli Web</p>
                                <p>Intégration des vidéos sur les applis web mobile</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section id="education">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="education-block">
                        <h5>2002 - 2006</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>École Polytechnique –  Paris</h3>
                        <h4>Diplôme d'ingénieur informatique (2002 - 2006)</h4>
                        <div class="red-divider"></div>
                        <p> Intelligence Artificielle</p>
                        <p> Système d'informations</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="education-block">
                        <h5>2007</h5>
                        <span class="glyphicon glyphicon-education"></span>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Formation online "Développeur Web" (2007)</h4>
                        <div class="red-divider"></div>
                        <p>  HTML/CSS, Javascript, JQuery</p>
                        <p>  Responsive Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
                <h2>Portfolio</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.facebook.com" target="_blank">
                        <img src="images/20.7 facebook_share.png.png" alt="facebook_share">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.google.com" target="_blank">
                        <img src="images/20.5 google_translate.png.png" alt="google_translate">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.twitter.com" target="_blank">
                        <img src="images/20.1 twitter_video.png.png" alt="twitter_video">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.youtube.com" target="_blank">
                        <img src="images/20.2 youtube.png.png" alt="youtube">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.twitter.com" target="_blank">
                        <img src="images/20.8 twitter_retweet.png.png" alt="twitter_retweet">
                    </a>
                </div>
                <div class="col-sm-4">
                    <a class="thumbnail" href="http://www.facebook.com" target="_blank">
                        <img src="images/20.9 facebook_video.png.png" alt="facebook_video">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="recommandation">
        <div class="container">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Recommandation</h2>
            </div>
            <div id="mycarousel" class="carousel slide text-center" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h3>kamilath t'es le meilleur ! Merci pour tout..."</h3>
                        <h4>Larry Page Google Co-Founder</h4>
                    </div>
                    <div class="item">
                        <h3>L'esprit le plus créatif que j'ai vu de toute ma vie..."</h3>
                        <h4>Jack Dorsey Twitter Founder and CEO</h4>
                    </div>
                    <div class="item">
                        <h3>"Merci kamilath de m'avoir appris à coder... Tout ça c'est grâce à toi !"</h3>
                        <h4>Mark Zuckerberg Facebook Founder and CEO</h4>
                    </div>
                </div>
                <a class="left carousel-control" href="#mycarousel" data-slide="prev" role="button">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#mycarousel" data-slide="next" role="button">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </section>

@endsection
