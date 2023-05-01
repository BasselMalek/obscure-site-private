<?php

function retrieveDB($hostName, $userName, $password, $databaseName)
{
    $db = new mysqli($hostName, $userName, $password, $databaseName);
    return $db;

}

$hostName = "localhost";
$userName = "root";
$password = "";
?>

