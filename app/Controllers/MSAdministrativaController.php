<?php 
/**
* 
*/
require_once('Models/MSAdministrativaModel.php');

class MSAdministrativaController
{

	function __construct()
	{

	}

	function index(){
		$msadministrativa = new MSAdministrativaModel();
		$datos = $msadministrativa->listar();
		require_once('Views/MainSecretariaAdministrativa/IndexSAP.php');
	}

}
