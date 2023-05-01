<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Page</title>
</head>

<body>

    <?php
    include("funcs/navbar.php");
    generateNav();
    include("funcs/adminfuncs.php");
    include("funcs/dbconnect.php");

    $mdb = retrievedb($hostName, $userName, $password, "movieworld");
    $udb = retrievedb($hostName, $userName, $password, "test_db");
    $fdb = retrievedb($hostName, $userName, $password, "feedback_db");

    $mcolumns = retrieveColumnsFromTable($mdb, "movies");
    unset($mcolumns[7]);
    $mcolumns = array_values($mcolumns);
    $mdata = rertieveTableContent($mdb, "movies", $mcolumns);

    $scolumns = retrieveColumnsFromTable($mdb, "series");
    unset($scolumns[7]);
    $scolumns = array_values($scolumns);
    $sdata = rertieveTableContent($mdb, "series", $scolumns);

    $ucolumns = retrieveColumnsFromTable($udb, "users");
    $udata = rertieveTableContent($udb, "users", $ucolumns);

    $fcolumns = retrieveColumnsFromTable($fdb, "feedback");
    $fdata = rertieveTableContent($fdb, "feedback", $fcolumns);
    ?>

    <div class="main-container">
        <div class="control-pane">
            <h1 class="table-header">Movies</h1>
            <table class="wd-table">
                <?php
                displayTableData($mdata, $mcolumns, 'E');
                ?>
            </table>
        </div>
        <div class="control-pane">
            <table class="wd-table">
                <h1 class="table-header">TV Shows</h1>
                <?php
                displayTableData($sdata, $scolumns, 'E');
                ?>
            </table>
        </div>
        <div class="control-pane">
            <h1 class="table-header">Users</h1>
            <table class="wd-table">
                <?php
                displayTableData($udata, $ucolumns);
                ?>
            </table>
        </div>
        <div class="control-pane">
            <h1 class="table-header">Feedback</h1>
            <table class="wd-table">
                <?php
                displayTableData($fdata, $fcolumns);
                ?>
            </table>
        </div>
        <h3><a href="logout.php" class="logout">Logout</a></h3>
    </div>
</body>

</html>
