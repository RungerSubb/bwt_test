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
                        <input type=\"text\" class=\"form-control\" aria-label=\"Default\" aria-describedby=\"inputGroup-sizing-default\" value=\"$name}\" disabled>
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