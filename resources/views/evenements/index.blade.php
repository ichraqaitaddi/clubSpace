<link rel="stylesheet" href="{{ asset('css/stayleIN.css') }}">


@extends('layouts.app')

@section('content')
<div class="events-list-container">
    <div class="events-header">
        <h1 class="events-title">List Evenement</h1>
        <a href="{{ route('evenements.create') }}" class="create-btn">
            <i class="fas fa-plus"></i> Créer un Événement
        </a>
    </div>

    <div class="events-list">
        @foreach($evenements as $evenement)
        <div class="event-item" data-aos="fade-up">
            <div class="event-date">
                <div class="date-day">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('d') }}</div>
                <div class="date-month">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('M') }}</div>
                <div class="date-year">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('Y') }}</div>
                @if($evenement->date_fin && $evenement->date_fin != $evenement->date_debut)
                <div class="date-separator">-</div>
                <div class="date-day">{{ \Carbon\Carbon::parse($evenement->date_fin)->format('d') }}</div>
                <div class="date-month">{{ \Carbon\Carbon::parse($evenement->date_fin)->format('M') }}</div>
                @endif
            </div>

            <div class="event-content">
                <h3 class="event-title">{{ $evenement->titre }}</h3>
                <div class="event-club">{{ $evenement->club->nom }}</div>
                
                @if($evenement->image)
                <div class="event-image">
                    <img src="{{ asset('storage/' . $evenement->image) }}" alt="{{ $evenement->titre }}">
                </div>
                @endif
            </div>

            <div class="event-actions">
                <a href="{{ route('evenements.show', $evenement) }}" class="action-btn view" title="Voir">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('evenements.edit', $evenement) }}" class="action-btn edit" title="Modifier">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('evenements.destroy', $evenement) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="action-btn delete" title="Supprimer">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div class="events-pagination">
        {{ $evenements->links() }}
    </div>
</div>

<!-- Include AOS animation library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true
    });
</script>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
@endsection