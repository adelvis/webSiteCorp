<?php

		
	$item = "type_block"; 

	$value = "customers";

	$section = ControllerSections::ctrGetBlocks($item, $value);
	
	$photo = json_decode($section["img"],true);

	$server = ModelRoute::mdlRouteServer();


	//<!--third container -->
	echo 

	'<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


	
?>
		
	<!--Section: Clientes-->
    <section id="customers">

			
   		<div class="container">
   			</br>
   			</br>
   			</br>
        	<!--Section heading-->
        	<h2 class="h2-responsive font-weight-bold text-center colorTitle"><?php echo $section["title"];  ?></h2>
        	</br>
        

   			<!-- clients brand logo carousel slider -->	
		  <div class="customer-logos slider mb-5" id="div-logo" >

		  	<?php

		  		for ($i=0; $i <  count($photo); $i++) { 


					echo '

					<div class="slide center-img "><img src="'.$server.$photo[$i]["foto"].'" class="img-slider" style="display: block;margin-bottom: auto; margin-top: auto;"></div>


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