<?php
include_once '../config/config.php'; //initialize configurations
include_once '../library/mainFunctions.php'; //main functions
include_once '../config/db.php'; //initialize database

include_once '../models/UsersModel.php';

//current controller
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
//current function
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);
