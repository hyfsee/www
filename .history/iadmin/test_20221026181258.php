<?php 
	 $name=$_POST['name'];
	 $job=$_POST['job'];
	 $address=$_POST['address'];
	 $email=$_POST['email'];
	 $wspeak=$_POST['wspeak'];
	 $chickensoup=$_POST['chickensoup'];
	include('../config.php');
	  if (mysqli_connect_errno())
	  {
	      echo "连接失败: " . mysqli_connect_error();
	  }
	  $sql="update message set name='$name',job='$job',address='$address',email='$email',wspeak='$wspeak',chickensoup='$chickensoup' where id=1";
	  $result=mysqli_query($conn,$sql);
	  if($result===true){
		echo '修改成功';
		echo '<script>window.loaction.herf="/message.php"</script>';
	  }
	  mysqli_close($conn);
	 ?>