<?php
	 include('../../config.php');
       
         $sql = "delete from timeline where Id =$_GET[id]";
		 
     
         $result= mysqli_query($conn,$sql);
         
				   if(! $result ) {
					die('Could not delete data: ' . mysql_error());
				 }
			
				 $conn->close();
						
        echo '<script>window.location.href="../timelineLog.php"</script>';					   
 ?>