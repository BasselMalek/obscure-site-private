<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname= "test_db";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT * FROM users";
    $query= mysqli_query($conn,$sql);
    $result= mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\user.css">
    <script src="https://kit.fontawesome.com/5658c860c9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>User profile</title>
</head>
<body>
    <h2 class="title">Movies <span>World</span></h2>
    <?php
    include("funcs/dbconnect.php");
    session_start();
    ?>
    <div class="whole_page">
        <div class="profile_icon">
            <form action="user_page.php">
                <button class="button-solid"><i class="fa-solid fa-circle-user"></i></button>
            </form>
        </div>

        <div class="data">
        <h2>User Profile</h2>
                <br>
            <div class="content">
              
                <h4>User Name:</h4>
                <p>
                    <?php echo $_SESSION['name']; ?>
                </p>
                <hr>
                <br>
                <h4> ID:</h4>
                <p>
                   <?php  echo $result['id'];  ?>
                </p>
                <hr>
                <br>
                <h4> E-mail:</h4>
                <p>
                  a@aa
                </p>
                <hr>
                
                <h3><a href="logout.php" class="logout">Logout</a></h3>
            </div>
            
        </div>
    </div>
   
</body>

</html>
