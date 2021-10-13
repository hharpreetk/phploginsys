<?php

// Allow the config
define('__CONFIG__', true);

// Require the config
require_once "../inc/config.php";

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//always return json format
header('Content-Type: application/json');

$return = [];

$email = Filter::String($_POST['email']);

$user_found = User::Find($email, true);

if ($user_found) {
    //user exist

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    //check if new password is same as old
    $user_id = (int) $user_found['user_id'];
    $hash = (string) $user_found['password'];

    if (password_verify($password, $hash)) {
        $return['error_msg'] = "Your new password cannot be your existing password.";
    } else {
        //update password
        $updatePassword = $con->prepare("UPDATE users SET password = :password WHERE user_id = :user_id");
        $updatePassword->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $updatePassword->bindParam(':password', $password, PDO::PARAM_STR);
        $updatePassword->execute();

        $return['success_msg'] = "Your password has been reset.";
        $return['success_link'] = "signin";
    }
} else {
    $return['error_msg'] = "Account with this email does not exist.";
}

echo json_encode($return, JSON_PRETTY_PRINT);
exit;
// } else {
//     exit('INVALID URL');
// }
