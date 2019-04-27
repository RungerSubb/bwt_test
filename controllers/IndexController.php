<?php
/**
 * main controller
 */

/**
 * Load start page
 *
 * @param $smarty template engine
 */
function indexAction($smarty){
    $smarty->assign('pageTitle', 'Register / Sign in');
    $smarty->assign('tab1', 'login.tpl');
    $smarty->assign('tab2', 'register.tpl');
    $smarty->assign('tab3', 'weather.tpl');
    $smarty->assign('tab4', 'feedback.list.tpl');
    $smarty->assign('tab5', 'feedback.tpl');
    $smarty->assign('tab1Name', 'Sign in');
    $smarty->assign('tab2Name', 'Register');
    $smarty->assign('tab3Name', 'Weather');
    $smarty->assign('tab4Name', 'Feedback list');
    $smarty->assign('tab5Name', 'Send feedback');
    loadTemplate($smarty, 'index');
}

