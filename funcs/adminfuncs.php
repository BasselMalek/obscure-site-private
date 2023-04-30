<?php


function retrieveColumnsFromTable($db, $table_name)
{

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
        $query = "SELECT " . $columnName . " FROM " . $table_name . " ORDER BY ID";
        $result = $db->query($query);
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $output = $row;
    }
    return $output;
}

function displayTableData($table_data, $columns)
{
    $clcount = 0;
    echo '<thead><tr>';
    foreach ($columns as $value) {
        echo '<th>';
        echo ucwords(str_replace('_', ' ', $value));
        echo '</th>';
        $clcount++;
    }
    echo '<th>Edit</th>';
    $clcount++;
    echo '</tr></thead><tbody>';
    foreach ($table_data as $element) {
        echo '<tr>';
        foreach ($element as $key => $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '<td><form action="/admin_handler.php" method="post">
        <button type="submit" class="button" name="delete" value=' . $element['id'] . '>Delete</button></td></form>';
        echo '</tr>';
    }
    echo '<tr><form action="/admin_handler.php" method="post">';
    for ($i = 0; $i < $clcount - 1; $i++) {
        echo '<td> <input type="text" name="add' . $columns[$i] . '"
        class="text" /></td>';
    }
    echo '<td><button type="submit" class="button" name="add" value=' . $element['id'] . '>Add</button></td></form></tr>';
    echo '</tbody>';
}

function deleteRow($db, $table_name, $ID)
{
    $query = "DELETE FROM " . $table_name . " WHERE ID='" . $ID . "'";
    $db->query($query);
}

function desolvePOSTtoINSarray($exckey)
{
    $insert = [];
    foreach ($_POST as $key => $value) {
        if (!($key == $exckey)) {
            $tvalue = "'" . $value . "'";
            array_push($insert, $tvalue);
        }
    }
    return $insert;
}

function insertRow($db, $table_name, $data)
{
    $raw = implode(", ", $data);
    $que = "INSERT INTO " . $table_name . " VALUES (" . $raw . ")";
    $result = $db->query($que);
}
?>