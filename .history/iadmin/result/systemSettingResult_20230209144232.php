<?php
 include('../../config.php');
     $sSql="select * from setting";
	 $querySql=mysqli_query($conn,$sSql);
	 $queryRow=mysqli_num_rows($querySql);
	 echo $queryRow;
	 if($queryRow>0){

	
		while($row =mysqli_fetch_assoc($querySql)){
			"$"+$row['name'] = $_POST[$row['name']];

			if("$"+$row['name']=='on'){
				$sql='update setting set statue="1" where name="'.$row['name'].'"';
				$result=mysqli_query($conn,$sql);
			}else{
				$sql='update setting set statue="0" where name="'.$row['name'].'"';
				$result=mysqli_query($conn,$sql);
			}
		
			
			  mysqli_close($conn);
		}


	 }
	
	
	 ?>