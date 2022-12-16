<?php
				   include('../config.php');
			
				
				   $sql = "select * from private where id=1";
				   $result= mysqli_query($conn,$sql);
				 
				   $datarow = mysqli_num_rows($result); //长度
				   //循环遍历出数据表中的数据
				   for($i=0;$i<$datarow;$i++){
					 $sql_arr = mysqli_fetch_assoc($result);

					   $statue = $sql_arr['statue'];
					  
					    if($statue ===1){

                            echo '<script>window.location.href="admin.html"</script>';
                        }else{


                            echo "禁止访问";
                        }



                           


                        
				 
					   
                    }
							   $conn->close();
							
							   
							  ?>