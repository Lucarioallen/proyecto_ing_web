<?php 
/**
* 
*/
require_once('Models/MantenimientoModel.php');

class MantenimientoController
{
	
	function __construct()
	{
		
	}

	function index(){
		$docente = new MantenimientoModel();
		$datos = $docente->listar();
		require_once('Views/Mantenimiento/IndexM.php');
	}

	function add(){
		require_once('Views/Mantenimiento/add.php');
	}

	function save(){
		$docente = new MantenimientoModel();

	}

	/* function error(){
		require_once('Views/Docente/error.php');
	} */

}
?>
