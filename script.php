<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('.js-scrollTo').on('click', function() { // Au clic sur un élément
      var page = $(this).attr('href'); // Page cible
      var speed = 750; // Durée de l'animation (en ms)
      $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
      return false;
    });
  });
</script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/script.js"></script>
<script>
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 120) {
			$("nav").addClass("NavFixedBackground");
		} else {
			$("nav").removeClass("NavFixedBackground");
		}
	});
</script>