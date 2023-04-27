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
    <title>Movies</title>
</head>

<body>
    <?php
    include("funcs/dbconnect.php");
    include("funcs/navbar.php");
    generateNav("full", "images/movies.jpg", "Movies Gallery", "Movies move us like nothing else can,
    whether they’re scary, funny, dramatic, romantic or anywhere in-between.
    So many titles, so much to experience.
    Explore our vast movie library full of trailers and IMDb ratings.");
    generateLibrary($db, "movies");
    ?>
</body>

</html>