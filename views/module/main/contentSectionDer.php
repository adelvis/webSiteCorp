<?php

		
	$item = "type_block"; 

	$value = "content";

	$section = ControllerSections::ctrGetBlocks($item, $value);

	$server = ModelRoute::mdlRouteServer();

//<!--First container -->
	echo 

'<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


	
?>


   <!--Section: Quienes somos-->
    <section id="about">
    	 
    	 <div class="container py-5">
	    	 	
	    	 	</br>
	    	 	<!--Section heading-->
	        	<h2 class="h2-responsive font-weight-bold text-center colorTitle"><?php echo $section["title"]; ?></h2>

	        	</br>

	        	<!--Grid row-->
			  	<div class="row d-flex justify-content-center mb-4">

			      <!--Grid column-->
			      <div class="col-md-7 mb-4 text-justify">

			          <!-- Description -->
			          <?php echo $section["description"]; ?>



			      </div>
			      <!--Grid column-->

			       <!--Grid column-->
			       		<div class="col-md-5 mb-4">

						  <!--Featured image -->
						  <div class="view overlay z-depth-1-half" style="height: auto;">
							  <img src="<?php echo $server.$section["img"]; ?>" class="card-img-top" alt="" >
							  <div class="mask rgba-white-light"></div>
						  </div>

						</div>

			       <!--Grid column-->

			   </div>
			   <!--Grid row-->

    	 </div>	

    </section>
    <!--Section: Quienes somos	
    <hr class="my-5"> -->
</div>
<!--First container -->  