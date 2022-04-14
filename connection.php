<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "fyp_login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}

?>