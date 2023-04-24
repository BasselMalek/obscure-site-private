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
    <nav>
        <ul>
            <li><h1>Movies <span>World</span></h1></li>
            <li><a href="main_page.php" class ="H">Home page</a></li>
         </ul>
    </nav>
        <div class="background"></div>
        <div class="formflex">
            <div class="formwrap">
                <form action="login_.php" method="POST">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <h2>Login</h2>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                    <a href="signup.php" class="reg"> Don't have acount ? register first !</a>
                    <a href ="main_page.php" class="reg"> continue as Guest</a>
                </form>
            </div>
        </div>
</body>
</html>