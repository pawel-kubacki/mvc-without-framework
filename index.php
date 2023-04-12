<?php
if (isset($_GET["controller"]) && isset($_GET["action"])) {
    $controller = $_GET["controller"];
    $action = $_GET["action"];
} else {
    $controller = "home";
    $action = "start";
}

require_once("routes.php");
?>