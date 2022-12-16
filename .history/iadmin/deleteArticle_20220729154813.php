<?php
	 include('../config.php');
       
         $sql = "delete from story where Id =$_GET[id]";
		 echo $sql;
     
         $result= mysqli_query($conn,$sql);
         echo $result;
				   if(! $result ) {
					die('Could not delete data: ' . mysql_error());
				 }
				 
				
				 
				 mysql_close($conn);
					 
				 $conn->close();
							
							   
							  ?>