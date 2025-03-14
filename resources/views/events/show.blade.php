<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $event->title }} - ClubSpace</title>
</head>

<body>
    <header>
        <div>
            <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 50px;">
        </div>
        <h1>{{ $event->title }}</h1>
        <nav>
            <a href="{{ route('events.index') }}">Retour à la liste</a>
        </nav>
    </header>

    <div class="container">
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
        <p>Date de début: {{ $event->start_date }}</p>
        <p>Date de fin: {{ $event->end_date }}</p>
        <p>Lieu: {{ $event->location }}</p>
    </div>

    <footer>
        <p>&copy; 2025 ClubSpace - Tous droits réservés</p>
    </footer>
</body>

</html>
