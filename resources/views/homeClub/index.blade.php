<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubSpace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Fixer une hauteur uniforme pour toutes les cartes */
        .card {
            height: 350px; 
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Centrer l'image dans la carte */
        .card-img-top {
            width: 100%; 
            height: 200px; 
            object-fit: cover; 
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Centrer l'image verticalement et horizontalement */
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center; 
        }

        /* Espacement uniforme entre les cartes */
        .row .col-md-4 {
            margin-bottom: 30px; 
        }
    </style>
</head>

<body>
    <nav class="navbar">
        @include('components.navbar.navbar')
    </nav>



    <div class="container mt-5">
        <h1 class="mb-4 text-center">Nos Clubs</h1>
        
        <div class="row">
            @foreach ($clubs as $club)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $club->image) }}" class="card-img-top" alt="{{ $club->nom }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $club->nom }}</h5>
                        <a href="" class="btn bg-dark text-light mt-auto">En savoir plus</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
<footer>
   @include('components.navbar.footer')
</footer>

</html>
