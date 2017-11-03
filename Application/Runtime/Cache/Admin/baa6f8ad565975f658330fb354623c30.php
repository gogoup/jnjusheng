<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>公司信息审核-弹框页面</title>
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
            <div class="y_activity_top"><p class="span2">企业信息详情</p></div>
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p >企业编号：</p>
                    </div>
                    <div class="span7">
                        <p class="y_activity_title"><?php echo ($company["user_id"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >用户名：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["user_name"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >公司名称：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["company"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >机构代码：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["company_card"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >法人代表：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["legal_person"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >公司成立时间：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["founding_time"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >注册资金：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["registered_fund"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>单位性质：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["nature_of_unit"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>机构类型：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["institutional"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>办公电话：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["work_tel"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系部门：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["department"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系人：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["contacts"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系电话：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["contacts_tel"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系邮箱：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["contents_email"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>办公地址：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($company["company_add"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>公司简介：</p>
                    </div>
                    <div class="span7" id="content">
                        <?php echo ($one); ?>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>营业执照：</p>
                    </div>
                    <div class="span7">
                        <p>
                            <img src="<?php echo ($company["company_img"]); ?>" alt="">
                        </p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li class="last">

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