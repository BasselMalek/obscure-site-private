<?php
session_start();
if (isset($_SESSION['name'])) {
    header("Location: main_page.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Movies world</title>
</head>

<body>
    <?php

    include("funcs/navbar.php");
    generateNav(); ?>
    <div class="video">
        <video autoplay muted loop plays-inline>
            <source src="./video/cinema.mp4" type="video/mp4">
        </video>
        <div class="content">
            <div class="formflex">
                <div class="formwrap">
                    <form class="login-form" action="login.php" method="post">
                        <h2>LOGIN</h2>
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error">
                                <?php echo $_GET['error']; ?>
                            </p>
                        <?php } ?>
                        <label>User Name</label>
                        <input type="text" name="uname" placeholder="User Name"><br>

                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password"><br>

                        <button type="submit">Login</button>
                        <a href="signup.php" class="reg"> Don't have an account? Register Here!</a>
                        <a href="main_page.php" class="reg"> Continue as a Guest</a>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>
