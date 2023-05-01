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

  $conn = retrievedb($hostName, $userName, $password, "feedback_db");

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
      echo "Feedback submitted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

  ?>
  <div class="formflex">
    <div class="formwrap">
      <form method="post" class="feedback-form" class="feedback" autocomplete="off">
        <label for="name">Name:</label>
        <br>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" required><br>

        <label for="message">Message:</label><br>
        <textarea name="message" required></textarea>

        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>
<?php
$conn->close();
?>

