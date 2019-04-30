<?php
/**
 * main controller
 */
include_once '../models/FeedbackModel.php'; //for show feedback list
include_once '../models/WeatherModel.php'; //for parse weather
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
    $weather = getTodayWeatherData(getWeather());
    $image = getFileName($weather['weather']);


    $smarty->assign('weatherImage', $image);
    $smarty->assign('city', $weather['city']);
    $smarty->assign('country', $weather['country']);
    $smarty->assign('temperature', $weather['temperature']);
    $smarty->assign('humidity', $weather['humidity']);
    $smarty->assign('sunrise', $weather['sunrise']);
    $smarty->assign('sunset', $weather['sunset']);

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
