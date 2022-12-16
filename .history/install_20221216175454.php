<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;
 charset=utf-8" />

    <title>php安装小程序</title>

</head>

<body>

    <?php  

 if($_GET['action']!=1){
   ?>

    <form action="install.php?action=1" method="post">

        主机地址：<input type="text" name="host" value="localhost"><br>

        用户名:<input type="text" name="username" value="root"><br>

        密码:<input type="password" name="password" value="huhuto3344"><br>

        新建表名<input type="text" name="table" value="huhuto"><br>

        提交<input type="submit" name="sub" value="提交" />

    </form>

    <?php
}else {  

  $lockfile=
"install.lock";   

  if($_POST['host']!=""&&
$_POST['username']!=""&&
$_POST['password']!=""
 && $_POST['table']!="")  
  {  

   $localhost=$_POST['host'];   

   $username=$_POST['username'];  

   $password=$_POST['password'];  

   $db=$_POST['table'];   

  }  

  if(file_exists($lockfile)){   

  exit("已经安装过了，如果要重新安装请先删除install.lock");   

  }  

  $conn=mysqli_connect($localhost,$username,$password,$db);  

  if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

  echo "连接成功";
  mysqli_select_db($conn,"huhuto");

   $sql_create_table_message="CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wspeak` varchar(255) NOT NULL,
  `chickensoup` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1";   
   
   $sql_create_table_story="CREATE TABLE IF NOT EXISTS `story` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `auther` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `pageviews` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1"; 

    $sql_create_table_timeline="CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,
  `contens` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1"; 

   $sql_create_table_log="CREATE TABLE IF NOT EXISTS `log` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `ip` varchar(255) NOT NULL,
    `date` dateTime NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1"; 


$sql_create_table_setting="CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `statue` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1"; 


     if ($conn->query($sql_create_table_message) === TRUE) {
      echo "message表创建成功\n";
  } else {
      echo "创建message表错误: " . $conn->error;
  }
 
  
  if ($conn->query($sql_create_table_story) === TRUE) {
    echo "story表创建成功\n";
} else {
    echo "创建story表错误: " . $conn->error;
}

if ($conn->query($sql_create_table_timeline) === TRUE) {
  echo "时间线表创建成功\n";
} else {
  echo "创建时间线表错误: " . $conn->error;
}
if ($conn->query($sql_create_table_log) === TRUE) {
  echo "日志表创建成功\n";
} else {
  echo "创建日志表错误: " . $conn->error;
}
if ($conn->query($sql_create_table_private) === TRUE) {
  echo "隐私表创建成功\n";
} else {
  echo "创建隐私表错误: " . $conn->error;
}
if ($conn->query($sql_create_table_setting) === TRUE) {
  echo "设置表创建成功\n";
} else {
  echo "创建隐私表错误: " . $conn->error;
}


  $config_file="config.php";   

  $config_strings="<?php\n";   

  $config_strings.="\$localhost=\"".$localhost."\";\n";   

  $config_strings.="\$username=\"".$username."\";\n";   

  $config_strings.="\$password=\"".$password."\";\n";   

  $config_strings.="\$db=\"".$db."\";\n";   

  $config_strings.="\$conn=mysqli_connect(\$localhost,\$username,\$password,\$db);\n";
  
 
  $config_strings.="?>";


    $fp=fopen($config_file,"wb");

    fwrite($fp,$config_strings);

    fclose($fp);

    $fp2=
    fopen($lockfile,'w');

    fwrite($fp2,'处理成功，你的数据库已经生成了');

    fclose($fp2);

    }

    ?>

</body>

</html>