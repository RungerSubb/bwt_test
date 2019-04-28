<?php
/**
 * Users table model
 */

/**
 *
 * Check current email in database
 *
 * @param $email email address
 * @return array array of emails with same address in database
 */
function checkUserEmail($email){
    $mysqli = createDatabaseObject();
    $email = $mysqli->real_escape_string($email);
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = $mysqli->query($sql);
    return  $result->fetch_assoc();
}

/**
 *
 * Validation of register information
 *
 * @param $email email address
 * @param $pass1 password
 * @param $pass2 confirmed password
 * @param $firstName Name
 * @param $lastName Last name
 * @return null of error message
 */
function checkRegisterParams($email, $pass1, $pass2, $firstName, $lastName){
    $res = null;
    if(!$email) {
        $res['success'] = false;
        $res['message'] = 'Wrong email';
    }
    else if(!$pass1) {
        $res['success'] = false;
        $res['message'] = 'Wrong password';
    }
    else if(!$pass2) {
        $res['success'] = false;
        $res['message'] = 'Wrong password';
    }
    else if($pass1 != $pass2) {
        $res['success'] = false;
        $res['message'] = 'Password are not equal';
    }
    else if(!$firstName) {
        $res['success'] = false;
        $res['message'] = 'Input your name';
    }
    else if(!$lastName) {
        $res['success'] = false;
        $res['message'] = 'Input your last name';
    }
    return $res;
}


/**
 *
 * Register new user
 *
 * @param $firstName Name
 * @param $lastName Last name
 * @param $email email address
 * @param $password password in MD5
 * @param null $birthDate date of birth
 * @param null $sex sex
 * @return array new user data array or error message
 */
function registerNewUser($email, $password, $firstName, $lastName, $birthDate = null, $sex = null){
    $mysqli = createDatabaseObject();

    $email = htmlspecialchars($mysqli->real_escape_string($email), ENT_HTML401);
    $password = htmlspecialchars($mysqli->real_escape_string($password), ENT_HTML401);
    $firstName = htmlspecialchars($mysqli->real_escape_string($firstName), ENT_HTML401);
    $lastName = htmlspecialchars($mysqli->real_escape_string($lastName), ENT_HTML401);
    $birthDate = htmlspecialchars($mysqli->real_escape_string($birthDate), ENT_HTML401);
    $sex = htmlspecialchars($mysqli->real_escape_string($sex), ENT_HTML401);


    $sql = "INSERT INTO 
            users (`firstName`, `lastName`, `email`, `password`, `birthDate`, `sex`)  
            VALUES ('$firstName', '$lastName', '$email', '$password', '$birthDate', '$sex')
    ";
    $result = $mysqli->query($sql);

    if($result) {
        $sql = "SELECT * FROM users
                WHERE `email` = '$email'
                LIMIT 1
                ";
       $result =  $mysqli->query($sql)->fetch_assoc();
        if($result) {
            $result ['success'] = 1;
        } else {
            $result ['success'] = 0;
        }
    }
    return $result;
}


/**
 * Validation of  information
 *
 * @param $email email address
 * @param $password password
 * @return null of error message
 */
function checkInputParams($email, $password){
    $res = null;
    if(!$email) {
        $res['success'] = false;
        $res['message'] = 'Wrong email';
    }
    else if(!$password) {
        $res['success'] = false;
        $res['message'] = 'Wrong password';
    }
    return $res;
}
/**
 *  Input in system
 *
 * @param $email email address
 * @param $password password in MD5
 * @return array new user data array or error message
 */
function login($email, $password){
    $mysqli = createDatabaseObject();
    $email = htmlspecialchars($mysqli->real_escape_string($email), ENT_HTML401);
    $password = htmlspecialchars($mysqli->real_escape_string($password), ENT_HTML401);

    $sql = "SELECT * FROM users
                WHERE `email` = '$email' AND `password` = '$password'
                LIMIT 1        
                ";

    $result = $mysqli->query($sql);
    if($result) {
        $result = $result->fetch_assoc();
        $result ['success'] = 1;
    } else {
        $result ['success'] = 0;
    }
    return $result;
}
