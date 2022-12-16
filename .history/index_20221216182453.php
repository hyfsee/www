<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>优乐堂社区</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/zxmk.css" rel="stylesheet" type="text/css" />
    <script src="js/core.js" type="text/javascript"></script>
    <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
    <?php
		   
		
           include('../config.php');


           $sql1="select * from setting where name='wzzh'";
           $result1=mysqli_query($conn,$sql1);
           $datas1=mysqli_num_rows($result1);
        
            $sql_arr = mysqli_fetch_assoc($result1);
                         
           $statue = $sql_arr['statue'];
              
         
           $state= $statue;
           $file="public/header.html";   
          if($state==="1"){
                         $fp=fopen( $file,'ab');
                         $fp.fseek($file,7);
            fwrite($fp,'html {
                filter: progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);
                -webkit-filter: grayscale(100%);
                -moz-filter: grayscale(100%);
                -ms-filter: grayscale(100%);
                -o-filter: grayscale(100%);
                filter: grayscale(100%);
              }');

            fclose($fp);

                           }else{



                           }
                       
                       
                       
                       mysqli_close($conn);
           
 
       
?>


    <?php  

$lockfile="install.lock";  

if(!file_exists($lockfile)){   

    echo '<script>setTimeout(function(){window.location.href="./install.php"},10)
</script>';

}


?>
    <div class="index-con" style="z-index: 0">
        <ul>
            <li class="in-kct in-course"> <a href="" title="视频">
                    <div class="in-block"> <i class="bigger"></i> <span class="ch show"
                            style="display: block;">视频</span> <i class="in-none"></i> <span class="in-text"
                            style="display: none;">
                            <p><B>保存</b>&nbsp;&nbsp;优质好视频</p>

                        </span> </div>
                </a> </li>
            <li class="in-kct in-quest"> <a href="" title="文档">
                    <div class="in-block"> <i class=""></i> <span class="ch" style="display: inline;">文档</span> <i
                            class="in-none"></i> <span class="in-text" style="display: none; width: 280px; left: 30px">
                            <p>会分享一些操作文档</p>
                            <p>也是想保存记录一下，方便回顾</p>
                        </span> </div>
                </a> </li>
            <li class="in-jbk in-plan"> <a href="" title="时间线">
                    <div class="in-block"> <i style="display: block;"></i> <span style="display: inline;">时间线</span> <i
                            class="in-none toLeft1" style="display: none;"></i> <span class="in-text"
                            style="display: none;">
                            <p>我的吐槽</p>
                            <p>还有我的生活</p>
                        </span> </div>
                </a> </li>
            <li class="in-jbk in-report"> <a href="" title="源码分享">
                    <div class="in-block"> <i style="display: block;"></i> <span style="display: inline;">源码分享</span> <i
                            class="in-none toLeft2" style="display: none;"></i> <span class="in-text"
                            style="display: none;">
                            <p>日常用到的</p>
                            <p>适合纠错记录</p>
                        </span> </div>
                </a> </li>
            <li class="in-zxl in-forma"> <a href="index/index.php" title="进入主页">
                    <div class="in-block"> <i style="display: block;"></i> <span style="display: inline;">进入主页</span> <i
                            class="in-none toLeft0 toLeft4" style="display: none;"></i> <span class="in-text"
                            style="display: none;">
                            <p>欢迎光临，大人里边请！</p>

                        </span> </div>
                </a> </li>
            <li class="in-zxl in-means"> <a href="" title="资料">
                    <div class="in-block"> <i></i> <span>素材</span> <i class="in-none"></i> <span class="in-text">
                            <p>资料、常用软件</p>
                            <p>正在拥有</p>
                        </span> </div>
                </a> </li>
            <li class="in-jbk in-client"> <a href="" target="_blank" title="留言社区">
                    <div class="in-block"> <i></i> <span>留言社区</span> <i class="in-none"></i> <span class="in-text">
                            <p>给我留言</p>
                            <p>让我知道你来过</p>
                        </span> </div>
                </a> </li>
        </ul>
    </div>
    <script>
    seajs.use('jquery', function($) {
        $(function() {
            //
            $(".index-con .in-kct").hover(function() {
                $(this).find('i:first').addClass('smaller').removeClass('bigger')
                $(this).find('span:first').fadeOut('')
                $(this).find('.in-text').show('fast').addClass('show')
                $(this).find('.ch').removeClass('')
            }, function() {
                $(this).find('i:first').removeClass('smaller').addClass('bigger')
                $(this).find('span:first').fadeIn('')
                $(this).find('.in-text').hide('').removeClass('fast')
                $(this).find('.ch').addClass('show')
            })
            $(".index-con .in-jbk").hover(function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').hide('')
                $(this).find('.in-text').show('').addClass('show')
                var num = $(this).index('.in-jbk') + 1;
                $(this).find('.in-none').show('').addClass('toLeft' + num).removeClass(
                    'toRight' + num)
                $(this).find('.ch1').removeClass('show')
            }, function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').fadeIn('')
                $(this).find('.in-text').hide('').removeClass('show')
                var num = $(this).index('.in-jbk') + 1;
                $(this).find('.in-none').show().addClass('toRight' + num).removeClass('toLeft' +
                    num)
                $(this).find('.ch1').addClass('show')
            })
            $(".index-con .in-zxl").hover(function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').hide('')
                $(this).find('.in-text').show().addClass('show')
                var nums = $(this).index('.in-zxl') + 1;
                $(this).find('.in-none').show().addClass('toLeft4').removeClass('toRight4')
                $(this).find('.ch2').removeClass('show')
            }, function() {
                $(this).find('i:first').addClass('hide')
                $(this).find('span:first').fadeIn('fast')
                $(this).find('.in-text').hide().removeClass('show')
                $(this).find('.in-none').show().addClass('toRight4').removeClass('toLeft4')
                $(this).find('.ch2').addClass('show')
            });
        });
    })
    </script>
    <div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
        <p>欢迎来到优乐堂社区，此页面使用了九宫格，有需要的同学，可以点击链接下载，不用感谢我，附上下载地址</p>
        <p>来源：<a href="file/file.rar" target="_blank" style="font-size：20px;color:#fff;">点我下载吧ヾ(≧O≦)〃</a></p>
        <p>永远相信美好的事情即将发生！！！</p>
    </div>
</body>


</html>