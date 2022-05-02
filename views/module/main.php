<?php

	/*=============================================
	=            Sections          =
	=============================================*/


	$sections = ControllerSections::ctrGetSections();
	
	foreach ($sections as $key => $value) {


		include "main/".$value["route"].".php";


	}
	
	/*=============================================
	=            Section Contacto    =
	=============================================*/

	include "main/formContact.php";




?>	






