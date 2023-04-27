<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\tv.css">
    <script src="https://kit.fontawesome.com/5658c860c9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>TV shows</title>
</head>

<body>
    <?php
    include("funcs/dbconnect.php");
    include("funcs/navbar.php");
    generateNav("full", "images/tv.jpg", "TV Gallery", "These days, the small screen has some very big things to offer.
    From sitcoms to dramas to travel and talk shows, these are all the best programs on TV.
    Explore our vast TV show library full of trailers and IMDb ratings.");
    generateLibrary($db, "series");
    ?>
</body>

</html>