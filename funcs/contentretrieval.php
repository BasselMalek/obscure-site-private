<?php
function generatePic($db, $table_name, $ID)
{
    $query = "SELECT coverimage FROM " . $table_name . " WHERE ID = '" . $ID . "'";
    $result = $db->query($query);
    $result = array_column(array_values(mysqli_fetch_all($result, MYSQLI_ASSOC)), 'coverimage');
    $path = ($table_name == "movies") ? "movcovr" : "sercovr";
    $path = "images/" . $path . "/" . $result[0];
    echo '<img src=' . $path . ' alt=' . $ID . '>';
}

function generateLibrary($db, $table_name)
{
    $query = "SELECT ID FROM " . $table_name;
    $result = $db->query($query);
    $result = array_column(array_values(mysqli_fetch_all($result, MYSQLI_ASSOC)), 'ID');
    echo '<div class="grid-container">
    <div class="row">';
    foreach ($result as $value) {
        echo '<div class="col">';
        generatePic($db, $table_name, $value);
        echo '</div>';
    }
    echo '</div></div>';
}
?>