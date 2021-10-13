<?php

// Allow the config
define('__CONFIG__', true);

// Require the config
require_once "../inc/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //always return json format
    header('Content-Type: application/json');

    $return = [];

    $email = Filter::String($_POST['email']);

    $user_found = User::Find($email);

    if ($user_found) {
        //user already exist
        $return['error_msg'] = "Your account already exist.";
        $return['error_link'] = "signin";
    } else {
        //User does not exist, add them now
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
        $addUser->bindParam(':email', $email, PDO::PARAM_STR);
        $addUser->bindParam(':password', $password, PDO::PARAM_STR);
        $addUser->execute();

        //make sure user can be added and is added

        $user_id = $con->lastInsertId();

        $return['success_msg'] = "Your account has been made.";
    }

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
} else {
    exit('INVALID URL');
}
