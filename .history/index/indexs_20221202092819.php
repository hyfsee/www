<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="layui/css/layui.css">
    <link href="css/history.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/picture.css">
    <script src="layui/layui.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.tagcanvas.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        if (!$('#myCanvas').tagcanvas({
                textColour: '#000000',
                outlineThickness: 3,
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
	include '../public/header.php';
	?>
    <div class="layui-fluid" style="padding-top: 10px;">
        <div class="layui-row">
            <div class="layui-col-md2">&nbsp;</div>
            <div class="layui-col-md6">
                <div class="story one" style="background-color:white">
                    <div class="layui-card-header"><span class="techloarg">当前标签 &nbsp;>><span
                                style="padding: 2px 10px; background-color: #008080; color: #FFFFFF;"><b><?php echo $_GET['type'] ?></b></span>
                    </div>
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
		       						 <tbody><tr><td><img src="upload/'.$v['picture'].'"style="width:400px;height:150px" class="tpicture"></td>
		       						        <td><span style="padding-top:-30px;">
		       								<b>'.$v['title'].'</b></span></br>
		       						  			<span>'.$v['product'].'</span><br><br><br>
		       						  	<span style="padding: 0 15px"><i class="layui-icon layui-icon-face-smile" ></i>&nbsp;&nbsp;
		       							'.$v['auther'].'</span>
		       								<span style="padding: 0 15px"><i class="layui-icon">&#xe705;</i>【'.$v['type'].'】</span>
		       								<span style="padding: 0 15px"><i class="layui-icon">&#xe60e;</i>&nbsp;&nbsp;
		       								'.$v['pageviews'].'</span>
		       								<span style="padding: 0 15px"><i class="layui-icon">&#xe637;</i>&nbsp;&nbsp;
		       								'.$v['date'].'</span>
											<span style="padding: 0 0 0 18px"><a href="content.php?id='.$v['Id'].'" class="layui-btn layui-btn-xs"  target="_blank" style="text-align: right;">查看详情 </a></span></div></td></tr>
		       						    </tbody>
		       						  </table>
		       						  </div></div>';
		       			 }};
		       			if($tt>0){
		               if ($page==1){echo '<div class="center" align="center"><ul class="pagination"><li><a href="">首页</a></li>';}
		       		else{echo '<div class="center" align="center"><ul class="pagination"><li><a href="?page=1">首页</a></li>';}
		               if ($p){echo '<li><a href="?page='.$p.'">上一页</a></li>';}else{echo '<li><a href="">上一页</a></li>';}
		              if ($n){echo '<li><a href="?page='.$n.'">下一页</a></li>';}else{echo '<li><a href="">下一页</a></li>';}
		              if($page== $w){echo '<li><a href="">尾页</a></li> </ul></div>';}else{echo '<li><a href="?page='.$w.'">尾页</a></li> </ul></div>';}
					  }else{
						  echo '<center><div style="padding:40px;font-size:20px;color:ff0000">你想要的资源我这里暂时还没有哦！后续的我们的huhuto会更新的哦！</div><center>';
					  }
		       	    $conn->close();
		       		
		       	   ?>
                </div>
                <div class="layui-card">
                    <div class="layui-col-md2" style="margin-left:7px">
                        <?php include '../public/chickensoup.php';?>
                    </div>
                    <div class="layui-col-md2">&nbsp;</div>

                </div>
            </div>
            <script>
            layui.use('element', function() {
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