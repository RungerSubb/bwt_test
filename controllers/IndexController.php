<?php
/**
 * index page controller
 */


/**
 * Load content for register users
 *
 * @param $smarty template engine
 */
function premiumAction($smarty){

}
/**
 * Load start page
 *
 * @param $smarty template engine
 */
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Register / Sign in');
    $smarty->assign('currentForm', 'signin.tpl');
    loadTemplate($smarty, 'index');
}

/**
 * Load feedback page
 *
 * @param $smarty  template engine
 */
function feedbackAction($smarty){

}
