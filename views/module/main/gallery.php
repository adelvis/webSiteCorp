<?php

		
	$item = "type_block"; 

	$value = "gallery";

	$section = ControllerSections::ctrGetBlocks($item, $value);
	
	$photo = json_decode($section["img"],true);


	$server = ModelRoute::mdlRouteServer();


	//<!--third container -->
	echo 

	'<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


	
?>	
	<!--Section: Clientes-->
    <section class="text-center dark-grey-text" id="gallery">

			
   		<div class="container">

   			</br>
   			</br>
   			</br>
        		<!--Section heading-->
        	<h2 class="h2-responsive font-weight-bold text-center colorTitle"><?php echo $section["title"];  ?></h2>
        	</br>
        	
        	<div id="demo" class="carousel slide" data-ride="carousel">

		          <!-- Indicators -->
		          <ul class="carousel-indicators">

		            <?php

		                $flagActivo2 = 0;

		                for ($i=0; $i <  count($photo); $i++) {

		                     if($flagActivo2==0){

		                          $flagActivo2 = 1;

		                          echo ' <li data-target="#demo" data-slide-to="'.$i.'" class="active"></li>';

		                     }else{

		                          echo ' <li data-target="#demo" data-slide-to="'.$i.'"></li>';
		                     }





		                }

		            ?>

		          </ul>
          
		          <!-- The slideshow -->
		          <div class="carousel-inner">

		             <?php

		                $flagActivo = 0;

		                for ($i=0; $i <  count($photo); $i++) {

		                     if($flagActivo==0){

		                          $flagActivo = 1;

		                          echo ' 
		                                   <div class="carousel-item active">
		                                      <img src="'.$server.$photo[$i]["foto"].'" alt="" width="1100" height="640">
		                                    </div>



		                                ';

		                     }else{

		                          echo '

		                                    <div class="carousel-item">
		                                      <img src="'.$server.$photo[$i]["foto"].'" alt="" width="1100" height="640">
		                                    </div>


		                                ';
		                     }





		                }

		            ?>


		          </div>
          
		          <!-- Left and right controls -->
		          <a class="carousel-control-prev" href="#demo" data-slide="prev">
		            <span class="carousel-control-prev-icon"></span>
		          </a>
		          <a class="carousel-control-next" href="#demo" data-slide="next">
		            <span class="carousel-control-next-icon"></span>
		          </a>
       		</div>
       		<br>
       		<br>
   			
		</div>
	 	
    	


    </section>	
    <!--Section: Clientes-->
   
</div>
<!--third container -->  