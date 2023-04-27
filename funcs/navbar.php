<?php

function generateNav($pic_url, $header, $flavor)
{
    echo '<style>
    nav {
        background-color: rgba(2, 2, 15, 0.3);
        backdrop-filter: blur(10px);
        display: flex;
        justify-content: space-between;
        height: 50px;
    }

    .intro-section .intro-text-wrapper {
        color: #ffffff;
        padding-left: 25px;
    }

    .intro-section .intro-text-wrapper h1 {
        margin-left: -5px;
        font-weight: bolder;
        font-size: 64px;
    }

    .intro-section .intro-text-wrapper h4 {
        max-width: 440px;
    }

    .intro-section {
        display: flex;
        align-items: center;
        height: 300px;
        background-repeat: no-repeat;
        background-size: cover;
        margin-bottom: 20px;
    }

    .wrapper {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
            url("' . $pic_url . '");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .intro-text-wrapper {
        color: white;
    }

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        height: 100%;
        width: 100%;
        margin: 0%;
        font-family: Arial, sans-serif;
    }

    nav ul {
        display: flex;
        align-items: center;
        gap: 30px;
        padding-right: 15px;
    }

    nav ul li {
        list-style-type: none;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        text-align: center;
    }

    .title {
        color: white;
        padding: 10px 15px;
    }

    nav ul li a:hover {
        color: rgb(255, 0, 200);
    }

    span {
        color: rgb(255, 0, 200);
    }

    nav {
        background-color: rgba(2, 2, 15, 0.413);
        padding: 0%;
        display: flex;
    }

    .clicked {
        color: rgb(255, 0, 200);
    }

    .button-solid {
        border: none;
        background-color: transparent;
        font-size: 27px;
        color: white;
    }

    button-solid:focus {
        border: none;
        outline: none;
    }

    .title-hyp {
        text-decoration: none;
    }

    .search-bar {
        display: flex;
        align-items: center;
    }

    .search {
        height: 46px;
        width: 500px;
        font-size: 32px;
        background-color: rgba(15, 15, 15, 0.8);
        border: none;
        border-radius: 50px;
        border: 2px solid rgba(70, 0, 70, 0.8);
        color: #ffffff;
        padding-left: 20px;
    }

    .search:focus {
        outline: 2px solid rgba(255, 0, 200, 0.8);
    }

    .fa-magnifying-glass {
        color: #ffffff;
        position: absolute;
        padding-top: 22px;
        padding-left: 460px;
    }

    .fa-magnifying-glass:hover,
    .fa-circle-user:hover {
        color: rgb(255, 0, 200);
    }
</style>
<script src="https://kit.fontawesome.com/5658c860c9.js" crossorigin="anonymous"></script>
<div class="wrapper">
    <div class="expanded-nav-wrapper">
        <nav class="expanded-nav">
            <a class="title-hyp" href="index.php">
                <h1 class="title">Movies <span>World</span></h1>
            </a>
            <div class="search-bar">
                <form action="search.php" method="get"> <i class="fa-solid fa-magnifying-glass fa-xl"></i> <input
                        type="text" name="search" class="search">

            </div>
            <ul>
                <li><a href="movies.php" class="clicked">Movies</a></li>
                <li><a href="tvshows.php">TV shows</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li>
                    <form action="user_page.php">
                        <button class="button-solid"><i class="fa-solid fa-circle-user"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>

    <div class="intro-section">
        <div class="intro-text-wrapper">
            <h2 class="intro-heading">' . $header . '</h2>
            <h4 class="intro-text"> ' . $flavor . '</h4>
        </div>
    </div>
</div>';
}

function generatePic($db, $table_name, $ID)
{
    $query = "SELECT coverimage FROM " . $table_name . " WHERE ID = '" . $ID . "'";
    $result = $db->query($query);
    $result = array_column(array_values(mysqli_fetch_all($result, MYSQLI_ASSOC)), 'coverimage');
    $path = ($table_name == "movies") ? "movcovr" : "sercovr";
    $path = $path . "/" . $result[0];
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