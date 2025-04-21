@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer un Événement</h1>
    
    <form action="{{ route('evenements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="date_debut">Date et Heure de Début</label>
            <input type="datetime-local" name="date_debut" id="date_debut" class="form-control" required
                   value="{{ old('date_debut')}}">
        </div>
        
        <div class="form-group">
            <label for="date_fin">Date et Heure de Fin</label>
            <input type="datetime-local" name="date_fin" id="date_fin" class="form-control" required
                   value="{{ old('date_fin') }}">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        
        <div class="form-group">
            <label for="club_id">Club</label>
            <select name="club_id" id="club_id" class="form-control" required>
                @foreach($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->nom }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection