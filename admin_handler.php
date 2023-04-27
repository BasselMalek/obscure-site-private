<?php
include("funcs/adminfuncs.php");
include("funcs/navbar.php");
$hostName = "localhost";
$userName = "root";
$password = "testforit223";
$databaseName = "movieworld";
$db = retrieveDB($hostName, $userName, $password, $databaseName);
end($_POST);
$temp = key($_POST);
switch ($temp) {
    case 'delete':
        $result_name = ($_POST['delete'][0] == 'M') ? 'movies' : 'series';
        deleteRow($db, $result_name, $_POST['delete']);
        reset($_POST);
        break;

    case 'add';
        $result_name = ($_POST['add'][0] == 'M') ? 'movies' : 'series';
        $data = desolvePOSTtoINSarray('add');
        insertRow($db, $result_name, $data);
        reset($_POST);
        break;

    default:
        reset($_POST);
        break;
}
?>