<style>
<?php include('../config.php');


$sql1="select * from setting where name='wzzh'";
$result1=mysqli_query($conn, $sql1);
$datas1=mysqli_num_rows($result1);

$sql_arr=mysqli_fetch_assoc($result1);

$statue=$sql_arr['statue'];


$state=$statue;


if($state==="1") {
    echo 'html {
filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    filter: grayscale(100%);
}

';



}

else {}



mysqli_close($conn);



?>
</style>
<div class="headers"></div>
<ul class="layui-nav" class="layui-bg-cyan">
    <li class="layui-nav-item  layui-col-md-offset2">
        <h3><img src="../index/img/logo.png" width="150px" height="50px" style="padding:20px 40px" ;></h3>
    </li>
    <li class="layui-nav-item layui-col-xs-offset-1 layui-col-md-offset1 "><a href="../index/index.php">我的首页</a></li>
    <li class="layui-nav-item layui-col-xs-offset-1 "><a href="../record/timeline.php">HU言碎语</a></li>
    <li class="layui-nav-item"><a href="../index/indexs.php?type='资源共享'">资源共享</a></li>
    <li class="layui-nav-item">
        <a href="../index/indexs.php?type='我的故事'">我的故事</a>

    </li>
    <li class="layui-nav-item"><a href="../index/indexs.php?type='工具推荐'">工具推荐</a></li>
    <li class="layui-nav-item"><a href="../about">关于本人</a></li>
    <!-- 添加一个背景音乐 -->
    <!--   <audio autoplay="autoplay"><source src="audio/2.mp3" /></audio> -->
</ul>

<!-- <script src="https://eqcn.ajz.miesnfu.com/wp-content/plugins/wp-3d-pony/live2dw/lib/L2Dwidget.min.js"></script>
<script type="text/javascript" charset="utf-8" src="https://files.cnblogs.com/files/liuzhou1/L2Dwidget.0.min.js">
</script>
<script type="text/javascript" charset="utf-8" src="https://files.cnblogs.com/files/liuzhou1/L2Dwidget.min.js"></script>
<script type="text/javascript">
L2Dwidget.init({
    "display": {
        "superSample": 2,
        "width": 100,
        "height": 150,
        "position": "left",
        "hOffset": 0,
        "vOffset": 3
    }
});
</script> -->