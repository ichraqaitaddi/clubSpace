<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Club - {{ $club->nom }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<nav class="navbar">
    @include('components.navbar.navbar')
</nav>


<body data-rsssl=1 class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-2339 wp-custom-logo elementor-default elementor-kit-2323 elementor-page elementor-page-2339">
<body>

    <header class="bg-purple text-white py-3 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <nav>
                <a href="{{ route('index') }}" class="text-white mx-2">Accueil</a>|
                <a href="{{ route('clubs.index') }}" class="text-white mx-2">Nos Clubs</a>
            </nav>
        </div>
    </header>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">{{ $club->nom }}</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/' . $club->image) }}" alt="{{ $club->nom }}" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Description</h3>
                <p>{{ $club->description }}</p>

                
             <!-- ajout des evenements qui appartient au club (one to many club event) -->   
            </div>
        </div>
        <a href="{{ route('homeClub.index') }}" class="btn btn-primary mt-3">Retour à la liste des clubs</a>
    </div>
</body>
<footer >
    @include('components.navbar.footer')
</footer>
</html>
