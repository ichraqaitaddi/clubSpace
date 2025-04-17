
    <link rel="stylesheet" href="{{ asset('css/stayleNav.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">    

        <!-- Navbar -->
        
            <div class="container">
                <!-- Logo -->
                <div class="logo">
                    <a href="">
                        <img  class="logo-img pulse-animation" src="{{ asset('images/logo3.png') }}" alt=" Logo" >
                    </a>
                </div>
                
                <!-- Menu Toggle (mobile) -->
                <div class="menu-toggle" id="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                
                <!-- Menu Principal -->
                <ul class="main-menu" id="main-menu">
                    <li class="current-menu-item"><a href="{{  route('index') }}">ACCUEIL</a></li>
                    <li class="menu-item-has-children">
                        <a >Clubs</a>
                        <ul class="sub-menu">
                            <li><a href="{{  route('homeClub.index') }}">Nos Clubs</a></li>
                            <li><a href="{{ route('events.index') }}">Events</a></li>
                        </ul>
                    </li>
                    <li><a href="{{-- {{ route('nous_rejoindre') }} --}}">Nous Rejoindre</a></li>
                    <li class="menu-item-has-children">
                        <a href="mission-et-valeurs.html">LOGIN ET INSCRIPTION</a>
                        <ul class="sub-menu">
                            <li><a href="#">login</a></li>
                            <li><a href="#">INSCRIPTION</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
       
    
        <script>
            // Script pour le menu mobile
            document.getElementById('mobile-menu').addEventListener('click', function() {
                this.classList.toggle('active');
                document.getElementById('main-menu').classList.toggle('active');

            });
            // Démarrer l'animation quand la page est chargée
document.addEventListener('DOMContentLoaded', function() {
    const logo = document.querySelector('.logo-img');
    
    // Option 1: Animation après un délai
    setTimeout(() => {
        logo.classList.add('load-spin');
    }, 1000);
    
    // Option 2: Animation au scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            logo.classList.add('pulse-animation');
        } else {
            logo.classList.remove('pulse-animation');
        }
    });
});
        </script>