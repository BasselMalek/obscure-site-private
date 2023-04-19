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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Movies World</title>
</head>

<body>
<div class="backimage">
    <div class="wrapper">
        <div class="expanded-nav-wrapper">
            <nav class="expanded-nav">
                <ul>
                    <li><h1 class="title">Movies <span>World</span></h1></li>
                    <li><a href="index.php" class ="clicked">All</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="tvshows.php">TV shows</a></li>
                    <li><a href="feedback.php">feedback</a></li>
                    <li>
                        <form action="search.php">
                            <button  class="button-solid">
                                <span class="material-symbols-outlined" style="color:white;">
                                   search
                                   <a href="search.php"></a>
                                </span>
                           </button>
                        </form>
                    </li>
                    <li> <form action="user_page.php">
                       <button class="button-solid"><i class="material-icons">account_circle</i></button>
                       </form>
                    </li>
                    <li> <form action="index.php">
                    <button class="button-solid"><i class="material-icons">account_circle</i></button>
                    </form></li>
                </ul>
            </nav>
        </div>
        <div class="intro-section">
            <div class="intro-text-wrapper">
                <h1 class="intro-heading">Welcome to Movies World</h1>
                <p class="intro-text">Your home for all the info about TV & cinema.</p>
            </div>
        </div>
    </div>
</div>

    </div>
    <div class="carousel-section">
        <div class="slider">
            <h3 class="carousel-section-heading">Popular Movies</h3>
            <div class="spacer"></div>
            <span onmouseover="scrollMovE()" onmouseout="clearScroll()" class="handle handlePrev active movie">
            </span>

            <div id="scrollermov" class="row">
                <div class="row__inner">

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

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

            <div id="scrollertv" class="row">
                <div class="row__inner">

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                    <div class="gui-card">
                        <div class="gui-card__media">
                            <img class="gui-card__img" src="images/placeholder.jpg" alt="" />
                        </div>
                        <div class="gui-card__details">
                            <div class="gui-card__title">
                                Assassin’s Creed
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <span onmouseover="scrollTVD()" onmouseout="clearScroll()" class="handle handleNext active tv">
            </span>
        </div>

    </div>
</body>

</html>