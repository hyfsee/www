<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>优乐堂社区</title>
    <link rel="stylesheet" href="./layui/css/layui.css">
    <link rel="stylesheet" href="./css/picture.css">
    <script src="./layui/layui.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.tagcanvas.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        if (!$('#myCanvas').tagcanvas({
                textColour: '#666',
                textSize: 10,
                outlineThickness: 2,
                maxSpeed: 0.02,
                depth: 0.75,
            })) {

            $('#myCanvasContainer').hide();
        }









    });
    </script>
</head>

<body style="background-color:#f3f3f3;">

    <?php
    include('../config.php');
	$date1= date("Y-m-d H:i:s", time());
	$ip= $_SERVER["REMOTE_ADDR"];
    $sql = "SELECT * FROM log";
    $data = $conn->query($sql);
	$result=$data->num_rows;
    
     if($result<=0){

		$sql1 = "INSERT INTO log ( ip, date1)
		VALUES ('$ip', '$date')";
   if ($conn->query($sql1) === TRUE) {
  
   } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
    }
  

	 }else{
  
		include('../config.php');
	
	     $upSql="UPDATE log SET ip='$ip' ,date='$date1' WHERE id=1";

		 if($conn->query($upSql) === TRUE) {
		
		   } else {
			echo "Error: " . $upSql . "<br>" . $conn->error;
			}



	 }

      
			    $conn->close();
				
			   ?>
    <!-- 导航栏 -->
    <?php 
           include '../public/header.php';
       ?>
    <!-- 主图-->
    <div class="layui-fluid" style="padding-top:8px;">
        <div class="layui-row">
            <div class="layui-col-md2">&nbsp;</div>
            <!-- 轮播图 -->
            <div class="layui-col-md4">
                <div class="layui-carousel" id="test1">
                    <div carousel-item>
                        <div><img src="./img/5.png"></div>
                        <div><img src="./img/6.jpg"></div>
                    </div>
                </div>
                <script>
                layui.use('carousel', function() {
                    var carousel = layui.carousel;
                    carousel.render({
                        elem: '#test1',
                        width: '100%',
                        arrow: 'always',
                        height: '350px'
                    });
                });
                </script>
            </div>
            <div class="layui-col-md2">
                <span>
                    <div class="box">
                        <a href=""><img src="./img/1234.jpg" class="imgs1" width="100%" height="185"></a>
                        <div class="box-content">
                            <div class="content">
                                <h3 class="title">你已经是个大人了！</h3>
                                <span class="post">别再因为一点感情问题就失魂落魄。</span>
                            </div>
                        </div>
                    </div>
                </span>
                <span>
                    <div class="box">
                        <img src="./img/h2.jpg" class="imgs2" width="100%" height="180">
                        <div class="box-content">
                            <div class="content">
                                <h3 class="title">你可以有一段糟糕的爱情</h3>
                                <span class="post">但不能放纵自己过一个烂透的人生</span>
                            </div>
                        </div>
                    </div>
                </span>
            </div>
            <div class="layui-col-md2">

                <div class="layui-card" style="margin-left:9px;padding-top:11px">
                    <div class="layui-card-header"> <span class="wzgg">
                            <center><B>————— 我的名片 —————</B></center>
                        </span></div>
                    <div class="layui-card-body">
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
                        <a target="_blank"
                            href="http://sighttp.qq.com/authd?IDKEY=1bc7debda54253029d20ee73273de139d2cac0ba8b6763e8"><img
                                src="./img/qq.jpg" title="点击这里给我发消息" /></a>
                        <a target="_blank"
                            href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=44uWhIaCm5SjhYybjoKKj82AjI4"
                            style="text-decoration:none;"><img
                                src="http://rescdn.qqmail.com/zh_CN/htmledition/images/function/qm_open/ico_mailme_02.png" /></a>
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
                <div class="story one" style="background-color:white">
                    <div class="layui-card-header"><span class="techloarg">最新动态</a></span></div>
                    <?php
    include('../config.php');
    $sql = "select * from story";
    $data = $conn->query($sql);
	$result=$data->num_rows;
        $num = 4;
        $w = ceil($result/ $num);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $num;
        $sql = "select * from story where state=0 order by Id desc limit $offset,{$num} ";
        $data = $conn->query($sql);	
        $p = ($page == 1) ? 0 : ($page - 1);
        $n = ($page == $w) ? 0 : ($page + 1);
        $tt=$data->num_rows;
					if ($data->num_rows > 0) {  
					    while($v = $data->fetch_assoc()){
							echo'<div class="story body">
							   <table class="layui-table" lay-even lay-skin="nob">
								 <tbody><tr><td><img src="./upload/'. $v['picture'].'"style="width:400px;height:150px" class="tpicture"></td>
								        <td><span style="padding-top:-30px;"><a href="content.php?id='.$v['Id'].'">
										<b>'.$v['title'].'</b></a></span></br></br>
								  			<span style="display: block; height: 100px; text-overflow: ellipsis; overflow: hidden; white-space: normal;">'.$v['product'].'<a style="margin-top: 15px; position: absolute;right: 10px;" href="content.php?id='.$v['Id'].'" class="layui-btn layui-btn-xs"  target="_blank" style="text-align: right;">查看详情 </a></span><br><br><br>
								  	<span style="padding: 0 15px"><i class="layui-icon layui-icon-face-smile" ></i>&nbsp;&nbsp;
									'.$v['auther'].'</span>
										<span style="padding: 0 15px"><i class="layui-icon">&#xe705;</i>【';
										 	 $type=$v['type'];
										
										 
										 echo $type.'】</span>
										<span style="padding: 0 15px"><i class="layui-icon">&#xe60e;</i>&nbsp;&nbsp;
										'.$v['pageviews'].'</span>
										<span style="padding: 0 15px"><i class="layui-icon">&#xe637;</i>&nbsp;&nbsp;
										'.$v['date'].'</span></div></td></tr>
								    </tbody>
								  </table>
								  </div>';
					 }};
                     if($tt>0){
                if ($page==1){echo '<div class="center" align="center"><ul class="pagination" ><li class="fenye"><a href="">首页</a></li>';}
				else{echo '<div class="center" align="center"><ul class="pagination" ><li class="fenye"><a href="?page=1">首页</a></li>';}
                if ($p){echo '<li><a href="?page='.$p.'">上一页</a></li>';}else{echo '<li><a href="">上一页</a></li>';}
               if ($n){echo '<li><a href="?page='.$n.'">下一页</a></li>';}else{echo '<li><a href="">下一页</a></li>';}
               if($page== $w){echo '<li><a href="">尾页</a></li> </ul></div>';}else{echo '<li><a href="?page='.$w.'">尾页</a></li> </ul></div>';}
            }else{
                echo '<center><div style="padding:40px;font-size:20px;color:ff0000">这里暂时还没有哦！后续的我们会更新的哦！</div><center>';
            }
               
               $conn->close();
				
			   ?>
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