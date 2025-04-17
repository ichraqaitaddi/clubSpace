<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Club - {{ $club->nom }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header class="bg-purple text-white py-3 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 50px;">
            <h1>ClubSpace</h1>
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
                <!-- Affichage de l'image du club -->
                <img src="{{ asset('storage/' . $club->image) }}" alt="{{ $club->nom }}" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <h3>Description</h3>
                <p>{{ $club->description }}</p>
                <h4>Informations supplémentaires :</h4>
                <ul>
                    <li><strong>Formateur(s):</strong> {{ $club->formateurs }}</li>
                    <li><strong>Activité principale:</strong> {{ $club->activite }}</li>
                    
                    <!-- Ajouter d'autres informations si disponibles -->
                </ul>
            </div>
        </div>
        <a href="{{ route('homeClub.index') }}" class="btn btn-primary mt-3">Retour à la liste des clubs</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
