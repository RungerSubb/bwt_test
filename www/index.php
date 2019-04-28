<?php
include_once '../config/config.php'; //initialize configurations
include_once '../library/mainFunctions.php'; //main functions
include_once '../config/db.php'; //initialize database
include_once '../models/UsersModel.php';
include_once '../controllers/FeedbackController.php';
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
