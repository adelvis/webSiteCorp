<?php

    
  $item = "type_block"; 

  $value = "feature";

  $section = ControllerSections::ctrGetBlocks($item, $value);

  //<!--second container -->

  echo 

  '<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


  
?>



  <section class="p-md-3 mx-md-5" id="feature">

     <!-- Section heading -->
    <h2 class="font-weight-bold text-center mb-5 pt-5 colorTitle"><?php echo $section["title"];  ?></h2>
    
    <br>
    
    <div class="row">

         <?php


                      $category = "feature";

                      $feature = ControllerSections::ctrGetCategories($category);

                      

                      foreach ($feature as $key => $value) {

                        $style=json_decode($value["img"],true);
                      
                        # code...
                        echo '

                        <div class="col-lg-4 col-sm-6 mb-5">
                          <h4 class="font-weight-bold mb-3">
                            <i class="'.$style["img"].' pr-2" style="color:'.$style["color"].'"></i>'.$value["title"].'
                          </h4>
                          <p class="text-muted">
                            '.$value["short_Description"].'
                          </p>
                        </div>';



                      }



        ?>              

    </div>
  </section>
</div>