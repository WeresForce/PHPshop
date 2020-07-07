<?php




    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    echo 'Controller name is ' . $controllerName . '<br/>';

    $actionName = isset($_GET['action']) ? $_GET['action']:'index';

    echo 'Action name is ' . $actionName;

include_once '../controllers/' .$controllerName . 'Controller.php';