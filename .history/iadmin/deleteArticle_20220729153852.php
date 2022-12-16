<?php
	 include('../config.php');
       
         $sql = "delete from story id ='$_GET[id]'";
		 echo $sql;
         echo $_GET[id]
         $result= mysqli_query($conn,$sql);
				   if(! $result ) {
					die('Could not delete data: ' . mysql_error());
				 }
				 
				 echo "Deleted data successfully\n";
				 
				 mysql_close($conn);
					 
				 $conn->close();
							
							   
							  ?>