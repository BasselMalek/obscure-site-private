<!DOCTYPE html>
<html>

<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <?php include("funcs/navbar.php");
    generateNav(); ?>
    <div class="video">
    <video autoplay muted loop plays-inline>
        <source src="./video/cinema.mp4" type="video/mp4">
    </video>
        <div class="content">
    <div class="formflex">
        <div class="formwrap">
            <form class="login-form" action="signup-check.php" method="post">
                <h2>SIGN UP</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                    <p class="success">
                        <?php echo $_GET['success']; ?>
                    </p>
                <?php } ?>

                <label>Name</label>
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
                <?php } else { ?>
                    <input type="text" name="name" placeholder="Name"><br>
                <?php } ?>

                <label>User Name</label>
                <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
                <?php } else { ?>
                    <input type="text" name="uname" placeholder="User Name"><br>
                <?php } ?>


                <label>Password</label>
                <input type="password" name="password" placeholder="Password"><br>

                <label>Re Password</label>
                <input type="password" name="re_password" placeholder="Re_Password"><br>

                <button type="submit">Sign Up</button>
                <a href="index.php" class="reg">Already have an account?</a>
            </form>
        </div>
    </div></div>
</body>

</html>