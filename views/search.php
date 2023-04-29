<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css/movies.css">
    <title>Movies world feedback </title>
</head>


<body>
<?php
session_start();
include 'header.php';
?>

<div class="searchpage">
    <?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($db, $_POST['search']);
        if (empty($search)) {
            echo "Please enter a keyword";
        } else {

            $sql = "SELECT * FROM movies WHERE  title LIKE '%$search%' 
         OR director LIKE '%$search%' OR actors LIKE '%$search%' 
         OR genere LIKE '%$search%'
         OR release_year LIKE '%$search%' ";
            $result = mysqli_query($db, $sql);
            $queryresult = mysqli_num_rows($result);
    
            if ($queryresult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<td> <a href='displ.php?moviedid=" . $row['id'] . " '>
                    <img src='../images/movcovr/" . $row['coverimage'] . "'></a><br>
                    <h3> " . $row['title'] . "</h3><td> "; 
                  
                }

                $sqll = "SELECT * FROM series WHERE   title LIKE '%$search%' 
            OR creator LIKE '%$search%' OR actors LIKE '%$search%' 
            OR genere LIKE '%$search%'
            OR release_year LIKE '%$search%' ";
                $resultt = mysqli_query($db, $sqll);
                $queryresultt = mysqli_num_rows($resultt);

                if ($queryresultt > 0) {
                    while ($roww = mysqli_fetch_assoc($resultt)) {
                        echo "<td><a href='displ.php?seriesid=" . $roww['id'] . " '>
                            <img src='../images/sercovr/" . $roww['coverimage'] . "'></a><br>
                            <h3> " . $roww['title'] . "</h3><td>";
                    }

                }

            } else {
                echo "There Is No Match Result!";
            }

        }
    }
    ?>
</div>
</body>
</html>