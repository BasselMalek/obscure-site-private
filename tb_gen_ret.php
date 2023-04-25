<?php

function retrieveDB($hostName, $userName, $password, $databaseName)
{
    $db = new mysqli($hostName, $userName, $password, $databaseName);
    return $db;

}

function retrieveColumnsFromTable($db, $table_name)
{

    //$query = 'SHOW COLUMNS FROM ' . $table_name;
    $query = "SELECT column_name
    FROM information_schema.columns
    WHERE table_schema = DATABASE()
    AND table_name = '" . $table_name . "'";
    $result = $db->query($query);
    return array_column(array_values(mysqli_fetch_all($result, MYSQLI_ASSOC)), 'column_name');

}

function rertieveTableContent($db, $table_name, $columns)
{
    if (empty($db)) {
        $output = "Database connection error";
    } elseif (empty($table_name)) {
        $output = "Table Name is empty";
    } else {

        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $table_name" . " ORDER BY id DESC";
        $result = $db->query($query);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $output = $row;
    }
    return $output;
}

function displayTableData($table_data, $columns)
{
    echo '<thead><tr>';
    foreach ($columns as $value) {
        echo '<th>';
        echo ucwords($value);
        echo '</th>';
    }
    echo '</tr></thead><tbody>';
    foreach ($table_data as $element) {
        echo '<tr>';
        foreach ($element as $key => $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }
    echo '</tbody>';

}


?>