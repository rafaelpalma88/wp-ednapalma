(function($) {
  $(document).ready(function() {
      // Inicializar o carousel
      var $carousel = $('.simple-carousel');
      var $slides = $carousel.find('.carousel-slide');
      var slideCount = $slides.length;
      var currentIndex = 0;

      function showSlide(index) {
          $slides.hide();
          $slides.eq(index).show();
      }

      function nextSlide() {
          currentIndex = (currentIndex + 1) % slideCount;
          showSlide(currentIndex);
      }

      function prevSlide() {
          currentIndex = (currentIndex - 1 + slideCount) % slideCount;
          showSlide(currentIndex);
      }

      // Inicializar com o primeiro slide
      showSlide(currentIndex);

      // Avançar para o próximo slide a cada 3 segundos
      setInterval(nextSlide, 3000);
  });
})(jQuery);
