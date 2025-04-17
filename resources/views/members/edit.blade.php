<div class="container mt-4">
    <h2>Modifier le membre : {{ $membre->nom }} {{ $membre->prenom }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('members.update', $membre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ old('nom', $membre->nom) }}" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" value="{{ old('prenom', $membre->prenom) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $membre->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="clubs" class="form-label">Clubs</label>
            <select name="clubs[]" class="form-select" multiple required>
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}" 
                        {{ in_array($club->id, $membre->clubs->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $club->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ route('members.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>