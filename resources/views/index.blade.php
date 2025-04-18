
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClubSpace</title>
    <link rel="stylesheet" href="{{ asset('css/cartSS.css') }}">
</head>

<body data-rsssl=1 class="home page-template page-template-template-frontpage page-template-template-frontpage-php page page-id-2339 wp-custom-logo elementor-default elementor-kit-2323 elementor-page elementor-page-2339">

    <!-- Navbar et Header (non modifiés) -->
    <nav class="navbar">
        @include('components.navbar.navbar')
    </nav>

    <div class="header">
        <div>

            @include('components.navbar.hereder')

            <img class="logo" src="{{ asset('images/logo.jpg') }}" alt="Logo" style="width: 50px;">
        </div>
        <h1>ClubSpace</h1>
        <nav>
            <a href="{{  route('index') }}">Accueil</a>|
            <a href="{{  route('homeClub.index') }}">Nos Clubs</a>|
            <a href="{{ route('events.index') }}">Events</a>|
            <a href=" ">Se connecter</a>|
        </nav>
    </header>

    <!-- Slider 
    <div class="slider">
        <img src="{{ asset('images/scroll/imgit.jpg') }}" alt="Image 1" class="slide active">
        <img src="{{ asset('images/scroll/imgspr.jpg') }}" alt="Image 2" class="slide">
        <img src="{{ asset('images/scroll/ingenvr.jpg') }}" alt="Image 3" class="slide">
        <div class="carousel-text">
            <h5 class="text-scrl-1">Sous-titre ici</h5>
            <h3 class="text-scrl-2">Texte principal ici</h3>
        </div>

    </div> -->
    <section class="intro">
        <h2>Découvrez nos clubs et événements</h2>
        <p>Explorez les différents clubs et événements organisés par notre établissement. Rejoignez-nous et participez à nos activités sociales, sportives, et culturelles !</p>
    </section>
