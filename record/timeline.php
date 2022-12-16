<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../index/layui/css/layui.css">
    <link href="css/history.css" rel="stylesheet" />
    <script src="../index/layui/layui.js"></script>
    <link rel="stylesheet" href="../index/css/picture.css">
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <link rel="shortcut icon" href="../favicon.ico">
    <script src="../index/js/jquery.min.js"></script>
    <script src="../index/js/jquery.tagcanvas.js" type="text/javascript"></script>
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

    })
    </script>
</head>

<body style="background-color:#f3f3f3;">
    <!-- 导航栏 -->
    <?php 
           include '../public/header.html';
       ?>
    <div class="layui-fluid" style="padding-top: 10px;">
        <div class="layui-row">
            <div class="layui-col-md2">&nbsp;</div>

            <div class="layui-col-md6">
                <div class="layui-card">
                    <div class="layui-card-body" style="height:800px ;overflow-y:scroll;overflow-x:hidden">
                        <div class="main" id="contentMain">
                            <div class="history">
                                <div class="history-date">
                                    <ul>
                                        <?php
		   
		
                include('../config.php');


                $sql1="select * from setting where name='hysy'";
                $result1=mysqli_query($conn,$sql1);
                $datas1=mysqli_num_rows($result1);
             
                 $sql_arr = mysqli_fetch_assoc($result1);
                              
                $statue = $sql_arr['statue'];
                   
              
                $state= $statue;
    
                $sql="select * from timeline order by id desc";
               
		  	  $result=mysqli_query($conn,$sql);
		  	  $datas=mysqli_num_rows($result);
		  	for($i=0;$i<$datas;$i++){
		  					  $sql_arr = mysqli_fetch_assoc($result);
		  	                 $content = $sql_arr['content'];
							  $contents = $sql_arr['contens'];
		  						$times = $sql_arr['date'];
		  						if($state==="1"){
                                    echo '<li class="green">
          <h3>'.$times.'</h3>
          <dl style="width:67%;min-height: 100px;background: #000 linear-gradient(to left,#5ac8fa, #4cd964, #5ac8fa); margin:10px 0 0 30px;border-radius:5px;padding:5px;">
            <dt style="padding:0 10px; color:#fff"><b>'.$content.'</b>
	<span style="padding:0 10px; color:#fff">'.$contents.'</span></dt></dl></li>';
  
                                }else{

                                    echo '<li class="green">
                                    <h3>'.$times.'</h3>
                                    <dl style="width:67%;min-height: 100px;	background: #000 linear-gradient(to left, #D0E6A5,#86E3CE,#5ac8fa); margin:10px 0 0 30px;border-radius:5px;padding:5px;">
                                      <dt style="padding:0 10px; color:#fff"><b>'.$content.'</b>
                              <span style="padding:0 10px; color:#fff">该内容已隐藏，暂不支持查看</span></dt></dl></li>';
                                }
                            }
                            
                            
                            mysqli_close($conn);
                
      
            
   ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="layui-card">
                <div class="layui-col-md2" style="margin-left:7px">
                    <?php 
	  include '../public/chickensoup.php';
	  ?>
                </div>
                <div class="layui-col-md2">&nbsp;</div>

            </div>
        </div>
        <script>
        layui.use('element', function() {
            var element = layui.element;

        });
        </script>
        <div class="layui1">
            <?php 
    include '../public/footer.html';
?>
</body>

</html>