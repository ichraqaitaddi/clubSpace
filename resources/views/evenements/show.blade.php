<link rel="stylesheet" href="{{ asset('css/styleShow.css') }}">

@extends('layouts.app')

@section('content')
<div class="event-show-container">
    <div class="event-header">
        <a href="{{ route('evenements.index') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Retour à la liste
        </a>
        <h1 class="event-title">{{ $evenement->titre }}</h1>
        <div class="event-actions">
            <a href="{{ route('evenements.edit', $evenement) }}" class="action-btn edit">
                <i class="fas fa-edit"></i> Modifier
            </a>
            <form action="{{ route('evenements.destroy', $evenement) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="action-btn delete">
                    <i class="fas fa-trash"></i> Supprimer
                </button>
            </form>
        </div>
    </div>

    <div class="event-details-card">
        <div class="event-date-banner">
            <div class="date-section">
                <div class="date-label">Début</div>
                <div class="date-value">
                    <span class="date-day">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('d') }}</span>
                    <span class="date-month">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('M') }}</span>
                    <span class="date-year">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('Y') }}</span>
                </div>
                <div class="time-value">
                    {{ \Carbon\Carbon::parse($evenement->date_debut)->format('H:i') }}
                </div>
            </div>
            
            <div class="date-connector">
                <i class="fas fa-arrow-right"></i>
            </div>
            
            <div class="date-section">
                <div class="date-label">Fin</div>
                <div class="date-value">
                    <span class="date-day">{{ \Carbon\Carbon::parse($evenement->date_fin)->format('d') }}</span>
                    <span class="date-month">{{ \Carbon\Carbon::parse($evenement->date_fin)->format('M') }}</span>
                    <span class="date-year">{{ \Carbon\Carbon::parse($evenement->date_fin)->format('Y') }}</span>
                </div>
                <div class="time-value">
                    {{ \Carbon\Carbon::parse($evenement->date_fin)->format('H:i') }}
                </div>
            </div>
        </div>

        <div class="event-content">
            <div class="event-club">
                <i class="fas fa-users"></i>
                <span>{{ $evenement->club->nom }}</span>
            </div>
            
            @if($evenement->image)
            <div class="event-image-container">
                <img src="{{ asset('storage/' . $evenement->image) }}" alt="{{ $evenement->titre }}" class="event-image">
            </div>
            @endif
            
            <div class="event-description">
                <h3 class="description-title">Description</h3>
                <p>{{ $evenement->description }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Include Font Awesome -->
<script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
@endsection