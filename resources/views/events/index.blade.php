<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des événements</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <div>
            <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 50px;">
        </div>
        <h1>Liste des événements</h1>
        <nav>
            <a href="{{ route('socioculturel') }}">Club Socioculturel</a> |
            <a href="{{ route('sportif') }}">Club IT</a> |
            <a href="{{ route('citoyennete') }}">Club Citoyenneté & Environnement</a> |
            <a href="{{ route('events.create') }}">Créer un événement</a>
        </nav>
    </header>

    <div class="events-list">
        @foreach ($events as $event)
        <div class="event-card">
            <h3>{{ $event->title }}</h3>
            <p>{{ $event->description }}</p>
            <p><strong>Lieu:</strong> {{ $event->location }}</p>
            <p><strong>Date de début:</strong> {{ $event->start_date }}</p>
            <p><strong>Date de fin:</strong> {{ $event->end_date }}</p>
            <a href="{{ route('events.show', $event->id) }}"><button>Voir</button></a>
            <a href="{{ route('events.edit', $event->id) }}"><button>Éditer</button></a>
            <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </div>
        @endforeach
    </div>

    <footer>
        <p>&copy; 2025 ClubSpace - Tous droits réservés</p>
    </footer>

</body>

</html>
