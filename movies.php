<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\movies.css">
    <script src="https://kit.fontawesome.com/5658c860c9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Movies</title>
</head>

<body>
    <?php
    include("navbar.php");
    $hostName = "localhost";
    $userName = "root";
    $password = "testforit223";
    $databaseName = "movieworld";
    $db = retrieveDB($hostName, $userName, $password, $databaseName);
    generateNav("images/movies.jpg", "Movies Gallery", "Movies move us like nothing else can,
    whether they’re scary, funny, dramatic, romantic or anywhere in-between.
    So many titles, so much to experience.
    Explore our vast movie library full of trailers and IMDb ratings.")
        ?>
    <!-- <div class="grid-container">
        <div class="row">
            <div class="col">
                <?php generatePic($db, "movies", "MVDT001"); ?>
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 2">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 3">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 4">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 5">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 6">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 7">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 8">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 9">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 10">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 11">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 12">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 13">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 14">
            </div>
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 15">
            </div>
        </div>
    </div> -->
    <?php generateLibrary($db, "movies") ?>
</body>

</html>