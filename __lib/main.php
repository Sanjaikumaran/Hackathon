<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/classes/database.class.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/classes/user.class.php';

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/____templates/$name.html";
}

// global $db_credentials;
// $db_credentials = file_get_contents("/var/www/dbconfig-hackathon.json");

// function get_config($key, $default=null)
// {
//     global $db_credentials;
//     $array = json_decode($db_credentials, true);
//     if (isset($array[$key])) {
//         return $array[$key];
//     } else {
//         return $default;
//     }
// }

date_default_timezone_set('Asia/Kolkata');
$php_date_time = date('d-m-Y H:i');
$php_date = date('d-m-Y');
