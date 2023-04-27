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

    <?php
    include("funcs/navbar.php");
    generateNav("full", "images/placeholder.jpg", "Huh", "flavor");
    include("funcs/adminfuncs.php");
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
            <h1 class="table-header">Movies</h1>
            <table class="wd-table">
                <?php
                displayTableData($mdata, $mcolumns);
                ?>
            </table>
        </div>
        <div class="control-pane">
            <table class="wd-table">
                <h1 class="table-header">TV Shows</h1>
                <?php
                displayTableData($sdata, $scolumns);
                ?>
            </table>
        </div>
    </div>
</body>

</html>