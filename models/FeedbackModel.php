<?php
/**
 * Feedback model
 */

/**
 * Validation of  information
 *
 * @param $email email address
 * @param $password password
 * @param $message message
 * @return null of error message
 */
function checkParams($name, $email, $message){
    $res = null;
    if(!$email) {
        $res['success'] = false;
        $res['message'] = 'Wrong email';
    }
    else if(!$name){
            $res['success'] = false;
            $res['message'] = 'Wrong name';
    }
    else if(!$message) {
        $res['success'] = false;
        $res['message'] = 'Empty message';
    }
    return $res;
}

/**
 *  Add new feedback in database
 *
 *
 * @param $name
 * @param $email
 * @param $message
 * @return result of
 */
function addNewFeedback($name, $email, $message){
    $mysqli = createDatabaseObject();

    $name = htmlspecialchars($mysqli->real_escape_string($name), ENT_HTML401);
    $email = htmlspecialchars($mysqli->real_escape_string($email), ENT_HTML401);
    $message = htmlspecialchars($mysqli->real_escape_string($message), ENT_HTML401);

    $sql = "INSERT INTO 
            feedbacks(`name`, `email`, `message`)
            VALUES ('$name', '$email', '$message')
            ";
    $result = $mysqli->query($sql);

    if($result){
        $sql = "SELECT * FROM feedbacks 
                WHERE `message` = '$message' and `email` = '$email' and `name` = '$name'
                LIMIT 1 
            ";
        $result =  $mysqli->query($sql);
        if($result) {
            $result = $result->fetch_assoc();
            $result['success'] = 1;
        } else {
            $result = null;
        }
    }
    return $result;
}


/**
 * Get all of feedback from database
 */
function getFeedback(){
    $mysqli = createDatabaseObject();
    $sql = "SELECT * FROM feedbacks ORDER BY id";
    $result = $mysqli->query($sql);
    return $result;
}
