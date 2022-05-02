<?php

    
  $item = "type_block"; 

  $value = "feature";

  $section = ControllerSections::ctrGetBlocks($item, $value);

  $server = ModelRoute::mdlRouteServer();

  //<!--second container -->

  echo 

  '<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


  
?>



  <!--Section: Content-->
  <section class="dark-grey-text" id="feature">
    <div class="container">
       <br>
       <br>
       <br>

        <!-- Section heading -->
       <h2 class="font-weight-bold text-center colorTitle"><?php echo $section["title"];  ?></h2>
        <!-- Section description -->
        <p class="text-center lead grey-text mx-auto mb-5"><?php echo $section["description"];  ?></p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 text-center text-lg-left mb-4">

            <?php

                echo '<img class="img-fluid" src="'.$server.$section["img"].'" alt=""  >';


            ?>
            
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-8 mb-3">


             <?php

                $category = "feature";

                $feature = ControllerSections::ctrGetCategories($category);


                foreach ($feature as $key => $value) {
                  # code...
                  echo '
                        <!-- Grid row -->
                        <div class="row mb-3">

                          <!-- Grid column -->
                          <div class="col-1">
                            <i class="fas fa-share fa-lg indigo-text"></i>
                          </div>
                          <!-- Grid column -->

                          <!-- Grid column -->
                          <div class="col-xl-10 col-md-11 col-10">
                            <h5 class="font-weight-bold mb-3">'.$value["title"].'</h5>
                            <p class="grey-text">'.$value["short_Description"].'</p>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->







                  ';



                }


            ?>



          </div>
          <!--Grid column-->

        </div>
       <!-- Grid row -->
    </div>
  </section>
  <!--Section: Content-->
</div>