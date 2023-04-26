<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Pane</title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <h1>Movies <span>World</span></h1>
            </li>
            <li><a href="index.php">All</a></li>
            <li><a href="movies.php">Movies</a></li>
            <li><a href="tvshows.php">TV shows</a></li>
            <li><a href="feedback.php" class="clicked">feedback</a></li>
            <li>
                <form action="search.php">
                    <button class="button-solid">
                        <span class="material-symbols-outlined" style="color:white;">
                            search
                            <a href="search.php"></a>
                        </span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    <?php
    include("adminfuncs.php");
    $hostName = "localhost";
    $userName = "root";
    $password = "testforit223";
    $databaseName = "movieworld";
    $db = retrieveDB($hostName, $userName, $password, $databaseName);
    $mcolumns = retrieveColumnsFromTable($db, "movies");
    $mdata = rertieveTableContent($db, "movies", $mcolumns);
    $scolumns = retrieveColumnsFromTable($db, "series");
    $sdata = rertieveTableContent($db, "series", $scolumns);
    ?>

    <div class="main-container">
        <div class="control-pane">
            <table class="wd-table">
                <?php
                displayTableData($mdata, $mcolumns);
                ?>
            </table>
        </div>
        <div class="control-pane">
            <table class="wd-table">
                <?php
                displayTableData($sdata, $scolumns);
                ?>
            </table>
        </div>
    </div>
</body>

</html>