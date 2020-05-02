<?php
if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
}
define("APP_URL", "http://localhost/phpcode/phplogin/");
include_once("classes/DB.php");

$con = DB::getConnection();



