<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un événement</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <h1>Créer un événement</h1>
        <nav>
            <a href="{{ route('events.index') }}">Retour à la liste des événements</a>
        </nav>
    </header>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('events.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Titre de l'événement</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="start_date">Date de début</label>
            <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" required>
            <label for="start_time">Heure de début</label>
            <input type="time" name="start_time" id="start_time" value="{{ old('start_time') }}" required>
            @error('start_date')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="end_date">Date de fin</label>
            <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" required>
            <label for="end_time">Heure de fin</label>
            <input type="time" name="end_time" id="end_time" value="{{ old('end_time') }}" required>
            @error('end_date')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="location">Lieu</label>
            <input type="text" name="location" id="location" value="{{ old('location') }}" required>
            @error('location')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
            @error('description')
                <p style="color:red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Créer l'événement</button>
    </form>

</body>

</html>
