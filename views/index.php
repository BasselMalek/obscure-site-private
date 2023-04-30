<?php
session_start();
include 'header.php';
?>


<form action="search.php" method="POST">
    <input type="text" name="search" placeholder="search">
    <button type="submit" name="submit-search">Search</button>
</form>

<h2>Popular Movies</h2> 

<div class="mov">
    <?php
    $sql = "SELECT * FROM movies";
    $result = mysqli_query($db, $sql);
    $queryresult = mysqli_num_rows($result);

    if ($queryresult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<td> <a href='displ.php?movieid=" . $row['id'] . " '>
                    <img src='../images/movcovr/" . $row['coverimage'] . "'></a><br>
                    <h3> " . $row['title'] . "</h3> <td>";
        }
    }
    ?>
</div>

<h2>Popular Series</h2>
<div class="ser">
    <?php
    $sqll = "SELECT * FROM series";
    $resultt = mysqli_query($db, $sqll);
    $queryresultt = mysqli_num_rows($resultt);

    if ($queryresultt > 0) {
        while ($roww = mysqli_fetch_assoc($resultt)) {
            echo "<td><a href='displ.php?seriesid=" . $roww['ID'] . " '>
                            <img src='../images/sercovr/" . $roww['coverimage'] . "'></a><br>
                            <h3> " . $roww['title'] . "</h3><td>";
        }
    }
    ?>
</div>


</body>

</html>