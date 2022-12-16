<?php
	 include('../config.php');
       
         $sql = "delete from story where Id =$_GET[id]";
		 
     
         $result= mysqli_query($conn,$sql);
         
				   if(! $result ) {
					die('Could not delete data: ' . mysql_error());
				 }
				 
				
				 
				 mysql_close($conn);
					 
				 $conn->close();
							
							   
							  ?>