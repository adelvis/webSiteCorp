<?php


/**
 * 
 */
class ControllerIntro
{
	
	static public function ctrGetIntro()
	{
		# code...

		$table ="intro";

		$item ="state";
		$value = "1";

		$answer = ModelIntro::mdlGetIntro($table, $item, $value);

		return $answer;



	}
}