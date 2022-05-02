<?php

    
  $item = "type_block"; 

  $value = "feature";

  $section = ControllerSections::ctrGetBlocks($item, $value);

  //<!--second container -->

  echo 

  '<div class="container-fluid" style="background:'.$section["backgroundcolor"].'">';


  
?>



  <section class="p-md-3 mx-md-5 text-lg-left" id="feature">

      <h2 class="font-weight-bold text-center mb-5 pt-5 colorTitle"><?php echo $section["title"];  ?></h2>

      <div class="row text-center d-flex justify-content-center pb-5">


        <?php

            $category = "feature";

            $feature = ControllerSections::ctrGetCategories($category);

            foreach ($feature as $key => $value) {

              $style=json_decode($value["img"],true);
              # code...
              echo '

                      <div class="col-lg-3 col-md-6 mb-lg-0 mb-5">
                        <i class="'.$style["img"].' fa-3x mb-4" style="color:'.$style["color"].'"></i>
                        <h4 class="font-weight-bold mb-4">'.$value["title"].'</h4>
                        <p class="text-muted px-2 mb-lg-0">
                          '.$value["short_Description"].'
                        </p>
                      </div>


              ';



            }


        ?>

      </div>
  </section>
</div>