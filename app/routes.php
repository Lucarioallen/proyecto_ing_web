<?php


$controllers = array(
    'PrincipalHome' => ['index'],
    'SecretariaAdministrativa' => ['IndexSA', 'add', 'save'],
    'MainSecretariaAdministrativa' => ['IndexSAP'],
    'Mantenimiento' => ['IndexM']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('PrincipalHome', 'index');
    }
} else {
    call('PrincipalHome', 'index');
}

function call($controller, $action)
{

    require_once('Controllers/' . $controller . 'Controller.php');

    switch ($controller) {
        case 'PrincipalHome':
            $controller = new PrincipalHomeController();
            break;
        case 'MainSecretariaAdministrativa':
            $controller = new MSAdministrativaController();
            break;
        case 'SecretariaAdministrativa':
            $controller = new SecretariaAdministrativaController();
            break;
        case 'Mantenimiento':
            $controller = new MantenimientoController();
            break;
        default:
            # código...
            break;
    }

    $controller->{$action}();
}

?>