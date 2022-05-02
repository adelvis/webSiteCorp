<?php

		
	$item = "type_block"; 

	$value = "service";

	$section = ControllerSections::ctrGetBlocks($item, $value);

	$server = ModelRoute::mdlRouteServer();

	//<!--second container -->

	echo 

	'<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


	
?>

	<!--Section: Services-->
    <section id="services" class="text-center">
    	<!--Carousel Wrapper--> 
    	<div class="container py-5">

	    	 	</br>
	    	 	<!--Section heading-->
	        	<h2 class="h2-responsive font-weight-bold text-center colorTitle">Nuestros Servicios</h2>
	           	</br>

	           	<!-- card of service -->

	           	<div class="row row-cols-1 row-cols-md-4">

	           		<?php

			            $category = "service";

			            $service = ControllerSections::ctrGetCategories($category);

			            foreach ($service as $key => $value) {

			            	echo '

			            		<!-- Card Dark -->
				           		<div class="col mb-4">
				           			<div class="card h-100">

									  <!-- Card image -->
									  <div class="view overlay" style="height: auto;">
									    <img class="card-img-top imgService" src="'.$server.$value["img"].'"
									      alt="Card image cap">
									    <a>
									      <div class="mask rgba-white-slight"></div>
									    </a>
									  </div>

									  <!-- Card content -->
									  <div class="card-body elegant-color white-text rounded-bottom">

									  
									    <!-- Title -->
									   <a> <h4 class="card-title">'.$value["title"].'</h4> </a>
									    <hr class="hr-light">
									    <!-- Text -->
									    <p class="card-text white-text mb-4">'.$value["short_Description"].'</p>
									  

									  </div>
									</div>
								</div>	
							
								<!-- Card Dark -->

			            	';


			            }	
			        ?>    

	       




				</div>	
	        	<!-- card of service -->


    	</div>	
    	<!--End Carousel Wrapper--> 

    </section>	
	<!--Section: Services-->	    
</div>
<!--second container -->