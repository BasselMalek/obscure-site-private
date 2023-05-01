<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">

    <title>Search Results</title>
</head>


<body>
    <?php
    session_start();
    include('funcs/dbconnect.php');
    $db = retrievedb($hostName, $userName, $password, "movieworld");
    include("funcs/navbar.php");
    generateNav();
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
                echo '<h1 class="section-title">Movie results</h1><div class="grid-container">';
                if ($queryresult > 0) {

                    echo '<div class="row">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col"><a href="details.php?tb=movies&ID=' . $row['id'] . '">
                    <img src="../images/movcovr/' . $row['coverimage'] . '"></a><br>
                    <h3> ' . $row['title'] . '</h3> </div> ';
                    }
                    echo '</div></div>';
                } else {
                    echo '<h2>There Is No Match Result!</h2>';
                }
                echo '</div>';
                $sql = "SELECT * FROM series WHERE  title LIKE '%$search%' 
                        OR creator LIKE '%$search%' OR actors LIKE '%$search%' 
                        OR genere LIKE '%$search%'
                        OR release_year LIKE '%$search%' ";
                $result = mysqli_query($db, $sql);
                $queryresult = mysqli_num_rows($result);
                echo '<h1 class="section-title">Series results</h1><div class="grid-container">';
                if ($queryresult > 0) {

                    echo '<div class="row">';
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="col"><a href="details.php?tb=series&ID=' . $row['id'] . '">
                    <img src="../images/sercovr/' . $row['coverimage'] . '"></a><br>
                    <h3> ' . $row['title'] . '</h3> </div> ';
                    }
                    echo '</div></div>';
                } else {
                    echo '<h2>There Is No Match Result!</h2>';
                }
                echo '</div>';
            }
        }
        ?>
    </div>
</body>

</html>
