<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		  <link rel="stylesheet" href="layui/css/layui.css">
		  		  <link rel="stylesheet" href="css/picture.css">
		  <script src="layui/layui.js"></script>
			<link rel="shortcut icon" href="../favicon.ico">
			<script src="js/jquery.js"></script> 
			<script src="js/main.js"></script> 
<script src="js/jquery.min.js"></script>
<script src="js/jquery.tagcanvas.js" type="text/javascript"></script>
<script type="text/javascript">
 $(document).ready(function() {
   if( ! $('#myCanvas').tagcanvas({
     textColour : '#04d6fc',
     outlineThickness : 3,
     maxSpeed : 0.02,
     depth : 0.75,
   })) {
   
     $('#myCanvasContainer').hide();
   }
   
 });
 </script>
 <script type="text/javascript">
var a_idx = 0;
jQuery(document).ready(function($) {
$("body").click(function(e) {
var a = new Array("富强", "民主", "文明", "和谐", "自由", "平等", "公正" ,"法制", "爱国", "敬业", "诚信", "友善");
var $i = $("<span/>").text(a[a_idx]);
a_idx = (a_idx + 1) % a.length;
var x = e.pageX,
y = e.pageY;
$i.css({
"z-index": 9999999999,
"top": y - 20,
"left": x,
"position": "absolute",
"font-weight": "bold",
"color": "#ff0000"
});
$("body").append($i);
$i.animate({
"top": y - 180,
"opacity": 0
},
1500,
function() {
$i.remove();
});
});
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
	<body style="background-color:#f3f3f3;"onload="startTime()">
		<!-- 导航栏 -->
       <?php 
           include '../public/header.html';
       ?>
  <!-- 主图-->
   <div class="layui-fluid" style="padding-top: 10px;">  
  <div class="layui-row">
    <div class="layui-col-md2">&nbsp;</div>
	<!-- 轮播图 -->
    <div class="layui-col-md4">
      		<div class="layui-carousel" id="test1">
             <div carousel-item>
          <div><img src="img/5.png"></div>
		      <div><img src="img/6.jpg"></div>
        </div>
      </div>
      <script>
      layui.use('carousel', function(){
        var carousel = layui.carousel;
        carousel.render({
          elem: '#test1'
          ,width: '100%'
          ,arrow: 'always' 
        ,height:'350px'
        });
      });
      </script>
    </div>
	<div class="layui-col-md2">
	<span> <div class="box">
	                        <a href="https：//www.baidu.com"><img src="img/1234.jpg" class="imgs1" width="100%" height="185"></a>
	                        <div class="box-content">
	                            <div class="content">
	                                <h3 class="title">你已经是个大人了！</h3>
	                                <span class="post">别再因为一点感情问题就失魂落魄。</span>  
	                            </div>
	                        </div>
	                    </div></span>
	<span> <div class="box">
	                       <img src="img/h2.jpg" class="imgs2" width="100%" height="180">
	                        <div class="box-content">
	                            <div class="content">
	                               <h3 class="title">你可以有一段糟糕的爱情</h3>
	                            <span class="post">但不能放纵自己过一个烂透的人生</span>
	                            </div>
	                        </div>
	                    </div></span>
</div>
	<div class="layui-col-md2">
	  
	    <div class="layui-card" style="margin-left:9px;padding-top:11px">
	  <div class="layui-card-header"><span style="color:grey; font-size:16px;"><b>我的名片</b></span></div>
	  <div class="layui-card-body">
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
			    $name = $sql_arr['name'];
				$job = $sql_arr['job'];
				$address = $sql_arr['address'];
				$email = $sql_arr['email'];
				$wspeak = $sql_arr['wspeak'];  
	   echo '网名：'.$name.'
      <hr class="layui-bg-green">
			 职业：'.$job.'
			 <hr class="layui-bg-green"> 
			 居住：'.$address.'
			 <hr class="layui-bg-green">
				Email:'.$email.'
				<hr class="layui-bg-green">
				今天是这句话：</br>'.$wspeak.'';
				}
				?>
				<hr class="layui-bg-green">
				<a target="_blank" href="http://sighttp.qq.com/authd?IDKEY=1bc7debda54253029d20ee73273de139d2cac0ba8b6763e8"><img  src="img/qq.jpg"  title="点击这里给我发消息"/></a>
				<a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=44uWhIaCm5SjhYybjoKKj82AjI4"style="text-decoration:none;">
				 <img src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_02.png"/></a>
		</div>
	</div>
	</div>
	<div class="layui-col-md2">&nbsp;</div>
  </div>
	</div>
  <!-- 第三部分板块 -->
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
        $w = ceil($result/ $num);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $num;
        $sql = "select * from story order by Id desc limit $offset,{$num}";
        $data = $conn->query($sql);	
        $p = ($page == 1) ? 0 : ($page - 1);
        $n = ($page == $w) ? 0 : ($page + 1);
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
					
                if ($page==1){echo '<li style="padding: 0 10px"><a href="">首页</a></li>';}
				else{echo '<li style="padding: 0 10px"><a href="?page=1">首页</a></li>';}
                if ($p){echo '<li><a href="?page='.$p.'">上一页</a></li>';}else{echo '<li><a href="">上一页</a></li>';}
               if ($n){echo '<li><a href="?page='.$n.'">下一页</a></li>';}else{echo '<li><a href="">下一页</a></li>';}
               if($page== $w){echo '<li><a href="">尾页</a></li>';}else{echo '<li><a href="?page='.$w.'">尾页</a></li>';}
			    $conn->close();
				
			   ?>
			     </ul>
			   </div>
			
    
	</div>
	<div class="layui-col-md2" style="margin-left:7px">
	   <?php 
	       include '../public/chickensoup.php';
	   ?>
		 	</div>
		 	<div class="layui-col-md2">&nbsp;</div>
		 	
		 </div>
	</div>
	<div class="layui-col-md2">&nbsp;</div>
	
  </div>
  
  
   </div>
	
		<div class="layui1">
 <?php 
    include '../public/footer.html';
?>
	</body>
</html>
