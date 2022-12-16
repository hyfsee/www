
<?php

header("content-type:text/html;charset=utf-8;");
 include('../connect.php');
//设置客户端和连接字符集;
mysql_query("set names utf8");
//    获取到总页数
$ZongPage = mysql_query("select count(*) from story");
$sum = mysql_fetch_row($ZongPage);
$pageC = ceil($sum[0]/1);   //总条数
echo $pageC;
//关闭数据库资源
mysql_close($conn);
?>