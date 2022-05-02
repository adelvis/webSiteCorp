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
	        	<h2 class="h2-responsive font-weight-bold text-center colorTitle"><?php echo $section["title"];  ?></h2>
	           	</br>

	         
	           	
	       		<!-- carousel of service -->

	            <div id="carousel-example" class="carousel slide" data-ride="carousel">


		        	<!--Controls-->
					<div class="controls-top">
					    <a class="btn-floating mb-4 ml-4" href="#carousel-example" data-slide="prev"><i
					        class="fas fa-chevron-left"></i></a>


					    <a class="btn-floating mb-4 ml-4" href="#carousel-example" data-slide="next"><i
					        class="fas fa-chevron-right"></i></a>
					</div>
					<!--/.Controls-->

							
					<!-- Card deck -->
					<div class="my-flex-card">	  

			            <div class="carousel-inner row w-100 mx-auto" role="listbox">

			               

			                <?php

			                $category = "service";

			                $service = ControllerSections::ctrGetCategories($category);

			                $flagActivo = 0;

			                foreach ($service as $key => $value) {
			                	# code...
			                
			                	if($flagActivo == 0) {

			                		$flagActivo =1;
			                		echo ' 


			                		<div class="carousel-item  carousel-item-serv col-12 col-sm-6 col-md-4 col-lg-3 active">
					                    <div class="card mb-2">
								          <img class="card-img-top carousel-image" src="'.$server.$value["img"].'"
								            alt="Card image cap">
								          <div class="card-body">
								            <h4 class="card-title font-weight-bold">'.$value["title"].'</h4>
								            <p class="card-text">'.$value["short_Description"].'</p>
								            
								          </div>
								        </div>
					                </div>';


			                	}else{

			                				# code...
			                		echo '

			                		 <div class="carousel-item carousel-item-serv col-12 col-sm-6 col-md-4 col-lg-3">
					                    <div class="card mb-2">
								          <img class="card-img-top carousel-image" src="'.$server.$value["img"].'"
								            alt="Card image cap">
								          <div class="card-body">
								            <h4 class="card-title font-weight-bold">'.$value["title"].'</h4>
								            <p class="card-text">'.$value["short_Description"].'</p>
								            
								          </div>
								        </div>
					                </div>';






			                	}
			                

			                }



			                ?>
			               


			            </div>
			       </div>
			       <!-- Card deck -->
	            	 
	           
	       		</div>

	        	<!-- carousel of service -->



    	</div>	
    	<!--End Carousel Wrapper--> 

    </section>	
	<!--Section: Services-->	    
</div>
<!--second container -->