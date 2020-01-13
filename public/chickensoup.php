<div class="layui-card" >
	    	   <div class="layui-card-header">
	    			 <span class="wzgg"><a href="">每日毒鸡汤</a></span></div>
	    	   <div class="layui-card-body">
	    	   <div class="box">
	        <p class="animate">
	     <?php
	     	   include('../config.php');
	     	     if (mysqli_connect_errno())
	     	     {
	     	         echo "连接失败: " . mysqli_connect_error();
	     	     }
	     	          $sql="select * from message where id=1";
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
	 			 <span class="wzgg">最新文章</span></div>
	 	   <div class="layui-card-body">
				<?php
			       include('../config.php');
				   $sql="select * from story order by Id desc";
			        $result= mysqli_query($conn,$sql);
			         $datarow = mysqli_num_rows($result); //长度
			            //循环遍历出数据表中的数据
			            for($i=0;$i<$datarow;$i++){
										  $sql_arr = mysqli_fetch_assoc($result);
			                $title = $sql_arr['title'];
											$id = $sql_arr['Id'];
											 echo '<a href="content.php?id='.$id.'" target="_black">'.$title.'</a>
										 	<hr class="layui-bg-green">'; }mysqli_close($conn);?>
	 	   </div>
	 	 </div>
		  	<div class="layui-card" >
		  	 	   <div class="layui-card-header">
		  	 			 <span class="wzgg">网站统计</span></div>
		  	 	   <div class="layui-card-body">
		  	 	     建站时间：<a href="">2019-05-18</a>
					 <br> <br>
					 建站语言：<a href="">PHP</a>
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
				  			 <span class="wzgg">标签云</span></div>
				  	   <div class="layui-card-body">
				  	
 <canvas width="300" height="300" id="myCanvas" >
  <ul>
   <li><a href="../record/timeline.php" target="_blank">心情小镇</a></li>
   <li><a href="../index/indexs.php?type=6" target="_blank">Android</a></li>
   <li><a href="../about">关于我</a></li>
   <li><a href="../index/indexs.php?type=7" target="_blank">Python</a></li>
   <li><a href="../index/indexs.php?type=1" target="_blank">资源社区</a></li>
   <li><a href="../index/indexs.php?type=8" target="_blank">工具推荐</a></li>
   <li><a href="../index/indexs.php?type=3" target="_blank">Java笔记</a></li>
   <li><a href="../index/indexs.php?type=4" target="_blank">PHP有感</a></li>
   <li><a href="../index/indexs.php?type=5" target="_blank">我的故事</a></li>
  </ul>
 </canvas>
 </div>
</div> 
				  	   </div>
				  
		 	