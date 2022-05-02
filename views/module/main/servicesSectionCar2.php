<?php

		
	$item = "type_block"; 

	$value = "service";

	$section = ControllerSections::ctrGetBlocks($item, $value);

	$server = ModelRoute::mdlRouteServer();
	
	

	//<!--third container -->
	echo 

	'<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


	
?>
		
	<!--Section: Clientes-->
    <section id="customers">

			
   		<div class="container">

   			</br>
        		<!--Section heading-->
        	<h2 class="h2-responsive font-weight-bold text-center colorTitle"><?php echo $section["title"];  ?></h2>
        	</br>
        

   			<!-- clients brand logo carousel slider -->	
		  <div class="customer-servicio slider">

		  
		  	<?php

		  		 $category = "service";

			     $service = ControllerSections::ctrGetCategories($category);

		  		 foreach ($service as $key => $value) {

		  		 	echo '

			                		
		  		 				<!-- Card -->
						           	<div class="col mb-4" >
										<div class="card h-100">

										  <!-- Card image -->
										  <div class="view overlay z-depth-1-half" style="height: auto;">
											  <img src="'.$server.$value["img"].'" class="card-img-top imgService" alt=""  >
											  <div class="mask rgba-white-light"></div>
										  </div>

										  <!-- Card content -->
										  <div class="card-body">

										    <!-- Title -->
										    <h4 class="card-title"><a>'.$value["title"].'</a></h4>
										    <!-- Text -->
										    <p class="card-text">'.$value["short_Description"].'</p>

										    
										   
										  </div>

										</div>
									</div>	
								<!-- Card -->




			             ';



		  		 }

		  	?>



  
		  </div>
		  <!-- clients brand logo carousel slider -->
		  <br>

		</div>
	 	
    	


    </section>	
    <!--Section: Clientes-->
   
</div>
<!--third container -->  