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
  `state` int(11) NOT NULL,
  `collection` int(11) NOT NULL,
  `ranking` int(11) NOT NULL,
  `collectionname` varchar(255) ,
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



$sql_create_table_welcome="CREATE TABLE IF NOT EXISTS `welcome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL,

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

if ($conn->query($sql_create_table_setting) === TRUE) {
  echo "设置表创建成功\n";
} else {
  echo "创建设置表错误: " . $conn->error;
}

if ($conn->query($sql_create_table_welcome) === TRUE) {
  echo "欢迎语表创建成功\n";
} else {
  echo "创建欢迎语表错误: " . $conn->error;
}



//默认加载数据

INSERT INTO `welcome` VALUES ('1', '主人，你要相信，人活着总会有不一样的事情发生，但如果你放弃了，就只能是一赔黄土，无人问津！');
INSERT INTO `welcome` VALUES ('2', '主人，人活着总要有期待，不然活着的意义在哪里？');
INSERT INTO `welcome` VALUES ('3', '主人，努力做一个可爱的人。不埋怨谁,不嘲笑谁,也不羡慕谁,阳 光下灿烂,风雨中奔跑,做自己的梦,走自己的路。');
INSERT INTO `welcome` VALUES ('4', '主人，走远了再回头看，很多人已经淡忘，只有很少的人牵连着我们的幸福与快乐，这才是我们真正要珍惜的地方');
INSERT INTO `welcome` VALUES ('5', '主人，人生，无需繁华，只需平淡就够了，痛而不言是一种智慧，笑而不语是一种豁达。只有品味了痛苦，才能珍视曾经忽略的快乐；没有痛苦，生活的盛宴就淡了原味；没有平凡，人生的画卷就浅了底色。');
INSERT INTO `welcome` VALUES ('6', '主人，我一直想要，和你一起，走上那条美丽的小路。有柔风，有白云，有你在我身旁，倾听我快乐和感激的心。');
INSERT INTO `welcome` VALUES ('7', '主人，一万个美丽的未来，抵不上一个温暖的现在；每一个真实的现在，都是我们曾经幻想的未来，愿你爱上现在，梦见未来。');
INSERT INTO `welcome` VALUES ('8', '主人，有些人是注定一个人要前行一阵子的，不必眼疾心快，不必忙于羡慕他人的群体友谊。');
INSERT INTO `welcome` VALUES ('9', '主人，无论做什么，请记住都是为你自己而做，这样就毫无怨言！今天，我为自己而活！今天，又是美丽的一天！');






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