<?php

require_once './config/baseConstants.php';
require_once './config/constants.php';
require_once './config/db.php';

if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
    $pathController = getPathController($controller);
    $isFile = file_exists($pathController);

    if ($isFile) {
        //redirection to controller
        require_once $pathController;
    }else{
        //redirection to error view
        $errMsg = "The page you’re looking for doesn’t exist.";
        require_once VIEWS . 'errors/error.php';
    }
}else{
    //redirection to main view
    require_once VIEWS . 'main/main.php';
}

//get controller path
function getPathController($controllerName){
    return CONTROLLERS . $controllerName . 'Controller.php';
}