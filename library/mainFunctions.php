<?php
/**
 * main functions
 */


/**
 * Formation of the requested page
 *
 * @param $smarty template engine
 * @param $controllerName name of using controller
 * @param string $actionName page adaptation function
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * load template
 *
 * @param $smarty  template engine
 * @param $templateName name of using template
 */
function loadTemplate($smarty, $templateName){
    $smarty->display(TemplatePrefix . $templateName . TemplatePostfix);
}

/**
 * debug function
 *
 * @param null $value
 * @param $die
 */
function db($value = null, $die = 1){
    echo "Debug: <br/><pre>";
    print_r($value);
    echo '<pre/>';
    if($die)die();
}