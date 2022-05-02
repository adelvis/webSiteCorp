<?php

		
	$item = "type_block"; 

	$value = "streak";

	$section = ControllerSections::ctrGetBlocks($item, $value);

	$server = ModelRoute::mdlRouteServer();
	
	
	//<!--third container -->
	echo 

	'

	<input type="hidden" id="urlStreak"  value="'.$server.$section["img"].'">
	<div class="streak_custom" >';


	
?>



 <!-- Streak -->

	
      <div class="flex-center mask rgba-indigo-strong">
        <div class="text-center white-text ml-4 mr-4">
          <h2 class="h2-responsive mb-5 description-streak"><i class="fas fa-quote-left" aria-hidden="true"></i> <?php echo $section["description"]; ?> <i class="fas fa-quote-right" aria-hidden="true"></i></h2>
          <h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">~ <?php echo $section["title"]; ?></h5>
        </div>
      </div>
    
</div>
<!-- Streak -->
