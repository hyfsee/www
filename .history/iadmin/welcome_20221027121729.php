<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="static/admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="static/admin/skin/default/skin.css" id="skin" />
    <title>我的桌面</title>
</head>

<body>
    <div class="page-container" style="padding:10px">
        <p class="f-20 text-success" style="font-family:'楷体';font-weight:600">
            <?php
				   include('../config.php');
				   $num=rand(1, 9);
				   $date_array = getdate();
				   $welcome='';
				   if($date_array['hours']>=11  and $date_array['hours']<13)
					$welcome='中午好';
				   if($date_array['hours']>=13 and $date_array['hours']<18)
					$welcome='下午好';
				   if($date_array['hours']>=18 and $date_array['hours']<23)
					$welcome='晚上好';
					if($date_array['hours']>0 and $date_array['hours']<11)
					$welcome='上午好';
				    $sql = 'select * from welcome where id='.$num.'';
				    $result= mysqli_query($conn,$sql);
				    $sql_arr = mysqli_fetch_assoc($result);
				    $content = $sql_arr["content"];
				   if (!$result) {
					printf("Error: %s\n", mysqli_error($conn));
					exit();
				      }
				   echo ''.$welcome.','.$content.''; 
				   $conn->close();?>

        </p>
        <p>登录次数：18 </p>
        <?php
				   include('../config.php');
				   $date= date("Y-m-d");
				   $ip= $_SERVER["REMOTE_ADDR"];
				   $sql = "select * from log";
				   $result= mysqli_query($conn,$sql);
				 
				   $datarow = mysqli_num_rows($result); //长度
				   //循环遍历出数据表中的数据
				   for($i=0;$i<$datarow;$i++){
					 $sql_arr = mysqli_fetch_assoc($result);
			   
					   $ip = $sql_arr['ip'];
					   $date=$sql_arr['date'];
				 
				   echo '<p>上次登录IP：'.$ip.'&nbsp;&nbsp;&nbsp;&nbsp;上次登录时间：'.$date.'</p>'; 
				   } $conn->close();?>

        <?php

header("Content-type:text/html;charset=utf-8");

// 作用获取客户端的ip、地理信息、浏览器、本地真实IP
class get_gust_info { 
       
    //获得访客浏览器类型
    function GetBrowser(){
        if(!empty($_SERVER['HTTP_USER_AGENT'])) {
            $br = $_SERVER['HTTP_USER_AGENT'];
            if (preg_match('/MSIE/i',$br)) {    
                $br = 'MSIE';
            }elseif (preg_match('/Firefox/i',$br)) {
                $br = 'Firefox';
            }elseif (preg_match('/Chrome/i',$br)) {
                $br = 'Chrome';
            }elseif (preg_match('/Safari/i',$br)) {
                $br = 'Safari';
            }elseif (preg_match('/Opera/i',$br)) {
                $br = 'Opera';
            }elseif (preg_match('/QQBrowser/i',$br)) {
                $br = 'QQBrowser';
            }elseif (preg_match('/UCBrowser/i',$br)) {
                $br = 'UCBrowser';
            }else {
                $br = 'Other';
            }
            return $br;
        }else {
            return false;
        }
    }

    //获得访客浏览器语言
    function GetLang() {
        if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
            $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
            $lang = substr($lang,0,5);
            if(preg_match("/zh-cn/i",$lang)) {
                $lang = "简体中文";
            }elseif(preg_match("/zh/i",$lang)) {
                $lang = "繁体中文";
            }else{
                $lang = "English";
            }
            return $lang;
        }else {
            return false;
        }
    }

    //获取访客操作系统
    function GetOs(){
        if(!empty($_SERVER['HTTP_USER_AGENT'])) {
            $OS = $_SERVER['HTTP_USER_AGENT'];
            if (strpos($OS, 'Android') !== false) {//strpos()定位出第一次出现字符串的位置，这里定位为0  
                preg_match("/(?<=Android )[\d\.]{1,}/", $OS, $version);  
                $OS ='Android '.$version[0];
            }elseif (strpos($OS, 'iPhone') !== false) {  
                preg_match("/(?<=CPU iPhone OS )[\d\_]{1,}/", $OS, $version);  
                $OS = 'iPhone iOS '.str_replace('_', '.', $version[0]);  
            }elseif (strpos($OS, 'iPad') !== false) {  
                preg_match("/(?<=CPU OS )[\d\_]{1,}/", $OS, $version);  
                $OS = 'iPad iOS '.str_replace('_', '.', $version[0]);   
            }elseif (preg_match('/win/i',$OS)) {
                $OS = 'Windows';
            }elseif (preg_match('/mac/i',$OS)) {
                $OS = 'MAC';
            }elseif (preg_match('/linux/i',$OS)) {
                $OS = 'Linux';
            }elseif (preg_match('/unix/i',$OS)) {
                $OS = 'Unix';
            }elseif (preg_match('/bsd/i',$OS)) {
                $OS = 'BSD';
            }else {
                $OS = 'Other';
            }
            return $OS;  
        }else {
            return false;
        }   
    }

    //获得访客真实ip
    function Getip() {
        $ip = false;
        if (getenv("HTTP_CLIENT_IP")) {
            $ip = getenv("HTTP_CLIENT_IP");
        }elseif (getenv("HTTP_X_FORWARDED_FOR")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        }elseif (getenv("REMOTE_ADDR")) {
            $ip = getenv("REMOTE_ADDR");
        }
        return $ip;
    }

    //根据ip获得访客所在地地名
    function Getaddress($ip='') {
        if(empty($ip)) {
            $ip = $this->Getip();    
        }
        $ipadd = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?ip=".$ip);//根据新浪api接口获取
        if($ipadd) {
            $charset = iconv("gbk","utf-8",$ipadd);   
            preg_match_all("/[\x{4e00}-\x{9fa5}]+/u",$charset,$ipadds);
         
            return $ipadds;   //返回一个二维数组
        }else {
            return "address is none";
        }  
    }

}

$gifo = new get_gust_info();

echo "浏览器类型：".$gifo->GetBrowser().'<br>';
echo "浏览器语言：".$gifo->GetLang().'<br>';
echo "操作系统：".$gifo->GetOs().'<br>';
echo "你的ip：".$gifo->getIP().'<br>';
echo "所在地：";
$address = $gifo->Getaddress($gifo->getIP());
foreach ($address[0] as $key) {
    echo $key.' ';
}

?>


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
                    <td>0</td>
                    <td>0</td>

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
                    <td>0</td>
                    <td>0</td>

                </tr>
                <tr class="text-c">
                    <td>本月</td>
                    <td>0</td>
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
                    <td>
                        <?PHP echo PHP_OS; ?>
                    </td>
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
       document.getElementById("time").innerHTML=dt+" "+t;
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
                本后台系统由<a href="http://www.huhuto.net.cn/" target="_blank" title="后台框架">huhuto</a> 提供技术支持</p>
        </div>
    </footer>
    <script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
</body>

</html>