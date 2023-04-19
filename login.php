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
            <li><a href="all.php" class ="H">Home page</a></li>
         </ul>
    </nav>
        <div class="background"></div>
        <div class="formflex">
            <div class="formwrap">
                <form action="process-login.php" method="POST">
                    <h2>Login</h2>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
