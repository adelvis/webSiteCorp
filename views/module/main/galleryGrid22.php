<?php

        
    $item = "type_block"; 

    $value = "gallery";

    $section = ControllerSections::ctrGetBlocks($item, $value);
    
    $photo = json_decode($section["img"],true);

    $server = ModelRoute::mdlRouteServer();


    //<!--third container -->
    echo 

    '<div class="container-fluid my-5" style="background:'.$section["backgroundcolor"].'">';


    
?>  


  <!--Section: Content-->
  <section class="text-center dark-grey-text mb-5" id = "gallery">


            <!--Section heading-->
            <h2 class="h2-responsive font-weight-bold text-center colorTitle"><?php echo $section["title"];  ?></h2>
            </br>


            <!--Section gallery-->
            <div class="tz-gallery">

                <div class="row">


                <?php

                    for ($i=0; $i <  count($photo); $i++) { 

                        echo '

                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="'.$server.$photo[$i]["foto"].'">
                                        <img class="imageGallery" src="'.$server.$photo[$i]["foto"].'" alt="imagen">
                                    </a>
                                </div>



                        ';

                                   
                    }

                ?>


                </div>

            </div>





  </section>  

  
 

</div>

<script>
    //
    baguetteBox.run('.tz-gallery');

    
</script>