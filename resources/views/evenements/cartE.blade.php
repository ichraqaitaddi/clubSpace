<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/events-style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        @include('components.navbar.navbar')
    </nav>

<div class="events-container">
    <div class="events-header">
        <h1 class="events-title">Événements & Formation</h1>

    </div>

    <div class="events-grid">
        @foreach($evenements as $evenement)
        <div class="event-card">
            <div class="event-date">
                <div class="date-day">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('d') }}</div>
                <div class="date-month">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('M') }}</div>
                <div class="date-year">{{ \Carbon\Carbon::parse($evenement->date_debut)->format('Y') }}</div>
            </div>
            
            @if($evenement->image)
            <div class="event-image">
                <img src="{{ asset('storage/' . $evenement->image) }}" alt="{{ $evenement->titre }}">
            </div>
            @endif
            
            <div class="event-content">
                <div class="event-club">{{ $evenement->club->nom }}</div>
                <h3 class="event-title">{{ $evenement->titre }}</h3>
                
                <div class="event-meta">
                    <div class="meta-item">
                        <i class="far fa-clock"></i>
                        {{ \Carbon\Carbon::parse($evenement->date_debut)->format('H:i') }} - 
                        {{ \Carbon\Carbon::parse($evenement->date_fin)->format('H:i') }}
                    </div>
                    <div class="meta-item">
                        <i class="far fa-calendar-alt"></i>
                        {{ \Carbon\Carbon::parse($evenement->date_debut)->format('d/m/Y') }}
                        @if($evenement->date_fin != $evenement->date_debut)
                        - {{ \Carbon\Carbon::parse($evenement->date_fin)->format('d/m/Y') }}
                        @endif
                    </div>
                </div>
                
                <div class="event-description">
                    {{ Str::limit($evenement->description, 150, '...') }}
                </div>
                
                <div class="event-actions">
                    <a href="{{ route('evenements.show', $evenement) }}" class="action-btn">
                        Voir détails <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="events-pagination">
        {{ $evenements->links() }}
    </div>
</div>
<footer >
    @include('components.navbar.footer')
</footer>

</body>
</html>