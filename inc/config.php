<?php

// If there is no constant defined called __CONFIG__, do not load this file
if (!defined('__CONFIG__')) {
    exit('You do not have a config file');
}

//sessions are always turned on
if (!isset($_SESSSION)) {
    session_start();
}

// Our config is below
// Allow errors
error_reporting(-1);
ini_set('display_errors', 'On');

require_once "classes/DB.php";
require_once "classes/Filter.php";
require_once "classes/User.php";
require_once "classes/Page.php";

$con = DB::getConnection();
