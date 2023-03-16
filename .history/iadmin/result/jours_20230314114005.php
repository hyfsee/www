<?php
 include('../../config.php');
	 $content=$_POST['content'];
	 $contents=$_POST['contents'];
	 $date= date("Y-m-d");
	  if(mysqli_connect_errno())
	  {
	      echo "连接失败: " . mysqli_connect_error();
	  }
	  $sql="INSERT INTO timeline(content,contens,date) VALUES ('$content','$contents','$date')";
	  $result=mysqli_query($conn,$sql);
	  echo $result;
	  mysqli_close($conn);
	 ?>