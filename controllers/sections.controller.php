<?php


/**
 * 
 */
class ControllerSections
{
	
	static public function ctrGetSections()
	{
		# code...

		$table ="sections";

		
		$answer = ModelSections::mdlGetSetions($table);

		return $answer;



	}


	static public function ctrGetBlocks($item, $value)
	{

		$table = "blocks";

	
		$answer = ModelSections::mdlGetBlocks($table, $item, $value);

		return $answer;




	}

	static public function ctrGetCategories($category){


		$table = "categories";

		$item = "type";

		$answer = ModelSections::mdlGetCategories($table, $item, $category);

		return $answer;



	}



}