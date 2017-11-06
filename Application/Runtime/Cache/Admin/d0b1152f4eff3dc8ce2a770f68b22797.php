<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物业管理-弹框页面</title>
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
<style>
    p{ text-align: center}
</style>
<div style="background-color: white; width: 100%; text-align: center;">
    <div>
        <div class="span10 y_alert_out">
            <div class="y_activity_top">
                <p class="span2">物业详情</p>
            </div>
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p >编号：</p>
                    </div>
                    <div class="span7">
                        <p class="y_activity_title"><?php echo ($list['company_id']); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >公司名称：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list['company']); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >应缴费用：</p>
                    </div>
                    <div class="span7">
                        <p><input type="text" name="should"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >本次收费：</p>
                    </div>
                    <div class="span7">
                        <p><input type="text" name="paid"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >状态：</p>
                    </div>
                    <div class="span7">
                        <input type="radio" name="pay_state" checked >未付&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="pay_state" >已付
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >上次缴费时间：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($lsit["last_time"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >缴费周期：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["button"]); ?>/月</p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >单位地址：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($list["office"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>备注：</p>
                    </div>
                    <div class="span7">
                        <p><textarea name="remark"></textarea></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li class="last">
                    <div class="span2 y_activity_left">
                        <p></p>
                    </div>
                    <div class="span7">
                        <div class="y_activity_bottom">
                            <div><a href="" class="l_float btn_yes">确定</a></div>
                            <div><a href="" class="l_float btn_no">取消</a></div>
                        </div>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>记录：</p>
                    </div>
                    <div class="span7">
                        <?php if(is_array($log)): $i = 0; $__LIST__ = $log;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$log): $mod = ($i % 2 );++$i;?><p><?php echo ($log["createtime"]); ?>------>付款<?php echo ($log["getpay"]); ?>元&nbsp;&nbsp;&nbsp;&nbsp;备注：<?php echo ($log["remark"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
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