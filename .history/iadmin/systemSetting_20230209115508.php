<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
    <title>系统设置</title>
    <link rel="stylesheet" href="../index/layui/css/layui.css">
    <script src="../index/layui/layui.js"></script>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span
            class="c-gray en">&gt;</span> 系统设置修改 <a class="btn btn-success radius r"
            style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i
                class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="layui-fluid" style="padding-top: 10px;">
        <div class="layui-row">
            <div class="layui-col-md1">&nbsp;</div>

            <div class="layui-col-md8">
                <div class="f-14 c-error" style="margin-left: 110px;">注：此功能会调整系统显示及效果，请谨慎调整！！！</div></br></br>
                <form class="layui-form" id="formDemo" action="result/systemSettingResult.php" method="post"
                    enctype="multipart/form-data">

                    <?php
	     	   include('../config.php');
	     	     if (mysqli_connect_errno())
	     	     {
	     	         echo "连接失败: " . mysqli_connect_error();
	     	     }
	     	          $sql="select * from setting";
	     	     		    $result=mysqli_query($conn,$sql);
	     	     			 $datarow = mysqli_num_rows($result); //长度
	     	     			//循环遍历出数据表中的数据
	     	     			for($i=0;$i<$datarow;$i++){
	     	     							  $sql_arr = mysqli_fetch_assoc($result);
	     	     		
	     	     				$content = $sql_arr['conent'];
                                $name = $sql_arr['name'];
                                $statue = $sql_arr['statue'];
	     	     		       if($statue==="1"){
                                echo '<div class="layui-form-item">
                                <label class="layui-form-label">'.$content.'</label>
                                <div class="layui-input-block">
                                    <input type="checkbox" name="'.$name.'" lay-skin="switch" checked>
                                </div>
                            </div>';
                               }else{
                                echo '<div class="layui-form-item">
                                <label class="layui-form-label">'.$content.'</label>
                                <div class="layui-input-block">
                                    <input type="checkbox" name="'.$name.'" lay-skin="switch" >
                                </div>
                            </div>';
                               }
	     	               
	     	     				}
	     	     				?>





                    </br></br>
                    <input class="layui-btn" type="submit" value="提交" style="margin-left:110px;">

                </form>
            </div>
            <div class="layui-col-md4">&nbsp;</div>
        </div>
    </div>
</body>
<script>
//Demo
layui.use('form', function() {
    var form = layui.form;

    //提交
    form.on('submit(formDemo)', function(data) {
        layer.msg(JSON.stringify(data.field));

    });
});
</script>

</html>