
<!DOCTYPE html>
<html>
<head>
	<title>profile picture</title>
</head>
<body>

     <?php include "images_dbconn.php"; ?>

     <?php 
          $sql = "SELECT * FROM my_images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
</body> 
</html>