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
		<!-- 导航栏 -->
       <?php 
           include '../public/header.html';
       ?>
 <div class="layui-fluid" style="padding-top: 10px;">  
  <div class="layui-row">
    <div class="layui-col-md2">&nbsp;</div>
	
    <div class="layui-col-md6">
			 <div class="layui-card" >
			     <div class="layui-card-body">	
			<div class="main">
        <div class="history">
          <div class="history-date">
      <ul>
		  <?php
		  	  $conn=mysqli_connect("localhost","root","hgaxw3344","huhuto");
		  	  $sql="select * from timeline";
		  	  $result=mysqli_query($conn,$sql);
		  	  $dates=mysqli_num_rows($result);
		  	for($i=0;$i<$dates;$i++){
		  					  $sql_arr = mysqli_fetch_assoc($result);
		  	                 $content = $sql_arr['content'];
							  $contents = $sql_arr['contens'];
		  						$dates = $sql_arr['date'];
		  						echo '<h2>2019年</h2>
       <li class="green">
          <h3>'.$dates.'</h3>
          <dl>
            <dt>'.$content.'
	<span>'.$contents.'</span>
	</dt>
          </dl>
        </li>
   ';
   }mysqli_close($conn);
   ?>
      </ul>
    </div>
    </div>	
     </div>
		</div>	
		 </div> </div>
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
 <?php 
    include '../public/footer.html';
?>
	</body>
</html>
