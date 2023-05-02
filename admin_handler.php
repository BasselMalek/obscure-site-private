<?php
include("funcs/adminfuncs.php");
include("funcs/navbar.php");
include("funcs/dbconnect.php");

$mdb = retrievedb($hostName, $userName, $password, "movieworld");
$udb = retrievedb($hostName, $userName, $password, "test_db");
$fdb = retrievedb($hostName, $userName, $password, "feedback_db");

end($_POST);
$temp = key($_POST);
switch ($temp) {
    case 'delete':
        $result_name = ($_POST['delete'][0] == 'M') ? 'movies' : 'series';
        deleteRow($mdb, $result_name, $_POST['delete']);
        reset($_POST);
        break;

    case 'add';
        $result_name = ($_POST['add'][0] == 'M') ? 'movies' : 'series';
        $data = desolvePOSTtoINSarray('add');
        insertRow($mdb, $result_name, $data);
        reset($_POST);
        break;

    default:
        reset($_POST);
        break;
}
?>

