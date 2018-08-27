<footer class="bg-blue pad">
  <p class="text-center text-white"> <i class="fa fa-code"></i> With  <i class="fa fa-heart"></i> By <a href="https://www.cyberrafting.com">Cyber Rafting</a> </p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/appear.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/smoothscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".fancybox").fancybox({
			openEffect: "none",
			closeEffect: "none"
	});
  $('.carousel').carousel({
      interval: 1000 * 5
    });
});
</script>
<script src="js/scripts.js" charset="utf-8"></script>
<script type="text/javascript">
  new WOW().init();
</script>
<script type="text/javascript">
$('.testimonials').owlCarousel({
  loop:true,
  margin:25,
  dot:true,
  autoplay:true,
  autoplayTimeout:5000,
  autoplaySpeed:2000,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:2
      }
  }
})
</script>
<script type="text/javascript">
$('.consulting').owlCarousel({
	loop:true,
	margin:25,
	dot:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplaySpeed:2000,
	responsive:{
			0:{
					items:1
			},
			600:{
					items:2
			},
			1000:{
					items:3
			}
	}
})
</script>


<?php include 'analytics.php'; ?>
