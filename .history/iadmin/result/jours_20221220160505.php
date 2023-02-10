<?php
 include('../config.php');
	 $name=$_POST['wzzh'];
	
	  if(mysqli_connect_errno())
	  {
	      echo "连接失败: " . mysqli_connect_error();
	  }
	if($name==true){
		$sql="update setting set statue='0' where name='$name'";
		$result=mysqli_query($conn,$sql);
	}else{
		$sql="update setting set statue='1' where name='$name'";
		$result=mysqli_query($conn,$sql);
	}
	  echo $result;
	  mysqli_close($conn);
	 ?>