<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feedback.css">
    <title>Movies world</title>
</head>

<body>
    <nav>
        <ul>
            <li><h1>Movies <span>World</span></h1></li>
            <li><a href="all.php">All</a></li>
            <li><a href="movies.php" >Movies</a></li>
            <li><a href="tvshows.php">TV shows</a></li>
            <li><a href="feedback.php" class ="clicked">feedback</a></li>
        </ul>
    </nav>
    <div class="formflex">
        <div class="formwrap">
            <form action="process-login.php" method="POST">
                <h3>feedback</h3>
                <input type="text" name="feedback" required placeholder="Write a comment.....">
                <br>
                <button type="submit">send feedback</button>
    </div>
    </div>
</body>
</html>