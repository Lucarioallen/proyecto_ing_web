<?php 
/**
* 
*/
require_once('Models/AdministrativoModel.php');

class AdministrativoController
{

	function __construct()
	{

	}

	function index(){
		$administrativo = new AdministrativoModel();
		$datos = $administrativo->listar();
		require_once('Views/Administrativo/index.php');
	}

}
