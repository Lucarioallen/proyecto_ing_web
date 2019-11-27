<?php 
/**
* 
*/
require_once('Models/SecretariaAdministrativaModel.php');

class SecretariaAdministrativaController
{

	function __construct()
	{

	}

	function index(){
		$secretariaadministrativa = new SecretariaAdministrativaModel();
		$datos = $secretariaadministrativa->listar();
		require_once('Views/SecretariaAdministrativa/IndexSA.php');
	}

}
