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
 * Create array of feedbacks for show
 *
 * @param $startArray sql-request result
 * @return result array
 */
function createOutputArray($startArray){
    $resultArray = array();
    while($row = mysqli_fetch_assoc($startArray)){
        $resultArray[] = $row;
    }
    return $resultArray;
}

/**
 * Create html-layout for new feedback
 *
 * @param $name name of feedback sender
 * @param $email email of feedback sender
 * @param $message message of feedback sender
 *
 *
 * @return $html html-layout
 */
function createOneMoreFeedbackForm($name, $email, $message){
    $html = "
        <div class=\"fdb-base\">
            <br/>
            <div class=\"fdb-child\">
                <br/>
                <form class=\"fdb-main\">
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\" >Name</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" aria-label=\"Default\" aria-describedby=\"inputGroup-sizing-default\" value=\"$name\" disabled>
                    </div>
                    <div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                            <span class=\"input-group-text\">Email</span>
                        </div>
                        <input type=\"text\" class=\"form-control\" aria-label=\"Default\" aria-describedby=\"inputGroup-sizing-default\" value=\"$email\" disabled>
                    </div>
                    <textarea class=\"form-control message\" rows=\"5\" readonly>$message</textarea>
                    <br/>
                </form>
            </div>
        </div>
        ";
    return $html;
}
/**
 * create object for connecting to database
 *
 * @return mysqli database object
 */

function createDatabaseObject()
{
    $databaseLocation = "127.0.0.1";
    $databaseName = "bwt";
    $databaseUser = "root";
    $databasePassword = "";

    $database = new mysqli($databaseLocation, $databaseUser, $databasePassword, $databaseName);

    if (!$database) {
        echo 'Access Error MySQL';
        exit();
    }

    mysqli_set_charset($database, 'utf8');

    if (!mysqli_select_db($database, $databaseName)) {
        echo 'error in ' . $databaseName;
        exit();
    }
    return $database;
}


/**
 * get needed data from request result
 *
 * @param $data request result
 * @return array data for output
 */
function getTodayWeatherData($data){
    return [
        'city' => $data->location->city,
        'country' => $data->location->country,
        'temperature' => intval((doubleval($data->current_observation->condition->temperature)  - 32) * 5/9),
        'weather' => $data->current_observation->condition->text,
        'humidity' => $data->current_observation->atmosphere->humidity,
        'sunset' => $data->current_observation->astronomy->sunset,
        'sunrise' => $data->current_observation->astronomy->sunrise
    ];
}


/**
 * get name of weather image
 *
 * @param $weatherText weather description
 * @return string|null name of image
 */
function getFilename($weatherText){
    $result = '.png';
    switch ($weatherText){
        case 'Cloudy':
        case 'Mostly Cloudy':
            $result = 'mostly_cloudy' . $result;
            break;
        case 'Sunny':
            $result = 'sunny' . $result;
            break;
        case 'Partly Cloudy':
        case 'Fair':
            $result = 'partly_cloudy' . $result;
            break;
        case 'Isolated Thundershowers':
        case 'Showers':
            $result = 'shower' . $result;
        case 'Scattered Thunderstorms':
        case 'Storms':
            $result = 'storm' . $result;
            break;
        default:
            $result = 'snow' . $result;
            break;
    }
    return $result;
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
