@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier l'Événement</h1>
    
    <form action="{{ route('evenements.update', $evenement) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ $evenement->titre }}" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $evenement->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="date_debut">Date et Heure de Début</label>
            <input type="datetime-local" name="date_debut" id="date_debut" class="form-control"
        value="{{ \Carbon\Carbon::parse($evenement->date_debut)->format('Y-m-d\TH:i') }}" required>
        </div>
              
        <div class="form-group">
            <label for="date_fin">Date et Heure de Fin</label>
            <input type="datetime-local" name="date_fin" id="date_fin" class="form-control"
        value="{{ \Carbon\Carbon::parse($evenement->date_fin)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
            @if($evenement->image)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $evenement->image) }}" alt="Current image" width="100">
                    <p class="text-muted">Current image</p>
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="club_id">Club</label>
            <select name="club_id" id="club_id" class="form-control" required>
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}" {{ $evenement->club_id == $club->id ? 'selected' : '' }}>
                        {{ $club->nom }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection