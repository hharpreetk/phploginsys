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
    $password = $_POST['password'];

    $user_found = User::Find($email, true);

    if ($user_found) {
        //if user is verified, try and sign them in
        $user_id = (int) $user_found['user_id'];
        $hash = (string) $user_found['password'];

        if (password_verify($password, $hash)) {
            //user is sign in 
            $return['redirect'] = '/dashboard';
            $_SESSION['user_id'] = $user_id;
        } else {
            //invalidate email/password combo
            $return['error_msg'] = "Your password is incorrect.";
        }
    } else {
        //if user does not exist, they need to create a new account
        $return['error_msg'] = "You do not have an account with this email.";
        $return['error_link'] = "signup";
    }

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
} else {
    exit('INVALID URL');
}
