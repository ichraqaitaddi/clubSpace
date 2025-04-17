<link rel="stylesheet" href="{{ asset('css/cartSS.css') }}">
<section id="clubs" class="prestations-section">
    <div class="container">
        
        <div class="swiper clubsSwiper">
            <div class="swiper-wrapper">
                <!-- Club Sportif -->
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&h=150&q=80" alt="Club Sportif" class="prestation-image">
                        <h3>CLUB SPORTIF</h3>
                    </div>
                </div>
                
                <!-- Club Culturel -->
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="https://images.unsplash.com/photo-1499781350541-7783f6c6a0c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&h=150&q=80" alt="Club Culturel" class="prestation-image">
                        <h3>CLUB CULTUREL</h3>
                    </div>
                </div>
                
                <!-- Club Lecture -->
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&h=150&q=80" alt="Club Lecture" class="prestation-image">
                        <h3>CLUB LECTURE</h3>
                    </div>
                </div>
                
                <!-- Club Musical -->
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&h=150&q=80" alt="Club Musical" class="prestation-image">
                        <h3>CLUB MUSICAL</h3>
                    </div>
                </div>
                
                <!-- Club Loisirs -->
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="https://images.unsplash.com/photo-1520390138845-fd2d229dd553?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&h=150&q=80" alt="Club Loisirs" class="prestation-image">
                        <h3>CLUB LOISIRS</h3>
                    </div>
                </div>
                
                <!-- Aide -->
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&h=150&q=80" alt="Aide" class="prestation-image">
                        <h3>AIDE</h3>
                    </div>
                </div>
            </div>
            
            <!-- Contrôles Swiper -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- Scripts -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.clubsSwiper', {
        slidesPerView: 'auto',
        spaceBetween: 20,
        centeredSlides: false,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            576: {
                spaceBetween: 15
            },
            768: {
                spaceBetween: 20
            },
            992: {
                spaceBetween: 25
            }
        }
    });
});
</script>