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

    $email = isset($_POST['new-email']) ? $_POST['new-email'] :null;
    $pass1 = isset($_POST['pass1'])? $_POST['pass1'] :null;
    $pass2 = isset($_POST['pass2'])? $_POST['pass2'] :null;
    $firstName = isset($_POST['first-name'])? $_POST['first-name'] :null;
    $lastName = isset($_POST['last-name'])? $_POST['last-name'] :null;
    $birthDate = isset($_POST['birth-date'])? $_POST['birth-date'] :null;
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
    $password = isset($_POST['password'])? $_POST['password'] :null;

    $resData = checkInputParams($email, $password);

    if(!$resData && !checkUserEmail($email)){
        $resData['success'] = false;
        $resData['message'] = "User with the same email ('{$email}') not exists";
    }
    if(!$resData) {
        $password = $password = md5($password);
        $userData = login($email, $password);
        if($userData) {
              $resData['message'] = "Input completed successful";
              $resData['success'] = 1;
              $resData['email'] = $userData['email'];
              $resData['name'] = $userData["firstName"];

              $_SESSION['user'] = $userData;
              $_SESSION['user']['displayName'] = $userData["firstName"];
        }
        else{
             $resData['success'] = 0;
             $resData['message'] = "login error";
        }
    }
    echo json_encode($resData);
}
