<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
	<p class="f-20 text-success">主人，今天也要开心<span class="f-14">︿(￣︶￣)︿</span>做一个快乐的小哥哥，嘿嘿</p>
	<p>登录次数：18 </p>
	<p>上次登录IP：<?php
                   echo $_SERVER['REMOTE_ADDR'];
                 ?>   上次登录时间：2014-6-14 11:19:55</p>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th colspan="7" scope="col">信息统计</th>
			</tr>
			<tr class="text-c">
				<th>统计</th>
				<th>文章总数</th>
				<th>登录次数</th>
				
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td>总数</td>
				<td>92</td>
				<td>9</td>
				
			</tr>
			<tr class="text-c">
				<td>今日</td>
				<td>0</td>
				<td>0</td>
				
			</tr>
			<tr class="text-c">
				<td>昨日</td>
				<td>0</td>
				<td>0</td>
				
			</tr>
			<tr class="text-c">
				<td>本周</td>
				<td>2</td>
				<td>0</td>
			
			</tr>
			<tr class="text-c">
				<td>本月</td>
				<td>2</td>
				<td>0</td>
				
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">服务器计算机名</th>
				<td><span id="lbServerName">阿里云服务器</span></td>
			</tr>
			<tr>
				<td>服务器IP地址</td>
				<td><?php
                   echo $_SERVER['REMOTE_ADDR'];
                 ?> 
</td>
			</tr>
			<tr>
				<td>服务器域名</td>
				<td><?php
                   echo $_SERVER['HTTP_HOST'];
                 ?> </td>
			</tr>
			<tr>
				<td>服务器端口 </td>
				<td>80</td>
			</tr>
			<tr>
				<td>本文件所在文件夹 </td>
				<td><?php 
                   echo dirname(__FILE__); // 取得当前文件所在的绝对目录，结果：D:\www\ 
                    ?>
                  </td>
			</tr>
			<tr>
				<td>服务器操作系统 </td>
				<td><?PHP echo PHP_OS; ?></td>
			</tr>
			<tr>
				<td>服务器的语言种类 </td>
				<td>PHP</td>
			</tr>
			<tr>
				<td>服务器当前时间 </td>
				<td><?php
                     echo '<script>
    function f() {
       var d=new Date();
       var t=d.toLocaleTimeString();
       var dt=d.toLocaleDateString();
       document.getElementById("time").innerHTML=dt+t;
    }
    setInterval(f,1000);
</script>
<div id="time"><div>'?></td>
			</tr>
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>没有勇士天生势不可挡，只有势单力薄想要一往直前，，这个世界很好，就这样！<br>
			Copyright &copy;2018-2019 后台管理admin v0.1 All Rights Reserved.<br>
			本后台系统由<a href="http://www.huhuto.net.cn/" target="_blank" title="后台框架">麻辣香蕉船</a> 提供技术支持</p>
	</div>
</footer>
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script> 
</body>
</html>