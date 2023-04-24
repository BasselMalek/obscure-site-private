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
            <li><a href="all.html" class ="H">Home page</a></li>
         </ul>
    </nav>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="signup.php" class="reg"> Don't have acount ? register first !</a>
        <a href ="main_page.php" class="reg"> continue as Guest</a>
    </form>
</body>

</html>