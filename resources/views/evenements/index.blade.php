@extends('layouts.app')  <!-- MUST be at the TOP of the file -->

@section('content')  <!-- Start the section -->
<div class="container">
    <h1>Liste des Événements</h1>
    <a href="{{ route('evenements.create') }}" class="btn btn-primary mb-3">Créer un Événement</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Club</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($evenements as $evenement)
                <tr>
                    <td>{{ $evenement->titre }}</td>
                    <td>{{ $evenement->club->nom }}</td>
                    <td>{{ \Carbon\Carbon::parse($evenement->date_debut)->format('d/m/Y ') }}</td>
                    <td>{{ \Carbon\Carbon::parse($evenement->date_fin)->format('d/m/Y ') }}</td>
                    <td>@if($evenement->image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $evenement->image) }}" alt="Event image" class="img-fluid" width="300px" height="300px">
                        </div>
                    @endif</td>
                    <td>
                        <a href="{{ route('evenements.show', $evenement) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('evenements.edit', $evenement) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('evenements.destroy', $evenement) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{ $evenements->links() }}
</div>
@endsection  <!-- Properly closes @section('content') -->