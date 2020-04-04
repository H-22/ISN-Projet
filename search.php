
<?php
    require  'header.php';

?>
<form action="search.php" method="POST">
<input type="text" name="search" placeholder="Search">
    <button type="submit" name="submit-search"> Search</button>
</form>
    
<div> 
<?Php
    if (isset($_POST['submit-search'])){
     $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = " SELECT * FROM  article WHERE a_title LIKE '%$search%' "; // rechercher par rapport à un titre 
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        
        echo "Il y a  " .$queryResult."résultats!";
        
        if ($queryResult > 0) { // Savoir si il y a un résultat qui match avec la demande 
            while($row = mysqli_fetch_assoc($result)) { 
                  echo "  <a href = 'article.php? title=".$row['a_title']."&date=".$row['a_date']."'><div> 
        <h3>  ".$row['a_title']."</h3>
         <p>  ".$row['a_text']."</p>
         <p>  ".$row['a_date']."</p>
         <p>  ".$row['a_author']."</p>
        </div></a>";
            }
        } else {
            echo "Nous n'avaons pas cette référence";
        }
    }
    ?> 
</div>