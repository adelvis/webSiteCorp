$(document).ready(function(){
		/*===========================================
		=            Barra de Navegacion            =
		===========================================*/


		var colorNavbar;
		var flagTransparent;
		var logoUrl;
		var colorText;
		var colorTextTransp;
		var urlImgIntro;
		var urlImgStreak;
		var colorBarBotton;
		var colorTextBarBotton;
		var colorBarBotton2;
		var colorTitleBlock;
		var titleSite;
		var routeServer;


		/*===========================================
		=  Obtine los datos de configuración     =
		===========================================*/
		var server ="administrador"

		var datos = new FormData();
		datos.append("route", server);

		$.ajax({
			url: 'ajax/route.ajax.php',
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
		})
		.done(function(respuesta) {
			
			routeServer = respuesta;
			console.log('Línea 41. routeServer => ', routeServer);
			


			
		})
		.fail(function() {
			console.log("error");
		});

		/*===========================================
		=  Obtine los datos de configuración     =
		===========================================*/

		$.ajax({
			url: 'ajax/template.ajax.php',
			
		})
		.done(function(respuesta) {
			console.log('Línea 40. respuesta => ', respuesta);
			//console.log("success");

			/*===========================================
			=            Nombre del Sitio           =
			===========================================*/
			titleSite =JSON.parse(respuesta).title_Site;
			$("#titleSite").html(titleSite);


			/*===========================================
			=            Barra de Navegacion            =
			===========================================*/

			logoUrl = JSON.parse(respuesta).logo;
			iconUrl = JSON.parse(respuesta).icon;

			console.log(iconUrl);


			colorNavbar= JSON.parse(respuesta).top_bar;
			colorText = JSON.parse(respuesta).top_text;
			flagTransparent = JSON.parse(respuesta).transperent;
			colorTextTransp =JSON.parse(respuesta).top_text_transp;


			if(flagTransparent ==0 ){

				$(".navbar").addClass('top-nav-collapse');
				$(".top-nav-collapse").css({"background": colorNavbar});
				$(".colorText").css({color: colorText});

			}else{

				$(".colorText").css({color: colorTextTransp});


			}

			$(".logo").attr('src', routeServer+logoUrl);
			$(".icon").attr('href', routeServer+iconUrl);


			/*===========================================
			=            Barra de Pie de Pagina          =
			===========================================*/

			colorBarBotton= JSON.parse(respuesta).bottom_bar;
			colorTextBarBotton= JSON.parse(respuesta).bottom_text;
			colorBarBotton2= JSON.parse(respuesta).footer_color;
			
			$(".page-footer").css({"background": colorBarBotton, "color":colorTextBarBotton});

			$(".footer-copyright").css({"background": colorBarBotton2, "color":colorTextBarBotton});

			$(".footer-a").css({"color":colorTextBarBotton});

			/*===========================================
			=   Color de los titulos de la secciones       =
			===========================================*/

			colorTitleBlock = JSON.parse(respuesta).title_text_color;

			$(".colorTitle").css({"color":colorTitleBlock});


		})
		.fail(function() {
			console.log("error");
		});


		/*============================================================================================
		=     Configura el color de la Barra de Navegacion cuando se navega por la pagina            =
		==============================================================================================*/


		$(window).scroll(function(){

			if(flagTransparent ==1 ){

				var scrollY = window.pageYOffset;
				
			
				if(scrollY > 0){

					$(".top-nav-collapse").css({"background": colorNavbar});
					$(".colorText").css({color: colorText});

				}else{
					
					$(".navbar:not(.top-nav-collapse)").css({"background": "transparent"})
					$(".colorText").css({color: colorTextTransp});
				}

			}

			

		});


		/*==========================================================
		=            Intro configura la image de fondo            =
		=============================================================*/

		//background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%283%29.jpg")no-repeat center center fixed

		urlIntro = $("#urlIntro").val();



		$("#intro").css({ 'background':'url("'+urlIntro+'")no-repeat center center fixed'});

		/*==========================================================
		=          Configuracion del carrucel de sevicio     =
		=============================================================*/

		/*
			Carousel
			*/
			 $('#carousel-example').on('slide.bs.carousel', function (e) {

			  		
			  		 var $e = $(e.relatedTarget);
				     var idx = $e.index();
				    
				     var itemsPerSlide = 5;
				     var totalItems = $('.carousel-item-serv').length;


				     if (idx >= totalItems-(itemsPerSlide-1)) {
				          var it = itemsPerSlide - (totalItems - idx);
				          for (var i=0; i<it; i++) {
				              // append slides to end
				              if (e.direction=="left") {
				                
				                  $('.carousel-item-serv').eq(i).appendTo('#carousel-example .carousel-inner');
				              }
				              else {
				                
				                  $('.carousel-item-serv').eq(0).appendTo('#carousel-example .carousel-inner');
				              }
				          }
				      }


			  });	


			 /*
			Carousel
			*/
				


		/*==========================================================
		=       Streak configuraciòn de la image de fondo            =
		=============================================================*/

		//background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%283%29.jpg")no-repeat center center fixed

		urlImgStreak = $("#urlStreak").val();

		$(".streak_custom").css({ 'background':'url("'+urlImgStreak+'")'});

		/*==========================================================
		=      Configuracion de la Galeria en grilla           =
		=============================================================*/

		//baguetteBox.run('.tz-gallery');


});