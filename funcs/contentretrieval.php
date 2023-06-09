<?php

function retreieveFullInfo($db, $table_name, $ID)
{
    $query = "SELECT * FROM " . $table_name . " WHERE ID = '" . $ID . "'";
    $result = $db->query($query);
    $result = array_values(mysqli_fetch_all($result, MYSQLI_ASSOC));
    $result = $result[0];
    $path = ($table_name == "movies") ? "movcovr" : "sercovr";
    $path = "images/" . $path . "/" . $result['coverimage'];
    $result['coverimage'] = $path;
    return $result;
}

function generatePic($db, $table_name, $ID, $class = "def")
{
    $query = "SELECT coverimage FROM " . $table_name . " WHERE ID = '" . $ID . "'";
    $result = $db->query($query);
    $result = array_column(array_values(mysqli_fetch_all($result, MYSQLI_ASSOC)), 'coverimage');
    $path = ($table_name == "movies") ? "movcovr" : "sercovr";
    $path = "images/" . $path . "/" . $result[0];
    echo '<img class=' . $class . ' src=' . $path . ' alt=' . $ID . '>';
}

function generateLibrary($db, $table_name)
{
    $query = "SELECT ID FROM " . $table_name;
    $result = $db->query($query);
    $result = array_column(array_values(mysqli_fetch_all($result, MYSQLI_ASSOC)), 'ID');
    echo '<div class="grid-container">
    <div class="row">';
    foreach ($result as $value) {
        echo '<div class="col"><a href=details.php?tb=' . $table_name . '&ID=' . $value . '>';

        generatePic($db, $table_name, $value);
        echo '</div></a>';
    }
    echo '</div></div>';
}

function generateCarouselElements($db, $table_name)
{
    $query = "SELECT ID FROM " . $table_name . " ORDER BY rating DESC LIMIT 10";
    $result = $db->query($query);
    $result = array_column(array_values(mysqli_fetch_all($result, MYSQLI_ASSOC)), 'ID');
    foreach ($result as $value) {
        echo '<div class="gui-card"><div class="gui-card__media"><a href=details.php?tb=' . $table_name . '&ID=' . $value . '>';
        generatePic($db, $table_name, $value, "gui-card__img");
        echo '</a></div></div>';
    }
}
?>

