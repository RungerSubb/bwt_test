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
    $smarty->assign('name', '');
    $smarty->assign('email', '');
    $smarty->assign('user', 'child');
    $smarty->assign('readonly', '');
    $smarty->assign('homepage', 'main.content/homepage.guests.tpl');
    $smarty->assign('weather', 'main.content/hidden.content.tpl');
    $smarty->assign('feedbackList', 'main.content/hidden.content.tpl');
    loadTemplate($smarty, 'index');

}

function registeredAction($smarty){
    $feedbackList = getAll();


    $smarty->assign('name', $_SESSION['user']["firstName"]);
    $smarty->assign('lastName', $_SESSION['user']["lastName"]);
    $smarty->assign('email', $_SESSION['user']["email"]);
    $smarty->assign('user', '');
    $smarty->assign('readonly', 'readonly');
    $smarty->assign('homepage', 'main.content/homepage.users.tpl');
    $smarty->assign('weather', 'main.content/weather.tpl');
    $smarty->assign('feedbackList', 'main.content/feedback.list.tpl');
    $smarty->assign('feedbackArray', $feedbackList);
    loadTemplate($smarty, 'index');

}
