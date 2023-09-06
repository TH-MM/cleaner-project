document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let isPaused = false;
    let currentSlide = 0;
  
    function togglePause() {
      isPaused = !isPaused;
    }
  
    slider.addEventListener("mouseenter", togglePause);
    slider.addEventListener("mouseleave", togglePause);
  
    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${100 * (i - index)}%)`;
      });
    }
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }
  
    function autoSlide() {
      if (!isPaused) {
        nextSlide();
      }
      setTimeout(autoSlide, 3000); // Temps d'attente entre les diapositives (3 secondes)
    }
  
    autoSlide();
  });
  