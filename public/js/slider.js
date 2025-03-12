document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    if (slides.length === 0) return; // Évite les erreurs si pas d'images

    let currentIndex = 0;
    slides[currentIndex].classList.add("active"); // Active la première image

    function changeSlide() {
        slides[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].classList.add("active");
    }

    setInterval(changeSlide, 4000); // Changement toutes les 4 secondes
});
