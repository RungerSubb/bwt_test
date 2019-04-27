<?php
/**
 * feedback controller
 */
include_once '../models/FeedbackModel.php';

/**
 * Get feedback list
 */
function getAll(){


}

/**
 * Send new feedback to database
 */
function sendAction(){

    $captcha = $_POST['g-recaptcha-response'];
    if(!$captcha) {
        $result['success'] = 0;
        $result['message'] = 'Please, check the recaptcha checkbox';
        echo json_encode($result);
    }
    else {

        $name = isset($_POST['feedback-name']) ? $_POST['feedback-name'] : null;
        $email = isset($_POST['feedback-email']) ? $_POST['feedback-email'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;

        $result = checkParams($name, $email, $message);

        if (!$result) {
            $modelResult = addNewFeedback($name, $email, $message);
            if ($modelResult) {
                $result["success"] = 1;
                $result["tag"] = 'feedback';
            } else {
                $result["success"] = 0;
                $result["message"] = 'Database error';
            }
        }
        echo json_encode($result);
    }
}




