<?php

require_once "connection.php";


/**
 * 
 */
class ModelCommerce
{
	
	static public function mdlGetCommerce($table){



	
		$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table");

		$stmt->execute();

		return $stmt-> fetch();



	

		$stmt->close();

		$stmt = null; 




	}


}