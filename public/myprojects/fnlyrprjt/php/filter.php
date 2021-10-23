<?php

session_start();

include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $key = $_GET['id'];
}



$query =" ";
$search_terms= explode ( " ", $key );
$x = 0; 
foreach( $search_terms as $search_each )
 { 
  
  if ($search_each==='undefined') {
  
  }

  else{

      if( $x == 0 ) 
    $query = $query. " `category` = '$search_each' "; 
  else 
    $query = $query."OR `category` = '$search_each' ";
  $x++; 
  }
 }

$search_query =  $_SESSION["query"];


$query = $conn->query($search_query."AND ($query)");


       if($query->num_rows > 0){ 
        while($row = $query->fetch_assoc()){
?>

    <div class="col-sm-4">

    <center>
      <div class="card" style="width: 80%;">
      <div class="card-block">

                    <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $row['coverimage'] ) . '" class="card-img-top img-responsive card-image"/>'; ?>

            <h4 class="card-title"><?php echo $row["name"];?></h4>
              <p class="card-text"><?php echo $row["name"];?></p>
                <a href="#" class="btn btn-default effect card-button">Know More</a>
          </div>
      </div>
    </center>

    </div>

<?php


 } 

}







?>