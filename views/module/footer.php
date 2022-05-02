<?php

		


	$ecommerce = ControllerEcommerce::ctrGetCommerce();

	$contact1 = json_decode($ecommerce["name_contact1"],true);

	$contact2 = json_decode($ecommerce["name_contact2"],true);


	$sections = ControllerSections::ctrGetSections();


	
?>



 <!-- Footer Links -->
	  <div class="container-fluid text-center text-md-left ">

	    <!-- Grid row -->
	    <div class="row">

	      <!-- Grid column -->
	      <div class="col-md-6 mt-md-0 mt-3">

	        <!-- Content -->
	        <h5 class="text-uppercase font-weight-bold"><?php echo $ecommerce["name"]; ?></h5>
	        <p><?php echo $ecommerce["slogan"]; ?></p>

	      </div>
	      <!-- Grid column -->

	      <hr class="clearfix w-100 d-md-none pb-3">

	      <!-- Grid column -->
	      <div class="col-md-3 mb-md-0 mb-3">

	       
	        <!-- Links -->
	        <h6 class="text-uppercase font-weight-bold">Enlaces</h6>
	        

	        <ul class="list-unstyled ">



	        	 <?php

					foreach ($sections as $key => $value) {

						if($value["navbar_title"] !=""){

							
							echo ' <li>
						            <a data-scroll class="footer-a" href="#'.$value["path_navbar"].'">'.$value["navbar_title"].'</a>
						          </li>';
								
						}

					}

		    	?>
		    	<li>
		    		<a href="#contact" class="footer-a">Contactos</a></li>
	         
	        </ul>

	      </div>
	      <!-- Grid column -->

	      <!-- Grid column -->
	      <div class="col-md-3 mb-md-0 mb-3">

	        <!-- Links -->
	        <h6 class="text-uppercase font-weight-bold">Contactos</h6>

	        <p>
	          <i class="fas fa-hands-helping mr-3"></i><?php echo $contact1["nombre"]; ?><br>
				<?php echo $contact1["titulo"]; ?></p>
	       	<p>

	       	<?php

	       		if(!empty($contact2["nombre"])) { ?>

			       	<p>
			          <i class="fas fa-hands-helping mr-3"></i><?php echo $contact2["nombre"]; ?><br>
						<?php echo $contact2["titulo"]; ?></p>
			       	<p>

	       	<?php } ?>
	        
	          <i class="fas fa-home mr-3"></i><?php echo $ecommerce["address"]; ?></p>
	        <p>
	          <i class="fas fa-envelope mr-3"></i><?php echo $ecommerce["email_contact"]; ?></p>
	        <p>
	          <i class="fas fa-phone mr-3"></i><?php echo $ecommerce["phone_contact"]; ?></p>
	        


	      </div>
	      <!-- Grid column -->

	    </div>
	    <!-- Grid row -->


	    <!-- Grid row-->
	    <div class="row">
	    	<!-- Grid column Red Social Neutro-->
	      	<div class="col-md-12">
		        <div class="mb-5 flex-center">

					<?php
					
						$social = ControllerTemplate::ctrStyleTemplate();



						if(is_array($social)){

							$jsonRedesSociales=json_decode($social["social_networks"],true);

							$color = substr_count("facebookNegro",$jsonRedesSociales[0]["estilo"]);

							foreach ($jsonRedesSociales as $key => $value) {

								
								# code...
								if($color ==1){
									//Redes ciales a Negro
									if($value["activo"] !=0){

										echo '<a href="'.$value["url"].'" target="_blank">
								            <i class="fab '.$value["red"].'  '.$value["estilo"].' mr-md-5 mr-3 fa-2x"> </i>
								          </a>'; 
								    }

								}else{

									//Redes Sociales a color

									if($value["activo"] !=0){

										echo '

										<a class="btn-floating btn-lg mr-md-5 mr-3" type="button" role="button" href="'.$value["url"].'" target="_blank">
											<i class="fab '.$value["red"].' '. $value["estilo"].'  fa-2x"></i>
										</a>';

									}


								}
								
							}

						}

					?>

				</div>
			</div>	

	    

	    </div>
	    <!-- Grid row-->

	

	  </div>
	  <!-- Footer Links -->

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3 unique-color-dark">

	  		
					
					&copy; 2020 Todos los derechos reservados. Sitio elaborado por AdelvisDev

			
	  </div>
	  <!-- Copyright -->

