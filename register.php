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
            <li><a href="all.php" class="H">Home page</a></li>
         </ul>
    </nav>

   <div class="background"></div>
        <div class="formflex">
            <div class="formwrap">
                <form action="process-login.php" method="POST">
                    <h2>Register</h2>
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Create Password:</label>
                    <input type="password" id="password" name="password" required>

                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required>

                    <label for="gender">Gender:</label><br>
                    <input type="radio" id="gender" name="gender" required value ="male">
                    <label for="gender">Male</label>
                    <br>
                    <input type="radio" id="gender" name="gender" required value ="female">
                    <label for="gender">Female</label><br>
                    
                    <button type="submit">register</button>
                    <a href ="login.php" class="reg"> Already have an account? </a>
                </form>
            </div> 
        </div>
</body>
</html>