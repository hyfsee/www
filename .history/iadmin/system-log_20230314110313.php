<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <title>系统日志</title>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
        <span class="c-gray en">&gt;</span>
        系统管理
        <span class="c-gray en">&gt;</span>
        系统日志
        <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
            href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
    </nav>
    <div class="page-container">
        <div class="text-c"> 日期范围：
            <!-- <input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin"
                class="input-text Wdate" style="width:120px;">
            -
            <input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })"
                id="logmax" class="input-text Wdate" style="width:120px;"> -->
            <input type="text" name="" id="" placeholder="日志名称" style="width:250px" class="input-text">
            <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i>
                搜日志</button>
        </div>
        <div class="cl pd-5 bg-1 bk-gray mt-20">

            <span class="r">共有数据：<strong id="num">2</strong> 条</span>
        </div>
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
                <tr class="text-c">
                    <th width="80">序号</th>
                    <th>内容</th>
                    <th width="120">客户端IP</th>
                    <th width="120">时间</th>

                </tr>
            </thead>
            <tbody>

                <?php
				   include('../config.php');
				  
				   $sql = "select * from log order by date desc";
				   $result= mysqli_query($conn,$sql);
				
				   $datarow = mysqli_num_rows($result); //长度
                   echo '<script>$("#num").html('.$datarow.')</script>';
				   //循环遍历出数据表中的数据
				   for($i=0;$i<$datarow;$i++){
					 $sql_arr = mysqli_fetch_assoc($result);
			           $id = $sql_arr['id'];
					   $ip = $sql_arr['ip'];
					   $date=$sql_arr['date'];
                       $content=$sql_arr['content'];
				   echo '<tr class="text-c">
					   <td>'.$id.'</td>
					   <td>'.$content.'</td>
					   <td>'.$ip.'</td>
					   <td>'.$date.'</td>
					  </tr>';
					   }
			         $conn->close();
							
				?>

            </tbody>
        </table>
        <div id="pageNav" class="pageNav"></div>
    </div>
    <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.js"></script>
    <!--/_footer 作为公共模版分离出去-->

    <!--请在下方写此页面业务相关的脚本-->
    <script type="text/javascript" src="lib/My97DatePicker/4.8/WdatePicker.js"></script>
    <script type="text/javascript" src="lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
    <script type="text/javascript">
    $('.table-sort').dataTable({
        "lengthMenu": false, //显示数量选择 
        "bFilter": false, //过滤功能
        "bPaginate": false, //翻页信息
        "bInfo": false, //数量信息
        "aaSorting": [
            [1, "desc"]
        ], //默认第几个排序
        "bStateSave": true, //状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {
                "orderable": false,
                "aTargets": [0, 7]
            } // 制定列不参与排序
        ]
    });

    /*查看日志*/
    function system_log_show() {

    }
    /*日志-删除*/
    function system_log_del(obj, id) {
        layer.confirm('确认要删除吗？', function(index) {
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data) {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {
                        icon: 1,
                        time: 1000
                    });
                },
                error: function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    </script>
</body>

</html>