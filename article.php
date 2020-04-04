<?php
    include  'header.php';

?>

    
<h1> Article page </h1>
 

<div class="article-container"> 
<?php 
      $title = mysqli_real_escape_string($conn, $_GET['title']);
         $date = mysqli_real_escape_string($conn, $_GET['date']);
$sql = "SELECT * FROM article WHERE a_title = '$title' AND a_date = '$date'";
$result = mysqli_query($conn, $sql);
$queryResults = mysqli_num_rows($result);

if ($queryResults > 0) { 
    while($row = mysqli_fetch_assoc ($result)){
        echo"  <div> 
        <h3>  ".$row['a_title']."</h3>
       <a href = \"" . $row['a_text']."\"> ". $row['a_text'] . " </a>
       
         <p>  ".$row['a_date']."</p>
         <p>  ".$row['a_author']."</p>
        </div></a>";
        
    }
}
?> 
    </div>
    </body>

</html>