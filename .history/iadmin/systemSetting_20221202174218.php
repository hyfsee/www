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
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
    <script src="https://cdn.staticfile.org/vue/2.2.2/vue.min.js"></script>
    <title>系统设置</title>
    <link rel="stylesheet" href="../index/layui/css/layui.css">
    <script src="../index/layui/layui.js"></script>
</head>

<body>
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 系统设置 <span
            class="c-gray en">&gt;</span> 系统设置修改 <a class="btn btn-success radius r"
            style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i
                class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="layui-fluid" style="padding-top: 10px;">
        <div class="layui-row">
            <div class="layui-col-md1">&nbsp;</div>

            <div class="layui-col-md8">
                <div class="f-14 c-error" style="margin-left: 110px;">注：此功能会调整系统显示及效果，请谨慎调整！！！</div></br></br>
                <form class="layui-form" action="jours.php" method="post" enctype="multipart/form-data">
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题：</label>
                        <div class="layui-input-block">
                            <input type="text" name="content" required lay-verify="required" placeholder="请输入日志标题"
                                autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">网站置灰</label>
                        <div class="layui-input-block">
                            <input type="checkbox" name="switch" lay-skin="switch">
                        </div>
                    </div>






                    <div class="layui-form-item">
                        <label class="layui-form-label">详情：</label>
                        <div class="layui-input-block">
                            <textarea type="text" name="contents" required lay-verify="required" placeholder="请输入日志详情"
                                autocomplete="off" class="layui-textarea"></textarea>
                        </div>
                    </div>

                    </br></br>
                    <input class="layui-btn" type="submit" value="提交" style="margin-left:110px;">
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </form>
            </div>
            <div class="layui-col-md4">&nbsp;</div>
        </div>
    </div>
</body>

</html>