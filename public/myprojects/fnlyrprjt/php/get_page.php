<?phpinclude 'database.php';if($_REQUEST['id'] == "guide"){ $query = $conn->query("SELECT * FROM guide where 1");       if($query->num_rows > 0){             while($row = $query->fetch_assoc()){?><h3><?php echo $row["name"];?></h3><div><?php echo $row["phoneno"];?></p><?php }     } }if($_REQUEST['id'] == "tripadvisor"){ $query = $conn->query("SELECT * FROM travels where 1");       if($query->num_rows > 0){             while($row = $query->fetch_assoc()){?><h3><?php echo $row["travelsname"];?></h3><div><?php echo $row["phoneno"];?></p><?php }     } }?>