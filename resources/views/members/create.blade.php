<div class="container mt-4">
    <h2>Ajouter un nouveau membre</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ old('nom') }}" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" value="{{ old('prenom') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="clubs" class="form-label">Clubs</label>
            <select name="clubs[]" class="form-select" multiple required>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nom }}</option>
                @endforeach
            </select>
            <small class="form-text text-muted">Maintenez Ctrl (ou Cmd sur Mac) pour sélectionner plusieurs clubs</small>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>