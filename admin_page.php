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
    include("admindbman.php");
    ?>
    <?php
    if (is_array($fetchData)) {
        $sn = 1;
        foreach ($fetchData as $data)
            ;
    }
    ?>
    <div class="main-container">
        <div class="control-pane">
            <table class="wd-Table">
                <thead>
                    Foo
                </thead>
                <tbody>
                    <td>
                        <?php echo $data["actors"] ?>
                    </td>
                </tbody>
            </table>
        </div>
        <div class="control-pane">
            <table class="wd-Table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>sample@example.org</td>
                        <td><a href="#">View</a> - <a href="#">Edit</a> - <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>sample@example.org</td>
                        <td><a href="#">View</a> - <a href="#">Edit</a> - <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>sample@example.org</td>
                        <td><a href="#">View</a> - <a href="#">Edit</a> - <a href="#">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="control-pane">
            <table class="wd-Table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>sample@example.org</td>
                        <td><a href="#">View</a> - <a href="#">Edit</a> - <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>sample@example.org</td>
                        <td><a href="#">View</a> - <a href="#">Edit</a> - <a href="#">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Doe</td>
                        <td>sample@example.org</td>
                        <td><a href="#">View</a> - <a href="#">Edit</a> - <a href="#">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>