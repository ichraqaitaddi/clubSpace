<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer l'événement - ClubSpace</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <div>
            <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 50px;">
        </div>
        <h1>Modifier l'événement</h1>
        <nav>
            <a href="{{ route('events.index') }}">Retour à la liste des événements</a>
        </nav>
    </header>

    <div class="container">
        <h2>Éditer l'événement: {{ $event->title }}</h2>

        <!-- Formulaire d'édition d'événement -->
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Indique que la méthode HTTP utilisée est PUT pour une mise à jour -->

            <div>
                <label for="title">Titre de l'événement</label>
                <input type="text" name="title" id="title" value="{{ old('title', $event->title) }}" required>
            </div>

            <div>
                <label for="start_date">Date de début</label>
                <input type="date" name="start_date" id="start_date" value="{{ old('start_date', $event->start_date) }}" required>
            </div>

            <div>
                <label for="end_date">Date de fin</label>
                <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $event->end_date) }}" required>
            </div>

            <div>
                <label for="location">Lieu</label>
                <input type="text" name="location" id="location" value="{{ old('location', $event->location) }}" required>
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4" required>{{ old('description', $event->description) }}</textarea>
            </div>

            <button type="submit" class="button">Mettre à jour l'événement</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 ClubSpace - Tous droits réservés</p>
    </footer>

</body>

</html>
