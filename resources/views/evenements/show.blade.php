@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $evenement->titre }}</h1>
    
    <div class="card">
        <div class="card-body">
            <p><strong>Club:</strong> {{ $evenement->club->nom }}</p>
            <p><strong>Date de Début:</strong> {{ \Carbon\Carbon::parse($evenement->date_debut)->format('d/m/Y H:i') }}</p>
            <p><strong>Date de Fin:</strong> {{ \Carbon\Carbon::parse($evenement->date_fin)->format('d/m/Y H:i') }}</p>
            <p><strong>Image</strong><img src="{{ asset('storage/' . $evenement->image) }}" alt="Event image" class="img-fluid"></p>
            <p><strong>Description:</strong></p>
            <p>{{ $evenement->description }}</p>
        </div>
    </div>
    
    <a href="{{ route('evenements.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>
@endsection