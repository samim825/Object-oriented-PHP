<?php

$DB_SERVER = "localhost";
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'phpcrud';

$con =new mysqli($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME);

if($con->connect_error){
    echo 'Connection Failed'.$con->connect_error;
}

