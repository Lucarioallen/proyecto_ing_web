<?php 
/**
* 
*/
require_once('Models/DocenteModel.php');

class DocenteController
{
	
	function __construct()
	{
		
	}

	function index(){
		$docente = new DocenteModel();
		$datos = $docente->listar();
		require_once('Views/Docente/index.php');
	}

	function add(){
		require_once('Views/Docente/add.php');
	}

	function save(){
		$docente = new DocenteModel();

	}

	/* function error(){
		require_once('Views/Docente/error.php');
	} */

}
?>
