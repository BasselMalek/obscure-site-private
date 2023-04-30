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
    <link rel="stylesheet" href="/css/details.css">
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
                <p class="disc">A wealthy New York City investment banking executive, Patrick Bateman, hides his
                    alternate
                    psychopathic ego from his co-workers and friends as he delves deeper into his violent, hedonistic
                    fantasies.
                    <br><br>
                    It iss the late 1980s. Twenty-seven year old Wall Streeter Patrick Bateman travels among a closed
                    network of the proverbial beautiful people, that closed network in only they able to allow others
                    like themselves in in a feeling of superiority. Patrick has a routinized morning regimen to maintain
                    his appearance of attractiveness and fitness. He, like those in his network, are vain, narcissistic,
                    egomaniacal and competitive, always having to one up everyone else in that presentation of oneself,
                    but he, unlike the others, realizes that, for himself, all of these are masks to hide what is truly
                    underneath, someone/something inhuman in nature. In other words, he is comprised of a shell
                    resembling a human that contains only greed and disgust, greed in wanting what others may have, and
                    disgust for those who do not meet his expectations and for himself in not being the first or the
                    best. That disgust ends up manifesting itself in wanting to rid the world of those people, he not
                    seeing them as people but only of those characteristics he wants to rid.
                </p>
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

