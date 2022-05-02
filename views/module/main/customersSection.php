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
        

   			<!-- clients brand logo grilla -->	


   			 <div class="flex-center">

			      <!--First row-->
			      <div class="row">


			      		<?php

					  		for ($i=0; $i <  count($photo); $i++) { 


								echo '

							
								<div class="col-md-3 flex-center">
						          <img src="'.$server.$photo[$i]["foto"].'" class="imgClient wow fadeIn" data-wow-delay=".2s">
						        </div>





								';

											
							}

					  	?>


				       

			      </div>
			      <!--/First row-->


		  <!-- clients brand logo carousel slider -->
		</div>
	 	<br>
	 	<br>
    	<br>


    </section>	
    <!--Section: Clientes-->
    <br>
    <br>
</div>
<!--third container -->  