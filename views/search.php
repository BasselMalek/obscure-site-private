<?php
session_start();
include 'header.php';
?>

<div class="searchpage">
    <?php
    if (isset($_POST['submit-search'])) {
        $search =mysqli_real_escape_string($conn,$_POST['search']);
        if(empty($search)){
            echo "Please enter a keyword";
        }else{

        $sql="SELECT * FROM movies WHERE  m_title LIKE '%$search%' 
         OR m_director LIKE '%$search%' OR m_actors LIKE '%$search%' 
         OR m_genere LIKE '%$search%'
         OR m_release_year LIKE '%$search%' "; 
        $result= mysqli_query($conn,$sql);
        $queryresult= mysqli_num_rows($result);

        if($queryresult>0){
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<td><a href='displ.php?moviedid=".$row['m_id']." '>
                    <img src='movcovr/".$row['m_coverimage']."'></a><br>
                    <h3> ".$row['m_title']. "</h3><td>";
            } 
            
            $sqll="SELECT * FROM series WHERE   s_title LIKE '%$search%' 
            OR s_creator LIKE '%$search%' OR s_actors LIKE '%$search%' 
            OR s_genere LIKE '%$search%'
            OR s_release_year LIKE '%$search%' ";
            $resultt= mysqli_query($conn,$sqll);
            $queryresultt= mysqli_num_rows($resultt);

            if($queryresultt>0){
                while ($roww = mysqli_fetch_assoc($resultt)) {
                        echo "<td><a href='displ.php?seriesid=".$roww['s_id']." '>
                            <img src='sercovr/".$roww['s_coverimage']."'></a><br>
                            <h3> ".$roww['s_title']. "</h3><td>";
                }  
    
            }

        } else{
            echo "There Is No Match Result!";
        }
            
    }
    }
    ?>
 </div>