<hr/>
    <h3>Nos clubs</h3>
    <!-- Cartes des clubs -->
    <div class="cards">
        <!-- Club Socioculturel -->
        <div class="card">
            <img src="{{ asset('images/club-socio.png') }}" alt="Logo Socioculturel">
            <h3>Club Socioculturel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, impedit sequi eveniet, distinctio
                asperiores omnis quibusdam iste dolor corporis quaerat officia architecto ipsam quae. Quaerat quos sint
                amet nam libero.</p>
            <a href="{{-- {{{ route('socioculturel') }}} --}}"><button class="button">Découvrir</button></a>
        </div>

        <!-- Club it -->
        <div class="card">
            <img src="{{ asset('images/club-it.png') }}" alt="Logo IT">
            <h3>Club IT</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, tempora maiores, sit reiciendis
                accusamus distinctio labore voluptatibus dignissimos voluptatem nisi ipsam perspiciatis eligendi non
                sapiente vel enim a consequatur? Quisquam!</p>
            <a href="{{-- {{ route('sportif') }} --}}"><button class="button">Découvrir</button></a>
        </div>

        <!-- Club Citoyenneté & Environnement -->
        <div class="card">
            <img src="{{ asset('images/club-envir.png') }}" alt="Logo Citoyenneté">
            <h3>Club Citoyenneté & Environnement</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus quis ullam laborum a
                necessitatibus laboriosam adipisci debitis, distinctio facilis placeat quod dolorum ex deleniti, alias
                magni, quas magnam ut.</p>
            <a href="{{-- {{ route('citoyennete') }} --}}"><button class="button">Découvrir</button></a>

        </div>
    </div>

    <!-- Contenu principal isolé -->
    <div class="main-content" style="margin-top: 20px;">
        <section class="intro" style="text-align: center; padding: 3rem 2rem; max-width: 1200px; margin: 0 auto;">
            <h2 style="font-size: 2.2rem; color: #2c3e50; margin-bottom: 1rem;">Découvrez nos clubs et événements</h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 800px; margin: 0 auto;">
                Explorez les différents clubs et événements organisés par notre établissement. 
                Rejoignez-nous et participez à nos activités sociales, sportives, et culturelles !
            </p>
        </section>
        
        <hr style="border: 0; height: 1px; background-color: #ddd; margin: 2rem auto; width: 80%;">
        
        <h3 style="text-align: center; font-size: 1.8rem; color: #2c3e50; margin-bottom: 2rem;">Nos clubs</h3>
        
        <!-- Cartes des clubs -->
        <div class="cards" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; max-width: 1200px; margin: 0 auto 3rem; padding: 0 2rem;">
                        <!-- Club Socioculturel -->
                        <div class="card" style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); overflow: hidden; width: 350px; transition: transform 0.3s ease;">
                            <img src="{{ asset('images/cart2s.jpg') }}" alt="Logo Socioculturel" style="width: 100%; height: 200px; object-fit: cover;">
                            <h3 style="font-size: 1.4rem; margin: 1rem; text-align: center; color: #2c3e50;">Club Socioculturel</h3>
                            <p style="padding: 0 1.5rem 1.5rem; color: #666;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, impedit sequi eveniet, distinctio
                                asperiores omnis quibusdam iste dolor corporis quaerat officia architecto ipsam quae.
                            </p>
                            <a href="{{-- {{{ route('socioculturel') }}} --}}">
                                <button class="button" style="display: block; width: 80%; margin: 0 auto 1.5rem; padding: 0.8rem; background-color: #3498db; color: white; border: none; border-radius: 5px; font-size: 1rem; cursor: pointer; transition: background-color 0.3s;">
                                    Découvrir
                                </button>
                            </a>
                        </div>
                        
                        <!-- Club IT -->
                        <div class="card" style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); overflow: hidden; width: 350px; transition: transform 0.3s ease;">
                            <img src="{{ asset('images/cart3C.jpg') }}" alt="Logo IT" style="width: 100%; height: 200px; object-fit: cover;">
                            <h3 style="font-size: 1.4rem; margin: 1rem; text-align: center; color: #2c3e50;">Club IT</h3>
                            <p style="padding: 0 1.5rem 1.5rem; color: #666;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, tempora maiores, sit reiciendis
                                accusamus distinctio labore voluptatibus dignissimos voluptatem nisi ipsam perspiciatis eligendi non
                                sapiente vel enim a consequatur? Quisquam!
                            </p>
                            <a href="{{-- {{ route('sportif') }} --}}">
                                <button class="button" style="display: block; width: 80%; margin: 0 auto 1.5rem; padding: 0.8rem; background-color: #3498db; color: white; border: none; border-radius: 5px; font-size: 1rem; cursor: pointer; transition: background-color 0.3s;">
                                    Découvrir
                                </button>
                            </a>
                        </div>
                        
                        <!-- Club Citoyenneté & Environnement -->
                        <div class="card" style="background: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); overflow: hidden; width: 350px; transition: transform 0.3s ease;">
                            <img src="{{ asset('images/cart1.jpg') }}" alt="Logo Citoyenneté" style="width: 100%; height: 200px; object-fit: cover;">
                            <h3 style="font-size: 1.4rem; margin: 1rem; text-align: center; color: #2c3e50;">Club Citoyenneté & Environnement</h3>
                            <p style="padding: 0 1.5rem 1.5rem; color: #666;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus quis ullam laborum a
                                necessitatibus laboriosam adipisci debitis, distinctio facilis placeat quod dolorum ex deleniti, alias
                                magni, quas magnam ut.
                            </p>
                            <a href="{{-- {{ route('citoyennete') }} --}}">
                                <button class="button" style="display: block; width: 80%; margin: 0 auto 1.5rem; padding: 0.8rem; background-color: #3498db; color: white; border: none; border-radius: 5px; font-size: 1rem; cursor: pointer; transition: background-color 0.3s;">
                                    Découvrir
                                </button>
                            </a>
                        </div>
        </div>
    </div>
<tfoot>
    <section class="intro" style="text-align: center; padding: 3rem 2rem; max-width: 1200px; margin: 0 auto;">
        <h2 style="font-size: 2.2rem; color: #2c3e50; margin-bottom: 1rem;">clubs et événements</h2>
        @include('components.navbar.cart')
 
    </section>

</tfoot>



    <footer >
        @include('components.navbar.footer')
    </footer>

    <script src="{{ asset('js/slider.js') }}"></script>
</body>
</html>