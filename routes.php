<?php
function call($controller, $action)
{
    require_once("controller/$controller.php");
    require_once("model/$controller.php");

    $controller = new $controller;
    $controller->{$action}();
}

$controllers = array(
    'home' => ['start', 'show', 'showAll', 'add', 'delete'],
    'game' => ['show', 'showAll', 'add', 'delete']
);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        // call('errorController', 'error');
        include('view/page/error.php');
    }
} else {
    // call('errorController', 'error');
    include('view/page/error.php');
}
?>