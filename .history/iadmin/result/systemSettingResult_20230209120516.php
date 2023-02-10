<?php
 include('../../config.php');
	 $name=$_POST['wzzh'];
	 $name2=$_POST;
	//   if(mysqli_connect_errno())
	//   {
	//       echo "连接失败: " . mysqli_connect_error();
	//   }
	// if($name=='on'){
	// 	$sql="update setting set statue='1' where name='wzzh'";
	// 	$result=mysqli_query($conn,$sql);
	// }else{
	// 	$sql="update setting set statue='0' where name='wzzh'";
	// 	$result=mysqli_query($conn,$sql);
	// }
	//   echo $result;
	  echo $name2.size();
	  mysqli_close($conn);
	 ?>