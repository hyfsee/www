<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		  <link rel="stylesheet" href="../index/layui/css/layui.css">
			<link href="css/history.css" rel="stylesheet" />
		  <script src="../index/layui/layui.js"></script>
			<script src="js/jquery.js"></script> 
			<script src="js/main.js"></script> 
			<link rel="shortcut icon" href="../favicon.ico">
			<script src="../index/js/jquery.min.js"></script>
			<script src="../index/js/jquery.tagcanvas.js" type="text/javascript"></script>
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
	</head>
	<body style="background-color:#f3f3f3;" onmousemove=/HideMenu()/ oncontextmenu="return false" ondragstart="return false" onselectstart ="return false" onselect="document.selection.empty()" oncopy="document.selection.empty()" onbeforecopy="return false" onmouseup="document.selection.empty()" onload="startTime()">
	<?php 
	include '../public/header.html';
	?>
 <div class="layui-fluid" style="padding-top: 10px;">  
  <div class="layui-row">
    <div class="layui-col-md2">&nbsp;</div>
	
    <div class="layui-col-md6">
		<div class="story one" style="background-color:white" >
				<div class="layui-card-header"><span class="techloarg">最新动态</a></span></div>
					<?php
		
		include('../config.php');
		$sql = "select * from story";
		$data = $conn->query($sql);
		$result=$data->num_rows;
		    $num = 5;
		    $w = ceil($result / $num);
		    $page = isset($_GET['page']) ? $_GET['page'] : 1;
		    $offset = ($page - 1) * $num;
			    $type=$_GET['type'];
		       
		        $sql = "select * from story where type=$type order by Id desc limit $offset,{$num}";
		       $data = $conn->query($sql);
		       $p = ($page == 1) ? 0 : ($page - 1);
		       $n = ($page == $w) ? 0 : ($page + 1);
			   $tt=$data->num_rows;
		       			if ($data->num_rows > 0) {  
		       			    while($v = $data->fetch_assoc()){
		       					echo'<div class="story body">
		       					   <table class="layui-table" lay-even lay-skin="nob">
		       						 <tbody><tr><td><img src="upload/'. $v['picture'].'"style="width:400px;height:150px" class="tpicture"></td>
		       						        <td><span style="padding-top:-30px;">
		       								<b>'.$v['title'].'</b></span></br>
		       						  			<span>'.$v['product'].'<a href="content.php?id='.$v['Id'].'" class="layui-btn layui-btn-xs"  target="_blank" style="text-align: right;">查看详情 </a></span><br><br><br>
		       						  	<span style="padding: 0 15px"><i class="layui-icon layui-icon-face-smile" ></i>&nbsp;&nbsp;
		       							'.$v['auther'].'</span>
		       								<span style="padding: 0 15px"><i class="layui-icon">&#xe705;</i>【';
		       								 	 $type=$v['type'];
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
		       								 
		       								 echo $type.'】</span>
		       								<span style="padding: 0 15px"><i class="layui-icon">&#xe60e;</i>&nbsp;&nbsp;
		       								'.$v['pageviews'].'</span>
		       								<span style="padding: 0 15px"><i class="layui-icon">&#xe637;</i>&nbsp;&nbsp;
		       								'.$v['date'].'</span></div></td></tr>
		       						    </tbody>
		       						  </table>
		       						  </div>
		             
		       			</div>
		       			<div class="center" align="center">
		       			<ul class="pagination">';
		       			 }};
		       			if($tt>0){
		               if ($page==1){echo '<li><a href="">首页</a></li>';}
		       		else{echo '<li><a href="?page=1">首页</a></li>';}
		               if ($p){echo '<li><a href="?page='.$p.'">上一页</a></li>';}else{echo '<li><a href="">上一页</a></li>';}
		              if ($n){echo '<li><a href="?page='.$n.'">下一页</a></li>';}else{echo '<li><a href="">下一页</a></li>';}
		              if($page== $w){echo '<li><a href="">尾页</a></li>';}else{echo '<li><a href="?page='.$w.'">尾页</a></li>';}
					  }else{
						  echo '<center><div style="padding:40px;font-size:20px;color:#f3f3f3">内容后续更新中。。。。。。</div><center>';
					  }
		       	    $conn->close();
		       		
		       	   ?>
					     </ul>
					   </div></div>
		  <div class="layui-card" >
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
<div class="bottom">

	  <?php 
	 		include '../public/footer.html';
	  ?>
      
</div>

	</body>
</html>
