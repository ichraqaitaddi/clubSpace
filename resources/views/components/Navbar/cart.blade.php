<link rel="stylesheet" href="{{ asset('css/cartSS.css') }}">
<section id="clubs" class="prestations-section">
    <div class="container">
        
        <div class="swiper clubsSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="{{ asset('images/machinelearning.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid #ccc;" />
                        <h3>Machine learning</h3>
                    </div>
                </div>
                
          
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="{{ asset('images/aiworkshop.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid #ccc;" />
                        <h3>AI Workshop</h3>
                    </div>
                </div>
                
          
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="{{ asset('images/useAi.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid #ccc;" />
                        <h3>How to use AI</h3>
                    </div>
                </div>
                
               
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="{{ asset('images/marchevert.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid #ccc;" />
                        <h3>Marche verte</h3>
                    </div>
                </div>
                
         
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="{{ asset('images/cleanup.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid #ccc;" />
                        <h3>Clean Up day</h3>
                    </div>
                </div>
                
          
                <div class="swiper-slide">
                    <div class="prestation-item">
                        <img src="{{ asset('images/donsang.jpg') }}" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 2px solid #ccc;" />

                        <h3>Don du sang</h3>
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