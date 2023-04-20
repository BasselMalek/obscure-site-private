<?php
$hostName = "localhost";
$userName = "root";
$password = "testforit223";
$databaseName = "movieworld";

$db = new mysqli($hostName, $userName, $password, $databaseName);

$tableName = "movies";
$columns = ["id", "title", "director", "actors", "release_year", "genere", "rating", "coverimage"];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
   if (empty($db)) {
      $msg = "Database connection error";
   } elseif (empty($columns) || !is_array($columns)) {
      $msg = "columns Name must be defined in an indexed array";
   } elseif (empty($tableName)) {
      $msg = "Table Name is empty";
   } else {

      $columnName = implode(", ", $columns);
      $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY id DESC";
      $result = $db->query($query);
      $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
      $msg = $row;
   }
   return $msg;
}
?>