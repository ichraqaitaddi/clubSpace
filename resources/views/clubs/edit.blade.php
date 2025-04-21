<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un club - ClubSpace</title>

    <!-- ✅ Bootstrap CSS uniquement pour styliser le formulaire -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

   

    <div class="container mt-5">
        <h1 class="mb-4">Modifier le club</h1>

        <form action="{{ route('clubs.update', $club->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Champ Nom -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du club</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $club->nom }}" required>
            </div>

            <!-- Champ Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ $club->description }}</textarea>
            </div>

            <!-- Champ Image (optionnel si tu veux permettre de changer l'image) -->
            <div class="mb-3">
                <label for="image" class="form-label">Image (facultatif)</label>
                <input type="file" class="form-control" id="image" name="image">
                @if($club->image)
                    <p class="mt-2">Image actuelle : <img src="{{ asset('images/' . $club->image) }}" style="width: 100px;" alt="Image actuelle"></p>
                @endif
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-warning">Mettre à jour le club</button>
            <a href="{{ route('clubs.index') }}" class="btn btn-secondary ml-2">Retour à la liste des clubs</a>
        </form>
    </div>

</body>
</html>
