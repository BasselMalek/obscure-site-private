<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feedback.css">
    <title>Movies world feedback </title>
</head>

<body>
    <?php
    include("funcs/dbconnect.php");
    include("funcs/navbar.php");
    generateNav();
    ?>
    <div class="formflex">
        <div class="formwrap">
            <form class="feedback-form" action="process-login.php" method="POST" class="feedback">
                <h3>feedback</h3>
                <input type="text" name="feedback" required placeholder="Write a comment.....">
                <br>
                <button type="submit" class="submit">send feedback</button>
        </div>
    </div>
</body>

</html>