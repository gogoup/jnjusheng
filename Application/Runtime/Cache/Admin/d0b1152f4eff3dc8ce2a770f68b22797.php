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
    p{ margin-left: 10%}
</style>
<div style="background-color: white; width: 100%; ">
    <div>
        <form action="editpaid" method="post" >
        <div class="span10 y_alert_out">
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p >公司编号：<input type="text"  name="company_id" value="<?php echo ($list['company_id']); ?>"  readonly  unselectable="on"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >公司名称：<input type="text" value="<?php echo ($list['company']); ?>"  readonly  unselectable="on"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >应缴费用：<input type="text" name="should" value="物业：<?php echo ($list['property_fee']); ?>  || 房租：<?php echo ($list['rent']); ?>" readonly></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >本次收费：<input type="text" name="paid"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >状&nbsp;&nbsp;&nbsp;&nbsp;态：
                        <input type="radio" name="pay_state" value="1" checked >未结清&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="pay_state" value="2">已结清
                        </p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >上次缴费时间：<input type="text" value="<?php echo ($list["last_time"]); ?>"  readonly  unselectable="on"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >缴费周期：<input type="text" value="<?php echo ($list["button"]); ?>/月"  readonly  unselectable="on"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >单位地址：<input type="text" value="<?php echo ($list["office"]); ?>"  readonly  unselectable="on"></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>备注：</p>
                    </div>
                    <div class="span7">
                        <p><textarea name="remark" style="width: 90%"></textarea></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li class="last">
                    <div class="span2 y_activity_left">
                        <p></p>
                    </div>
                    <div class="span7"  style="margin-left: 10%">
                        <div class="y_activity_bottom" >
                            <div><button type="submit" class="l_float btn_yes">确定</button></div>
                            <div><button type="reset" class="l_float btn_no">取消</button></div>
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
        </form>
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