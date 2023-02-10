<?php
 include('../config.php');
	 $name=$_POST['wzzh'];
	
	  if(mysqli_connect_errno())
	  {
	      echo "连接失败: " . mysqli_connect_error();
	  }
	  $sql="update setting set name='$name',job='$job',address='$address',email='$email',wspeak='$wspeak',chickensoup='$chickensoup' where name='$name'";
	  $result=mysqli_query($conn,$sql);
	  echo $result;
	  mysqli_close($conn);
	 ?>