<?php


$sections = ControllerSections::ctrGetSections();



?>

<!-- Demo navbar 
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">-->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm py-1 fixed-top scrolling-navbar" > 

	<div class="container">

		<!-- Navbar brand -->
		<a href="#" class="navbar-brand"> 	          
			<img  class="logo"  alt="logo">
		</a>

		<!-- Collapse button -->
		<button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
		<span class="navbar-toggler-icon"></span>
		</button>
		
		<!-- Collapsible content -->
		<div id="navbarSupportedContent" class="collapse navbar-collapse">

		  <!-- Links -->
		  <ul class="navbar-nav ml-auto">
		    <li class="nav-item">
		    	<a href="#" class="nav-link colorText">Inicio <span class="sr-only">(current)</span></a>
		    </li>

		    <?php

					foreach ($sections as $key => $value) {

						if($value["navbar_title"] !=""){

							
							echo '<li class="nav-item"><a data-scroll href="#'.$value["path_navbar"].'" class="nav-link colorText">'.$value["navbar_title"].'</a></li>';
								
						}

					}

		    ?>
		    <li class="nav-item"><a href="#contact" class="nav-link colorText">Contactos</a></li>
		    
		  </ul>
		</div>
		<!-- Collapsible content -->
	</div>
</nav>
<!-- End -->

