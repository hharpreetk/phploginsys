<?php

//If there is no constant defined called __CONFIG__, do not load this file
if (!defined('__CONFIG__')) {
    exit('You do not have a config file');
}

class Page
{
    //forced user to be logged in or redirect
    public static function ForceLogin()
    {
        if (isset($_SESSION['user_id'])) {
            //the user is allowed here
        } else {
            //the user is not allowed here
            header("Location: /signin.php");exit;
        }
    }

    public static function ForceDashboard()
    {
        if (isset($_SESSION['user_id'])) {
            header("Location: /dashboard.php");exit;
        } else {

        }
    }

}
