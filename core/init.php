<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//Start Session
session_start();

//include Configuration
require_once('config/config.php');


//Helper Function Files
require_once('helpers/db_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/system_helper.php');


//Autoload classes
// function __autoload($class_name){
function myAutoload($class_name)
{

    require_once('models/' . $class_name . '.php');
}


spl_autoload_register('myAutoload');
