<?php
header("Content-Type: text/html; charset=utf-8");
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
&& in_array($extension, $allowedExts))
{
	if ($_FILES["file"]["error"] > 0)
	{
		echo "错误：: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
		echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
		echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
		
		// 判断当期目录下的 upload 目录是否存在该文件
		// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
		if (file_exists("../index/upload/" . $_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"] . " 文件已经存在。 ";
		}
		else
		{
			// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
			move_uploaded_file($_FILES["file"]["tmp_name"], "../index/upload/" . $_FILES["file"]["name"]);
			echo "文件存储在: " . "../index/upload/" . $_FILES["file"]["name"];
		}
	}
}
else
{
	echo "非法的文件格式";
}
@ $title=$_POST['title'];//post获取表单里的标题
@ $type=$_POST['type'];//post获取表单里的类型
@ $date=$_POST['date'];
@ $content=$_POST['content'];
@ $auther=$_POST['auther'];
@ $product=$_POST['product'];
@ $collectionname=$_POST['collectionname'];
@ $collection=$_POST['collection'];
@ $pageviews=$_POST['pageviews'];
@ $picture=$_FILES["file"]["name"];
include('../config.php');

 			 $sql="insert into story(Id,title,auther,picture,type,date,product,content,pageviews,collectionname,collection) values (null,'$title','$auther','$picture','$type','$date','$product','$content','$pageviews','$collectionname','$collection')";//向数据库插入表单传来的值的sql
 			 $reslut=mysqli_query($conn,$sql);//执行sql
		     if($reslut){
				echo '发布成功,<a href="../uploadfile/index.html">再写一篇</a>';
			 }else{
				die '发布失败'
			 }
 
 mysqli_close($conn);//关闭数据库
?>