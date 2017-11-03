<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>活动审核-弹框页面</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!--开始  全部的  强制的  样式-->
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!--结束  全部的  强制的  样式-->
    <!--    我的css   开始-->
    <link rel="stylesheet" href="/Public/Admin/css1/common.css">
    <link rel="stylesheet" href="/Public/Admin/css1/content.css">
    <link rel="stylesheet" href="/Public/Admin/css1/audit.css">
    <!--    我的css   结束-->
</head>
<body>
<div style="background-color: white; width: 100%;">
    <div>
        <div class="span10 y_alert_out">
            <div class="y_activity_top">
                <p class="span2">活动详情</p>
            </div>
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p >主题：</p>
                    </div>
                    <div class="span7">
                        <p class="y_activity_title"><?php echo ($list["title"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >主办方：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["sponsor"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >类型：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["type"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >人数：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["number"]); ?>人</p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >地点：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["adderss"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >报名起止时间：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["join_start"]); ?>—— <?php echo ($list["join_end"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >活动起止时间：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["act_start"]); ?>——<?php echo ($list["act_end"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <div class="span2 y_activity_left">
                    <p>图片：</p>
                </div>
                <div class="span7">
                    <p>
                        <img src="<?php echo ($list["list_img"]); ?>" alt="">
                    </p>
                </div>
                <li>
                    <div class="span2 y_activity_left">
                        <p>摘要：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["description"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>活动详情：</p>
                    </div>
                    <div class="span7">
                        <?php echo ($list["content"]); ?>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>

                    <div style="clear: both"></div>
                </li>
            </ul>
        </div>
    </div>

</div>

</body>
<!-- 开始  核心  插件-->
<script src="/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Public/Admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/Public/Admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/Public/Admin/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="/Public/Admin/js/excanvas.min.js"></script>
<script src="/Public/Admin/js/respond.min.js"></script>
<![endif]-->
<script src="/Public/Admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Public/Admin/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/Admin/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/Public/Admin/js/jquery.uniform.min.js" type="text/javascript"></script>
<!--   结束  核心  插件  -->
</html>