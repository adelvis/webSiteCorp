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


	<style>
          .carousel-summary .carousel-indicators {
              position: static;
              left: initial;
              width: initial;
              margin-right: initial;
              margin-left: initial;
              overflow-x: auto;
              white-space: nowrap
          }
          .carousel-summary .carousel-indicators>li {
              width: initial;
              height: initial;
              text-indent: initial
          }
          .carousel-summary .carousel-indicators>li .active img {
              opacity: 2
          }



    </style>
	<!--Section: Clientes-->
    <section id="gallery">

			
   		<div class="container">

   			</br>
   			</br>
   			</br>
        	<!--Section heading-->
        	<h2 class="h2-responsive font-weight-bold text-center colorTitle"><?php echo $section["title"];  ?></h2>
        	</br>
        	
        	<div id="carousel-thumb" class="carousel slide carousel-fade carousel-summary" data-ride="carousel">

        			<!--Slides-->
		            <div class="carousel-inner" role="listbox">


		                    <?php

		                        $flagActivo = 0;

		                        for ($i=0; $i <  count($photo); $i++) { 

		                            if($flagActivo == 0) {

		                              $flagActivo =1;

		                              echo '

		                                    
		                                    <div class="carousel-item active">
		                                      <img class="d-block w-100" src="'.$server.$photo[$i]["foto"].'"
		                                        alt="imagen" >
		                                    </div>

		                                   ';


		                            }else{


		                               echo '

		                                    <div class="carousel-item">
		                                      <img class="d-block w-100" src="'.$server.$photo[$i]["foto"].'"
		                                        alt="Second slide" >
		                                    </div>
		                                    ';

		                            }       
		                        }

		                    ?>
		            </div>
		            <!--/.Slides-->

		            <!--Controls-->
		            <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
		                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		                  <span class="sr-only">Previous</span>
		            </a>
		            <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
		                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		                  <span class="sr-only">Next</span>
		            </a>
		            <!--/.Controls-->
		             <ol class="carousel-indicators" id="carousel-gallery">

		                    <?php

		                        $flagActivo2 = 0;

		                        for ($i=0; $i <  count($photo); $i++) {



		                                if($flagActivo2==0){

		                                  $flagActivo2 =1;

		                                  echo '

		                                            <li data-target="#carousel-thumb" data-slide-to="'.$i.'" class="active">
		                                              <img src="'.$server.$photo[$i]["foto"].'" width="100" height="66">
		                                            </li>


		                                        ';


		                                }else{

		                                  echo ' 


		                                            <li data-target="#carousel-thumb" data-slide-to="'.$i.'">
		                                              <img src="'.$server.$photo[$i]["foto"].'" width="100" height="66">
		                                            </li>



		                                        ';


		                                }



		                        }




		                    ?>

		            </ol>
		            <br>


        	</div>




   			
		</div>
	 	
    	


    </section>	
    <!--Section: Clientes-->
   
</div>
<!--third container -->  