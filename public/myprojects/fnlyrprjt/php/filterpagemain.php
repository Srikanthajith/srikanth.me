<?php

include 'database.php';

if($_REQUEST['id'] == "art"){


 $query = $conn->query("SELECT * FROM places where category='Arts'");
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

    } }


?>

