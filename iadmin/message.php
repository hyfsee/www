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
<script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>
<title>信息修改页面</title>
<link rel="stylesheet" href="../index/layui/css/layui.css">
	<script src="../index/layui/layui.js"></script>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span class="c-gray en">&gt;</span> 页面信息修改 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	 <div class="layui-fluid" style="padding-top: 10px;">
	  <div class="layui-row">
	    <div class="layui-col-md1">&nbsp;</div>
	 	
	    <div class="layui-col-md8">
			<div class="f-14 c-error" style="margin-left: 110px;">备注说明：这个页面是用来修改首页的一些基本信息，用来做数据更新的</div></br></br>
	<form class="layui-form" action="test.php" method="post" enctype="multipart/form-data">
		<div class="layui-form-item">
			<?php
						      include('../config.php');
							   $sql="select * from message";
						        $result= mysqli_query($conn,$sql);
						         $datarow = mysqli_num_rows($result); //长度
						            //循环遍历出数据表中的数据
						            for($i=0;$i<$datarow;$i++){
										  $sql_arr = mysqli_fetch_assoc($result);
						                $name = $sql_arr['name'];
										$job = $sql_arr['job'];
										$address = $sql_arr['address'];
										$email = $sql_arr['email'];
										$wspeak = $sql_arr['wspeak'];
										$chickensoup = $sql_arr['chickensoup'];
										$user = $sql_arr['user'];
		
		 echo ' <label class="layui-form-label">网名：</label>
		 <div class="layui-input-block">
			<input type="text" name="name" required  lay-verify="required" placeholder="修改网名,当前为'.$name.'" autocomplete="off" class="layui-input">
		</div>
		</div>
		<div class="layui-form-item">
		<label class="layui-form-label">职业：</label>
		 <div class="layui-input-block">
			<input type="text" name="job" required  lay-verify="required" placeholder="修改职业，当前为'.$job.'" autocomplete="off" class="layui-input">
		</div>
		</div>
		<div class="layui-form-item">
		<label class="layui-form-label">地址：</label>
		 <div class="layui-input-block">
			<input type="text" name="address" required  lay-verify="required" placeholder="修改地址，当前为'.$address.'" autocomplete="off" class="layui-input">
		</div>
		</div>
		<div class="layui-form-item">
		<label class="layui-form-label">Email：</label>
		 <div class="layui-input-block">
			<input type="text" name="email" required  lay-verify="required" placeholder="修改Email，当前为'.$email.'" autocomplete="off" class="layui-input">
		</div>
		</div>
		<div class="layui-form-item">
		<label class="layui-form-label">今日说：</label>
		 <div class="layui-input-block">
			<input type="text" name="wspeak" required  lay-verify="required" placeholder="修改今日想说，当前为'.$wspeak.'" autocomplete="off" class="layui-input">
		</div>
		</div>
		<div class="layui-form-item">
		<label class="layui-form-label">毒鸡汤：</label>
		 <div class="layui-input-block">
			<input type="text" name="chickensoup" required  lay-verify="required" placeholder="修改毒鸡汤，当前为'.$chickensoup.'" autocomplete="off" class="layui-input">
		</div>
		</div>
			 <div class="layui-form-item">
			 <label class="layui-form-label">个人中心：</label>
			  <div class="layui-input-block">
			 	<input type="textarea" name="chickensoup" required  lay-verify="required" placeholder="修改个人中心，当前为'.$user.'" autocomplete="off" class="layui-input">
			 </div>
			 </div>	 
		'; }mysqli_close($conn);?>
	<input class="layui-btn" type="submit" value="提交" style="margin-left:110px;">
	 <button type="reset" class="layui-btn layui-btn-primary" >重置</button>
	</form>
	</div>
	 <div class="layui-col-md4">&nbsp;</div>
	 </div></div>
</body>
</html>