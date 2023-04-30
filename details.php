<?php
include("funcs/dbconnect.php");
include("funcs/navbar.php");
include("funcs/contentretrieval.php");
$data = retreieveFullInfo($db, $_GET["tb"], $_GET["ID"]);

echo '


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/details.css">
    <title>' . $data['title'] . '</title>
</head>

<body>
    <style>
        body {
            background-color: #111111;
            background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)),
                url(' . $data['coverimage'] . ');
            margin: 0;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }

    </style>';
generateNav();
echo '<div class="main">
        <div class="poster"><img src="' . $data['coverimage'] . '" alt="' . $data['title'] . '" class="poster-img"></div>
        <div class="info-pane">
            <div class="details">
                <h1 class="main-title">' . $data['title'] . '</h1>
                <p class="aux-details">' . $data['release_year'] . ' • ' . $data['genere'] . ' <br> ' . $data['rating'] . '/10⭐</p>
                <p class="disc">' . str_replace("\"", "'", $data['story_Line']) . '</p>
                <br><br>
                <p class="cast">';
if ($_GET['tb'] == "movies") {
    echo 'Director: ' . $data['director'];
} else {
    echo 'Creator: ' . $data['creator'];
}
echo '<br> Actors: ' . $data['actors'] . '</p>
            </div>
        </div>
    </div>
</body>
</html>';
?>

