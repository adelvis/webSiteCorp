<?php

/**
 * 
 */
class ControllerEcommerce
{
	
		static public function ctrGetCommerce()
	{
		# code...

		$table ="commerce";

		
		$answer = ModelCommerce::mdlGetCommerce($table);

		return $answer;



	}

}