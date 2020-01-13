<?php
$p = $_REQUEST["curr"];//获取当前页
if($p<1)$p=1;
$limits = 2;//每页显示几条
$rc=$pd->query("select count(*) from sys_member where 1=1 ".$s_where)-fetchColumn(0);//查询总条数
$allpage = intval(ceil($rc / $limits));    //计算总共几页
$sql="select * from "表名" limit ".(($p-1)*$limits).",".$limits;
$datalist = $pd->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$arr["list"]=$datalist;    //数据集
$arr["allpage"]= $allpage;    //总共几页
$arr["curr"]= $p;    //当前页
echo json_encode($arr);
break;
?>