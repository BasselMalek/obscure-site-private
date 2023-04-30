<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main_page.css">
    <script src="https://kit.fontawesome.com/5658c860c9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <script src="js/index.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Movies World</title>
</head>

<body>
    <?php
    include("funcs/dbconnect.php");
    include("funcs/navbar.php");
    include('funcs/contentretrieval.php');
    generateNav("full", "/images/tv.jpg", "Welcome to Movies World", "Your home for all the info about TV & cinema.");
    ?>
    </div>
    <div class="carousel-section">
        <div class="slider">
            <h3 class="carousel-section-heading">Popular Movies</h3>
            <div class="spacer"></div>
            <span onmouseover="scrollMovE()" onmouseout="clearScroll()" class="handle handlePrev active movie">
            </span>

            <div ID="scrollermov" class="row">
                <div class="row__inner">

                    <?php generateCarouselElements($db, "movies"); ?>

                </div>

            </div>
            <span onmouseover="scrollMovD()" onmouseout="clearScroll()" class="handle handleNext active movie">
            </span>
        </div>

    </div>
    <div class="carousel-section">
        <div class="slider">
            <h3 class="carousel-section-heading">Popular TV shows</h3>
            <span onmouseover="scrollTVE()" onmouseout="clearScroll()" class="handle handlePrev active tv">
            </span>

            <div ID="scrollertv" class="row">
                <div class="row__inner">
                    <?php generateCarouselElements($db, "series"); ?>
                </div>

            </div>
            <span onmouseover="scrollTVD()" onmouseout="clearScroll()" class="handle handleNext active tv">
            </span>
        </div>

    </div>
</body>

</html>
