<?php


require_once "connection.php";

/**
 * Clase Modelo Sections
 */
class ModelSections
{
	/*=============================================
	=  fuction call intro       =
	=============================================*/
	static public function mdlGetSetions($table){


		$query = "SELECT a.id, a.id_block, bl.route, bl.navbar_title, bl.path_navbar FROM $table AS a ";
		$query .= "INNER JOIN blocks as bl ON bl.id = a.id_block ";
		$query .= "WHERE bl.published =1 ";
		$query .= "ORDER BY bl.position ASC ";

		//$query = "SELECT * FROM $table";


		$stmt = ConnectionBD::connectBD()->prepare($query);

		$stmt->execute();

		return $stmt-> fetchAll();



		$stmt->close();

		$stmt = null; 




	}

	static public function mdlGetBlocks($table, $item, $value){



		if($item != null) {

			$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table WHERE $item = :$item");

			$stmt-> bindParam(":".$item, $value, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt-> fetch();




		} else {

			$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table");

			$stmt->execute();

			return $stmt-> fetchAll();



		}

		$stmt->close();

		$stmt = null; 




	}



	static public function mdlGetCategories($table, $item, $value){



		if($item != null) {

			$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table WHERE $item = :$item");

			$stmt-> bindParam(":".$item, $value, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt-> fetchAll();




		} else {

			$stmt = ConnectionBD::connectBD()->prepare("SELECT * FROM $table");

			$stmt->execute();

			return $stmt-> fetchAll();



		}

		$stmt->close();

		$stmt = null; 




	}


}	
