<?php
/**
 * controller for work with users
 */
include_once '../models/UsersModel.php';
/**
 *  Call model for register, Initialize session variable
 *
 * @return user data in json
 */
function registerAction(){
    $email = isset($_POST['email']) ? $_POST['email'] :null;
    $pass1 = isset($_POST['passNew'])? $_POST['passNew'] :null;
    $pass2 = isset($_POST['passConf'])? $_POST['passConf'] :null;
    $firstName = isset($_POST['firstName'])? $_POST['firstName'] :null;
    $lastName = isset($_POST['lastName'])? $_POST['lastName'] :null;
    $birthDate = isset($_POST['birthDate'])? $_POST['birthDate'] :null;
    $sex = isset($_POST['sex'])? $_POST['sex'] : null;

    $resData = checkRegisterParams($email, $pass1, $pass2, $firstName, $lastName);

    if(!$resData && checkUserEmail($email)){
        $resData['success'] = false;
        $resData['message'] = "User with the same email ('{$email}') exists";
    }

    if(!$resData){
        $password = md5($pass1);
        $userData = registerNewUser($email, $password, $firstName, $lastName, $birthDate, $sex);

       if($userData['success']) {
            $resData['message'] = "Register completed successful";
            $resData['success'] = 1;
            $resData['name'] = $userData["firstName"];
            $resData['email'] = $userData["email"];

            $_SESSION['user'] = $userData;
            $_SESSION['user']['displayName'] = $userData["firstName"];
        }
        else{
            $resData['success'] = 0;
            $resData['message'] = "Register error";
        }
    }
    echo  json_encode($resData);
}

/**
 *  Call model for input, Initialize session variable
 *
 *  @return user data in json
 */
function loginAction(){
    $email = isset($_POST['email']) ? $_POST['email'] :null;
    $password = isset($_POST['pass'])? $_POST['pass'] :null;

    $resData = checkInputParams($email, $password);

    if(!$resData && !checkUserEmail($email)){
        $resData['success'] = false;
        $resData['message'] = "User with the same email ('{$email}') not exists";
    }
    if(!$resData) {
        $password =  md5($password);
        $userData = login($email, $password);
        if($userData) {
              $resData['message'] = "Input completed successful";
              $resData['success'] = 1;
              $resData['email'] = $userData["email"];
              $resData['name'] = $userData["firstName"];

              $_SESSION['user'] = $userData;
              $_SESSION['user']['displayName'] = $userData["firstName"];

        }
        else{
             $resData['success'] = 0;
             $resData['message'] = "Wrong email or password";
        }
    }
    echo  json_encode($resData);
}
