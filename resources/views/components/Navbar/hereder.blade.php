
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('css/headerSty.css') }}">

    <!-- Section du slider avec le message royal -->
    <section class="royal-slider-section">
        <!-- Slider principal -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="slide-bg" style="background-image: url('{{ asset('images/swper1.jpg') }}');"></div>
                    <div class="slide-overlay"></div>
                    <div class="message-content">
                        <div class="text-container">
                            <h2 class="message-title">Message pour ClubSpace OFPPT, le 30 août 2025</h2>
                            <p class="message-text">« ClubSpace est bien plus qu’un simple espace de rencontre. C’est un vivier d’idées, une pépinière de talents et un moteur pour la construction d’un avenir meilleur.»</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="slide-bg" style="background-image: url('{{ asset('images/swper2.jpg') }}');"></div>
                    <div class="slide-overlay"></div>
                    <div class="message-content">
                        <div class="text-container">
                            <h2 class="message-title">Message pour ClubSpace OFPPT, le 30 août 2025</h2>
                            <p class="message-text">« ClubSpace est bien plus qu’un simple espace de rencontre. C’est un vivier d’idées, une pépinière de talents et un moteur pour la construction d’un avenir meilleur.»</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="slide-bg" style="background-image: url('{{ asset('images/swper3.jpg') }}');"></div>
                    <div class="slide-overlay"></div>
                    <div class="message-content">
                        <div class="text-container">
                            <h2 class="message-title">Message pour ClubSpace OFPPT, le 30 août 2025</h2>
                            <p class="message-text">« ClubSpace est bien plus qu’un simple espace de rencontre. C’est un vivier d’idées, une pépinière de talents et un moteur pour la construction d’un avenir meilleur.»</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <script>
        // Initialisation du Swiper
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                // Paramètres de configuration
                loop: true,
                autoplay: {
                    delay: 8000,
                    disableOnInteraction: false,
                },
                speed: 1000,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                
                // Navigation
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                
                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                
                // Callbacks
                on: {
                    init: function() {
                        // Animation au chargement initial
                        const activeSlide = this.slides[this.activeIndex];
                        animateElements(activeSlide);
                    },
                    slideChange: function() {
                        // Animation à chaque changement de slide
                        const activeSlide = this.slides[this.activeIndex];
                        animateElements(activeSlide);
                    }
                }
            });

            // Fonction pour animer les éléments
            function animateElements(slide) {
                // Réinitialiser les animations
                const title = slide.querySelector('.message-title');
                const text = slide.querySelector('.message-text');
                
                title.style.opacity = '0';
                title.style.transform = 'translateY(30px)';
                text.style.opacity = '0';
                text.style.transform = 'translateY(30px)';
                
                // Lancer les animations
                setTimeout(() => {
                    title.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                    title.style.opacity = '1';
                    title.style.transform = 'translateY(0)';
                    
                    setTimeout(() => {
                        text.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                        text.style.opacity = '1';
                        text.style.transform = 'translateY(0)';
                    }, 300);
                }, 100);
            }

            // Effet de parallaxe sur l'arrière-plan
            const slides = document.querySelectorAll('.swiper-slide');
            
            slides.forEach(slide => {
                const bg = slide.querySelector('.slide-bg');
                
                slide.addEventListener('mousemove', (e) => {
                    const x = e.clientX / window.innerWidth;
                    const y = e.clientY / window.innerHeight;
                    
                    bg.style.transform = `translate(-${x * 20}px, -${y * 20}px) scale(1.05)`;
                });
                
                slide.addEventListener('mouseleave', () => {
                    bg.style.transform = 'translate(0, 0) scale(1)';
                });
            });
        });
    </script>