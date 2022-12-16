<div class="layui-card" >
	    	   <div class="layui-card-header">
	    			 <span class="wzgg"><center><B>—————  每日毒鸡汤  —————</B></center></span></div>
	    	   <div class="layui-card-body">
	    	   <div class="box">
	        <p class="animate">
	     <?php
	     	   include('../config.php');
	     	     if (mysqli_connect_errno())
	     	     {
	     	         echo "连接失败: " . mysqli_connect_error();
	     	     }
	     	          $sql="select * from message";
	     	     		    $result=mysqli_query($conn,$sql);
	     	     			 $datarow = mysqli_num_rows($result); //长度
	     	     			//循环遍历出数据表中的数据
	     	     			for($i=0;$i<$datarow;$i++){
	     	     							  $sql_arr = mysqli_fetch_assoc($result);
	     	     		
	     	     				$chickensoup = $sql_arr['chickensoup'];
	     	     		  
	     	              echo $chickensoup;
	     	     				}
	     	     				?>
	        </p>
	    </div>
	    	   </div>
	    	 </div>
	<div class="layui-card" >
	 	   <div class="layui-card-header">
	 			 <span class="wzgg"><center><B>—————  最新文章  —————</B></center></span></div>
	 	   <div class="layui-card-body">
			   <ul>
				<?php
			       include('../config.php');
				   $sql="select * from story order by Id desc limit 8";
			        $result= mysqli_query($conn,$sql);
			         $datarow = mysqli_num_rows($result); //长度
			            //循环遍历出数据表中的数据
			            for($i=0;$i<$datarow;$i++){
							$a=$i+1;
										  $sql_arr = mysqli_fetch_assoc($result);
			                $title = $sql_arr['title'];
											$id = $sql_arr['Id'];
											 echo '<li clss="lis1"><span class="lis2">'.$a.'</span><a href="content.php?id='.$id.'" target="_black">'.$title.'</a>
										 	<hr class="layui-bg-green"></li>'; }mysqli_close($conn);?>
	 	  </ul> </div>
 	 	 </div>
		  	<div class="layui-card" >
		  	 	   <div class="layui-card-header">
		  	 			 <span class="wzgg"><center><B>—————  网站统计  —————</B></center></span></div>
		  	 	   <div class="layui-card-body">
		  	 	     建站时间：2019-05-18
					 <br> <br>
					 建站语言：PHP
					 <br> <br>
					 建站运行：
					 <?php
					 date_default_timezone_set("PRC");
					 $d1 = strtotime("may 18 2019");//过去的某天，你来设定
					 $d2 = ceil((time()-$d1)/60/60/24)-1;//现在的时间减去过去的时间，ceil()进一函数
					 echo "第" . $d2 ." 天";
					 ?>
					  <br> <br>
					 总文章数：	
				<?php							  
				include('../config.php');
				$Query = 'select * from story';
				 $a  =  mysqli_query( $conn, $Query);
				  echo mysqli_num_rows( $a ); 
				?>
		  	 	   </div>
		  	 	 </div>
				 <div class="layui-card" >
				  	   <div class="layui-card-header">
				  			 <span class="wzgg"><center><B>—————  标签云  —————</B></center></span></div>
							   <div class="layui-card-body">
				  	
 <canvas width="300" height="300" id="myCanvas" >
  <ul>
   <li><a href="../record/timeline.php" >心情小镇</a></li>
   <li><a href="../index/indexs.php?type='android'" >Android</a></li>
   <li><a href="../about">关于我</a></li>
   <li><a href="../index/indexs.php?type='python'" >Python</a></li>
   <li><a href="../index/indexs.php?type='资源社区'">资源社区</a></li>
   <li><a href="../index/indexs.php?type='工具推荐'">工具推荐</a></li>
   <li><a href="../index/indexs.php?type='javaweb'">Java笔记</a></li>
   <li><a href="../index/indexs.php?type='PHP'" >PHP有感</a></li>
   <li><a href="../index/indexs.php?type='我的故事'" >我的故事</a></li>
  </ul>
 </canvas>
 </div>
</div> 
				  	   </div>
				  
		 	