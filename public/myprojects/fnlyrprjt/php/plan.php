<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $count = $_POST['id'];
}


if ($count==0) {




	 $query = $conn->query("SELECT * FROM `guide` WHERE 1");
    
            while($row = $query->fetch_assoc()){
?>

    <div class="col-sm-6">
    	<div class="box" id="<?php echo $row["guideid"];?>">
    		<h4><?php echo $row["name"];?></h4>
    		<h6>Languages - <?php echo $row["languages"];?> &nbsp; ; Contact - <?php echo $row["phoneno"];?></h6>
		</div>			
	</div>

<?php


 } 


# guides
}



if ($count==1) {




	 $query = $conn->query("SELECT * FROM `hotels` WHERE 1");
    
            while($row = $query->fetch_assoc()){
?>

    <div class="col-sm-6">
    	<div class="box" id="<?php echo $row["hotelid"];?>">
    		<h4><?php echo $row["hotelname"];?></h4>
    		<h6>Location - <?php echo $row["location"];?> &nbsp; ; Contact - <?php echo $row["phoneno"];?></h6>
		</div>			
	</div>

<?php


 } 


# hotels
}


if ($count==2) {




	 $query = $conn->query("SELECT * FROM `travels` WHERE 1");
    
            while($row = $query->fetch_assoc()){
?>

    <div class="col-sm-6">
    	<div class="box" id="<?php echo $row["travelid"];?>">
    		<h4><?php echo $row["travelsname"];?></h4>
    		<h6>Location - <?php echo $row["category"];?> &nbsp; ; Contact - <?php echo $row["phoneno"];?></h6>
		</div>			
	</div>

<?php


 } 


# travel
}












?>