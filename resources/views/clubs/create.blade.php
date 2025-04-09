<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Affichage des erreurs de validation -->
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Erreurs :</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h1>Créer un nouveau club</h1>

        <!-- Formulaire de création d'un club -->
        <form action="{{ route('clubs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf  <!-- Protection CSRF -->

           
            <div class="mb-3">
                <label for="nom" class="form-label">Nom du Club</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nome') }}" >
            </div>

            
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
            </div>

           
            <div class="mb-3">
                <label for="image" class="form-label">Image du Club</label>
                <input type="file" class="form-control" id="image" name="image" >
            </div>

           
            <button type="submit" class="btn btn-primary">Créer le club</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
