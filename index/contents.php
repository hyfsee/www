<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		  <link rel="stylesheet" href="layui/css/layui.css">
		  <script src="layui/layui.js"></script>
		  <script src="js/jquery.min.js"></script>
		  <script src="js/jquery.tagcanvas.js" type="text/javascript"></script>
		  <script type="text/javascript">
		   $(document).ready(function() {
		     if( ! $('#myCanvas').tagcanvas({
		       textColour : '#000000',
		       outlineThickness : 3,
		       maxSpeed : 0.02,
		       depth : 0.75,
		     })) {
		     
		       $('#myCanvasContainer').hide();
		     }
		     
		   });
		   </script>
			<style>
				@font-face {
  font-family: 'iconfont';
  src: url('iconfont.eot');
  src: url('iconfont.eot?#iefix') format('embedded-opentype'),
      url('iconfont.woff2') format('woff2'),
      url('iconfont.woff') format('woff'),
      url('iconfont.ttf') format('truetype'),
      url('iconfont.svg#iconfont') format('svg');
}
			.iconfont {
  font-family: "iconfont" !important;
  font-size: 16px;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}	
				
			</style>

	</head>
	<body style="background-color:#f3f3f3;" onmousemove=/HideMenu()/ oncontextmenu="return false" ondragstart="return false" onselectstart ="return false" onselect="document.selection.empty()" oncopy="document.selection.empty()" onbeforecopy="return false" onmouseup="document.selection.empty()" onload="startTime()">
		<!-- 导航栏 -->
       <?php 
          include '../public/header.html';
      ?>
				
			    <!-- 添加一个背景音乐 -->
         <audio autoplay="autoplay"><source src="audio/2.mp3" /></audio>
      </ul>
 
  <!-- 文章详情页 -->
 <div class="layui-fluid" style="padding-top: 10px;">  
  <div class="layui-row">
    <div class="layui-col-md3">&nbsp;</div>
	
    <div class="layui-col-md5" style="background-color:#FFFFFF;box-shadow: 3px 3px 5px #888888;padding:0 70px;">
		 <?php
		   include('../config.php');
			  $id=$_GET['id'];
			  $sql="select * from story where id=$id";
		        $result= mysqli_query($conn,$sql);
		        $sql_arr = mysqli_fetch_assoc($result);
		        $picture = $sql_arr['picture'];
		        $auther = $sql_arr['auther'];
		 				$type = $sql_arr['type'];
		 				$date = $sql_arr['date'];
						$pageviews=$sql_arr['pageviews'];
		 				$id = $sql_arr['Id'];
						$content = $sql_arr['content'];
		        $title = $sql_arr['title'];
		 				if($type==1){
		 					$type='资源共享';
		 				}else if($type==2){
		 					$type='心情小镇';
		 				}else if($type==3){
		 					$type='JAVA';
		 				}else if($type==4){
		 					$type='PHP';
		 				}else if($type==5){
		 					$type='我的故事';
		 				}else if($type==6){
		 				    $type='Android';
		 				}else if($type==7){
		 					$type='Python';
		 				}else if($type==8){
		 				$type='工具推荐';
		 				};
							echo '<center>		
						 <h3><br>'.$title.'</h3><center><br><hr><span style="padding: 0 15px"><i class="layui-icon layui-icon-face-smile" ></i>&nbsp;&nbsp;'.$auther.'</span>
						 <span style="padding: 0 15px"><i class="layui-icon">&#xe705;</i>【'.$type.'】</span>
						 <span style="padding: 0 15px"><i class="layui-icon">&#xe637;</i>&nbsp;&nbsp;'.$date.'</span><hr><br><br>'.
						$content.'<hr>';
		           mysqli_close($conn);
		           ?>
		       <!-- 给文章浏览数加一 -->
						<?php
		          $conn=mysqli_connect("localhost","root","hgaxw3344","huhuto");
		 		      $id=$_GET['id'];
					  $sql="update story set pageviews=pageviews+1 where id=$id";
		           mysqli_query($conn,$sql);
		           mysqli_close($conn);?>
    </div>
	
	<div class="layui-col-md2" style="margin-left:7px">
	   <?php 
	      include '../public/chickensoup.php';
	  ?>
	</div>
	<div class="layui-col-md2">&nbsp;</div>
	
  </div>
   </div>
		 <script>
		layui.use('element', function(){
		  var element = layui.element;
		  
		  //…
		});
		</script>
		<div class="layui1">
  <?php 
      include '../public/footer.html';
  ?>
	</body>
</html>
