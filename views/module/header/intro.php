<?php

	
	$intro = ControllerIntro::ctrGetIntro();

	$titulo1=json_decode($intro["title1"],true);

	$titulo2=json_decode($intro["title2"],true);


	$server = ModelRoute::mdlRouteServer();


	if($intro["type"]=="video"){


		echo '

	
		
			<div class="video-background-holder" style="height: 100%">

				<div class="video-background-overlay"></div>

				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
				    <source src="'.$server.$intro["url"].'" type="video/mp4">
				</video>

				<div class="video-background-content container h-100">
					<div class="d-flex h-100 text-center align-items-center">
				  		<div class="w-100">
				    		<h1 class="display-4" style="color:'.$titulo1["color"].'">'.$titulo1["texto"].'</h1>

				    		<p class="lead mb-0" style="color:'.$titulo2["color"].'">'.$titulo2["texto"].'</p>
				    	</div>
					</div>
				</div>


			</div>
		';

	}else{


		echo ' 



			    <div id="intro" class="view">

			    	<input type="hidden" id="urlIntro"  value="'.$server.$intro["url"].'">

		            <div class="mask rgba-black-strong">

		                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

		                    <div class="row d-flex justify-content-center text-center">

		                        <div class="col-md-12">

		                            <!-- Heading -->
		                            <h1 class="font-weight-bold pt-5 mb-2" style="color:'.$titulo1["color"].'" >'.$titulo1["texto"].'</h1>

		                            <!-- Divider -->
		                            <hr class="hr-light">

		                            <!-- Description -->
		                            <h4 class="my-4" style="color:'.$titulo2["color"].'">'.$titulo2["texto"].'.</h4>

		                           
		                        </div>

		                    </div>

		                </div>

		            </div>

		        </div>

		';


	}



?>




