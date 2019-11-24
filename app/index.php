<?php
/*Por medio de este archivo se accede a la aplicación*/
require_once("Db/db.php"); //Se incluye el archivo que contiene la conexión a la BD

if (isset($_GET['controller']) && isset($_GET['action'])) { // Si hay un controlador y acción (método) definido...
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else { //Si no se ha definido un controlador y acción (caso cuando se accede la primera vez en la sesión)
    $controller = 'PrincipalHome';
    $action = 'index';
}
require_once('Views/Layouts/layout.php'); //Se incluye lo que hay en la vista layout.php
?>