<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title id="titleSite"></title>
  <!-- MDB icon -->
  <link rel="icon" class="icon" href="views/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="views/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="views/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="views/css/style2.css">
  <!-- clients brand logo carousel slider css-->
  <link rel="stylesheet" href="views/css/infinite-slider.css">
  <!-- Carousel of service -->
  <link rel="stylesheet" href="views/css/carousel.css">
  <!-- Botton Float -->
  <link href="views/css/jquery-fab-button.css" rel="stylesheet">
  <!-- Video Backgroud -->
  <link rel="stylesheet" type="text/css" href="views/css/videobackground.css">
   <!-- Simple Gallery Lightbox -->
  <link rel="stylesheet" type="text/css" href="views/css/baguetteBox.min.css"> 

  <!--====  Javasript  ====-->
   <!-- jQuery -->
  <script type="text/javascript" src="views/js/jquery.min.js"></script>
 
   <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="views/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="views/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="views/js/mdb.min.js"></script>
   <!-- Slick Carousel Client -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <!-- Simple Gallery Lightbox -->
   <script src="views/js/baguetteBox.min.js"></script>


   <!-- Smooth Scroll -->
   <script src="views/js/smooth-scroll.polyfills.min.js"></script>






</head>
<body>

  <!--Main Navigation-->
	<header>

		<?php


	         /*===============================================
	          =                   HEARDER                     =
	         ===============================================*/

			include "module/header.php";

			
		?>

	</header>
	<!--Main Navigation-->

	<!--Main layout-->
	<main>

		<?php

			 /*===============================================
	          =                   CONTENIDO                  =
	          ===============================================*/

	        include "module/main.php";



		?>

	    



	</main>
	<!--Main layout-->

	<!-- Footer -->
	<footer class="page-footer font-small pt-4">

 	<?php

 		  /*===============================================
          =                  FOOTER                =
          ===============================================*/
          include "module/footer.php";

 	?>

	</footer>
	<!-- Footer -->

  
 
 


  <!-- Your custom scripts (optional) -->

 <script src="views/js/template.js"></script>



  <script type="text/javascript">


       
    $(document).ready(function(){


        	$(".alerta-msj").hide();

        	// Controla el cierre de un mensaje de alerta
        	$(document).on('click', '.alert-close', function() {
          			$(this).parent().hide();
      			})

        	// clients brand logo carousel slider -->
					$('.customer-logos').slick({
						slidesToShow: 5,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 1000,
						arrows: false,
						dots: false,
							pauseOnHover: false,
							responsive: [{
							breakpoint: 768,
							settings: {
								slidesToShow: 3
							}
						}, {
							breakpoint: 520,
							settings: {
								slidesToShow: 2
							}
						}]
					});
					// clients brand logo carousel slider -->

			
			// Animations init
        	//new WOW().init();

        	
		

		});



    //Validacion de form
	 function validateForm() {

	 		
	 		//alert("validateForm");

	 		document.getElementById('status').innerHTML = "Sending...";
	 		$(".alerta-msj").hide();
	 		$('#result').text('');

			formData = {
			'name'     : $('input[name=name]').val(),
			'email'    : $('input[name=email]').val(),
			'subject'  : $('input[name=subject]').val(),
			'message'  : $('textarea[name=message]').val()
			};


			$.ajax({
				url : "mail.php",
				type: "POST",
				data : formData,
				success: function(data, textStatus, jqXHR)
				{
					//alert(data.message);
					$(".alerta-msj").show();
					$('#status').text('');
					

					if (data.code) {
					//If mail was sent successfully, reset the form.
						$('#contact-form').closest('form').find("input[type=text], textarea").val("");
						$('#alertEmail').removeClass("alert-warning");
						$('#alertEmail').addClass("alert-success");

					}

					$('#result').text(data.message);

				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert(jqXHR);
					$('#status').text('');
					$(".alerta-msj").show();
					$('#alertEmail').removeClass("alert-warning");
					$('#alertEmail').addClass("alert-danger");
					$('#result').text(jqXHR);
				}
			});

		}

		// All animations will take exactly 500ms
		var scroll = new SmoothScroll('a[href*="#"]', {
			speed: 800,
			clip: true,
			offset: 30

		});

  </script>  


</body>
</html>