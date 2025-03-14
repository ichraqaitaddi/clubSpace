<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubSpace - Accueil</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <div>
            <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 50px;">
        </div>
        <h1>Bienvenue sur ClubSpace</h1>
        <nav>
            <a href="{{ route('socioculturel') }}">Club Socioculturel</a> |
            <a href="{{ route('sportif') }}">Club IT</a> |
            <a href="{{ route('citoyennete') }}">Club Citoyenneté & Environnement</a> |
            <a href="{{ route('events.index') }}">Événements</a> |
            <a href="{{ route('nous_rejoindre') }}">Nous Rejoindre</a>
        </nav>
    </header>
     <!-- Slider -->
     <div class="slider">
        <img src="{{ asset('images/scroll/imgit.jpg') }}" alt="Image 1" class="slide active">
        <img src="{{ asset('images/scroll/imgspr.jpg') }}" alt="Image 2" class="slide">
        <img src="{{ asset('images/scroll/ingenvr.jpg') }}" alt="Image 3" class="slide">
        <div class="carousel-text">
            <h5 class="text-scrl-1">Sous-titre ici</h5>
            <h3 class="text-scrl-2">Texte principal ici</h3>
        </div>



    <section class="intro">
        <h2>Découvrez nos clubs et événements</h2>
        <p>Explorez les différents clubs et événements organisés par notre établissement. Rejoignez-nous et participez à nos activités sociales, sportives, et culturelles !</p>
    </section>

    <div class="cards">
        <!-- Club Socioculturel -->
        <div class="card">
            <img src="{{ asset('images/club-socio.png') }}" alt="Logo Socioculturel">
            <h3>Club Socioculturel</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="{{ route('socioculturel') }}"><button>Découvrir</button></a>
        </div>

        <!-- Club IT -->
        <div class="card">
            <img src="{{ asset('images/club-it.png') }}" alt="Logo IT">
            <h3>Club IT</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="{{ route('sportif') }}"><button>Découvrir</button></a>
        </div>

        <!-- Club Citoyenneté & Environnement -->
        <div class="card">
            <img src="{{ asset('images/club-envir.png') }}" alt="Logo Citoyenneté">
            <h3>Club Citoyenneté & Environnement</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="{{ route('citoyennete') }}"><button>Découvrir</button></a>
        </div>
    </div>

    <footer>
        <nav>
            <a href="{{ route('socioculturel') }}">Club Socioculturel</a> |
            <a href="{{ route('sportif') }}">Club IT</a> |
            <a href="{{ route('citoyennete') }}">Club Citoyenneté & Environnement</a> |
            <a href="{{ route('nous_rejoindre') }}">Nous Rejoindre</a>
        </nav>
        <p>&copy; 2025 ClubSpace - Tous droits réservés</p>
    </footer>

</body>

</html>
