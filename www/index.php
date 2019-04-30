<?php
include_once '../config/main.config.php'; //initialize configurations
include_once '../library/mainFunctions.php'; //main functions
include_once '../models/WeatherModel.php';

//current controller
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
if(array_key_exists('user', $_SESSION)){
    //current function
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'registered';
}
else{
    //current function
    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
}
loadPage($smarty, $controllerName, $actionName);
