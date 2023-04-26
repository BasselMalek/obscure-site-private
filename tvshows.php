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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="backimage">
        <div class="wrapper">
            <div class="expanded-nav-wrapper">
                <nav class="expanded-nav">
                    <ul>
                        <li><h1 class="title">Movies <span>World</span></h1></li>
                        <li><a href="main_page.php">All</a></li>
                        <li><a href="movies.php">Movies</a></li>
                        <li><a href="tvshows.php" class ="clicked">TV shows</a></li>
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
                    </ul>
                </nav>
            </div>
        <div class="intro-section">
            <div class="intro-text-wrapper">
                <h2 class="intro-heading">TV Gallery</h2>
                <h4 class="intro-text">These days, the small screen has some very big things to offer. <br>
                    From sitcoms to dramas to travel and talk shows, 
                    these are all the best programs on TV.<br>
                    Explore our vast TV show library full
                    of
                    trailers and IMDb ratings.</h4>
            </div>
        </div>
    </div></div>
    <div class="grid-container">
        <div class="row">
            <div class="col">
                <img src="images\placeholder.jpg" alt="Poster 1">
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
    </div>
</body>

</html>