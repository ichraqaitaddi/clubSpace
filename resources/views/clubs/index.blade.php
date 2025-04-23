<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<body>

   

    <div class="container mt-5">
        <h1 class="mb-4">Liste des Clubs</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('clubs.create') }}" class="btn btn-info">Ajouter un club</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-info">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clubs as $club)
                <tr>
                    <td>{{ $club->id }}</td>
                    <td>{{ $club->nom }}</td>
                    <td>{{ $club->description }}</td>
                    <td>
<<<<<<< HEAD
                        
                        <img src="{{ asset('images/' . $club->image) }}" style="width: 100px;" alt="Image du club">
=======
                        <img src="{{ asset('storage/app/public' . $club->image) }}" style="width: 100px;" alt="Image du club">
>>>>>>> imadV
                    </td>
                    <td>
                       
                        <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-info btn-sm">Modifier</a> 
                        
                        
                        <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce club ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
