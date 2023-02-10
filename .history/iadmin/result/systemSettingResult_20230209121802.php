<?php
 include('../../config.php');
     $sSql="select name from setting";
	 $querySql=mysqli_query($conn,$sSql);
	 $queryRow=mysqli_num_rows($querySql);
	 if($queryRow>0){

		$queryResult=mysqli_fetch_assoc($queryRow);
		while($row =$queryResult){
			"$"+$row['name'] = $_POST[$row['name']]
		}


	 }
	 $name=$_POST['wzzh'];
	 $name2=$_POST;
	  if(mysqli_connect_errno())
	  {
	      echo "连接失败: " . mysqli_connect_error();
	  }
	if($name=='on'){
		$sql="update setting set statue='1' where name='wzzh'";
		$result=mysqli_query($conn,$sql);
	}else{
		$sql="update setting set statue='0' where name='wzzh'";
		$result=mysqli_query($conn,$sql);
	}
	  echo $result;
	  echo $name2;
	  mysqli_close($conn);
	 ?>