<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>

<div class="container mt-5">
    <h1 class="mb-4">Liste des Membres</h1>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('members.create') }}" class="btn btn-success">Ajouter un membre</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Clubs</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($membres as $membre)
                <tr>
                    <td>{{ $membre->id }}</td>
                    <td>{{ $membre->nom }}</td>
                    <td>{{ $membre->prenom }}</td>
                    <td>{{ $membre->email }}</td>
                    <td>
                        @foreach ($membre->clubs as $club)
                            <span class="badge bg-info text-dark">{{ $club->nom }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('members.edit', $membre->id) }}" class="btn btn-info btn-sm">Modifier</a>

                        <form action="{{ route('members.destroy', $membre->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?')">
                                Supprimer
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
