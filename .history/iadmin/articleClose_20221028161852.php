<?php
	 include('../config.php');
       
         $sql = "update story set state=1 weher id=$_GET[id]";
		 
     
         $result= mysqli_query($conn,$sql);
         
				   if(! $result ) {
					die('Could not update data: ' . mysql_error());
				 }
			
				 $conn->close();
						
        echo '<script>window.location.href="article.php"</script>';					   
 ?>