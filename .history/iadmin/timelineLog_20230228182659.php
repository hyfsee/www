<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" type="text/css" href="/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
    <title>胡言碎语管理</title>
</head>

<body>
    <div class="page-container" style="padding:10px">





        <!-- <table id="demo" lay-filter="test"></table> -->


        <table class="table table-border table-bordered table-bg">
            <thead>
                <tr>
                    <th colspan="9" scope="col">日志统计</th>
                </tr>
                <tr class="text-c">
                    <th>序号</th>
                    <th>时间线标题</th>
                    <th>日志时间</th>
                    <th>日志内容</th>

                    <th>操作</th>
                </tr>
            </thead>
            <tbody>

                <?php
				   include('../config.php');
				   $date= date("Y-m-d");
				   $ip= $_SERVER["REMOTE_ADDR"];
				   $sql = "select * from timeline";
				   $result= mysqli_query($conn,$sql);
				 
				   $datarow = mysqli_num_rows($result); //长度
				   //循环遍历出数据表中的数据
				   for($i=0;$i<$datarow;$i++){
					 $sql_arr = mysqli_fetch_assoc($result);
					   $id = $sql_arr['Id'];
					   $title = $sql_arr['content'];
					   $date=$sql_arr['date'];
					 
                       $contents=$sql_arr['contents'];
				      

                        echo '<tr class="text-c" ><td style="color:green">'.($i+1).'</td>
                        <td style="color:green">'.$title.'</td>
                        <td style="color:green">'.$date.'</td>
                        <td style="color:green">'.$contents.'</td>
                      
                        <td ><a  style="color:red" href="./result/deleteTimeline.php?id='.$id.'">删除</a></td></tr>';

					   }
						 $conn->close();?>


            </tbody>
        </table>

    </div>
    <footer class="footer mt-20">
        <div class="container">
            <p>没有勇士天生势不可挡，只有势单力薄想要一往直前，，这个世界很好，就这样！<br>
                Copyright &copy;2018-2019 后台管理admin v0.1.1.2 All Rights Reserved.<br>
                本后台系统由<a href="http://www.huhuto.net.cn/" target="_blank" title="后台框架">huhuto</a> 提供技术支持</p>
        </div>
    </footer>
    <script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/js/layui.js"></script>
    <script>

    </script>
</body>

</html>