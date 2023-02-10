<?php
	 include('../../config.php');
       
         $sql = "update story set state=$_GET[state] where id=$_GET[id]";
		 
     
         $result= mysqli_query($conn,$sql);
         
				   if(! $result ) {
					die('Could not update data: ' . mysql_error());
				 }
			
				 $conn->close();
						
        echo '<script>window.location.href="../article.php"</script>';					   
 ?>