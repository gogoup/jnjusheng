<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Admin Dashboard Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/Public/Admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="shortcut icon" href="/Public/Admin/image/favicon.ico"/>
<!-- BEGIN PAGE LEVEL STYLES -->

<link rel="stylesheet" type="text/css" href="/Public/Admin/css/select2_metro.css" />

<link rel="stylesheet" href="/Public/Admin/css/DT_bootstrap.css" />
<link rel="stylesheet" href="/Public/Admin/css/common.css" />

<?php if(CONTROLLER_NAME == 'Publish'): ?><!--引用textarea，设置文字字体样式-->
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/chosen.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/select2_metro.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/daterangepicker.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/multi-select-metro.css" />
    <link href="/Public/Admin/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <!-- 引用textarea，设置文字字体样式  结束 --><?php endif; ?>

    <!-- END PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="Y-publish-news.html">
                <img src="/Public/Admin/image/logo.png" alt="logo"/>
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="/Public/Admin/image/menu-toggler.png" alt=""/>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">

                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="/Public/Admin/image/avatar1_small.jpg"/>
                        <span class="username"><?php echo ($adm["adm_user"]); ?></span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="extra_profile.html"><i class="icon-user"></i> 我的信息</a></li>
                        <li><a href="page_calendar.html"><i class="icon-calendar"></i> 密码修改</a></li>

                        <li class="divider"></li>
                        <!--<li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>-->
                        <li><a href="login.html"><i class="icon-key"></i> 退出登录</a></li>
                    </ul>
                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="copyrights"></div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- 导航 开始 -->
<div class="page-sidebar nav-collapse collapse">
    <!-- 侧导航菜单开始 -->
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            &nbsp;
        </li>

        <?php if(is_array($leftmenu)): $i = 0; $__LIST__ = $leftmenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$left): $mod = ($i % 2 );++$i;?><li class="">
                   <?php if($left['menu_type'] == 1): ?><a href="/index.php/admin/<?php echo ($left["menu_url"]); ?>">
                           <i class="icon-home"></i>
                           <span class="title"><?php echo ($left["menu_name"]); ?></span>
                           <span class="selected"></span>
                       </a>
                   <?php else: ?>
                       <a href="javascript:;">
                           <i class="icon-briefcase"></i>
                           <span class="title"><?php echo ($left["menu_name"]); ?></span>
                           <span class="arrow "></span>
                       </a>
                       <ul class="sub-menu">
                           <?php if(is_array($left['child'])): $i = 0; $__LIST__ = $left['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$left1): $mod = ($i % 2 );++$i; if($left1['menu_type'] == 1): ?><li>
                                       <a href="/index.php/admin/<?php echo ($left1['menu_url']); ?>"><?php echo ($left1['menu_name']); ?></a>
                                   </li>
                               <?php else: ?>
                                   <li>
                                       <a href="#"><?php echo ($left1['menu_name']); ?>
                                           <span class="arrow"></span>
                                       </a>
                                       <ul class="sub-menu">
                                           <?php if(is_array($left1['child'])): foreach($left1['child'] as $key=>$left2): ?><li><a href="/index.php/admin/<?php echo ($left2["menu_url"]); ?>"><?php echo ($left2["menu_name"]); ?></a></li><?php endforeach; endif; ?>
                                       </ul>
                                   </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                       </ul><?php endif; ?>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <!-- 导航菜单结束 -->
</div>
    <!-- 导航 结束 -->
    <!-- BEGIN PAGE -->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class="modal-body">
                Widget settings form goes here
            </div>
        </div>
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
    <!-- 主要内容头部 开始-->
    <div class="row-fluid">
        <div class="span12">
            <!-- 皮肤设置部分 开始 -->
            <div class="color-panel hidden-phone">
                <div class="color-mode-icons icon-color"></div>
                <div class="color-mode-icons icon-color-close"></div>
                <div class="color-mode">
                    <p>设置 皮肤</p>
                    <ul class="inline">
                        <li class="color-black current color-default" data-style="default"></li>
                        <li class="color-blue" data-style="blue"></li>
                        <li class="color-brown" data-style="brown"></li>
                        <li class="color-purple" data-style="purple"></li>
                        <li class="color-grey" data-style="grey"></li>
                        <li class="color-white color-light" data-style="light"></li>
                    </ul>
                    <label>
                        <span>布局</span>
                        <select class="layout-option m-wrap small">
                            <option value="fluid" selected>流体</option>
                            <option value="boxed">盒子</option>
                        </select>
                    </label>
                    <label>
                        <span>头部</span>
                        <select class="header-option m-wrap small">
                            <option value="fixed" selected>固定</option>
                            <option value="default">默认</option>
                        </select>
                    </label>
                    <label>
                        <span>侧边栏</span>
                        <select class="sidebar-option m-wrap small">
                            <option value="fixed">固定</option>
                            <option value="default" selected>默认</option>
                        </select>
                    </label>
                    <label>
                        <span>底部</span>
                        <select class="footer-option m-wrap small">
                            <option value="fixed">固定</option>
                            <option value="default" selected>默认</option>
                        </select>
                    </label>
                </div>
            </div>
            <!-- 皮肤设置部分 结束 -->
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">
                欢迎登陆
                <small>创业云孵化平台</small>
            </h3>
            <!--<ul class="breadcrumb">
                &lt;!&ndash;<li>
                    <i class="icon-home"></i>
                    <a href="Y-publish-news.html">首页</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">内容管理</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="#">新闻管理</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="Y-content-news-media.html">申报快讯</a>
                </li>&ndash;&gt;
            </ul>-->
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- 主要内容头部 结束-->
    <hr style="margin-top: 0px">
    <div id="dashboard">
        <!-- 主要内容 开始 -->
        <div class="row-fluid">
            <div class="span12">
                <!-- tab 切换表 开始-->
                <div class="row-fluid ">
                    <div class="span12">
                        <!-- BEGIN INLINE TABS PORTLET-->
                        <div class="portlet box green">
                            <!--    表头 开始   -->
                            <div class="portlet-title">

                                <div class="caption"><i class="icon-reorder"></i>活动审核</div>

                                <div class="tools">

                                    <a href="javascript:;" class="collapse"></a>

                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>

                                </div>

                            </div>
                            <!--    表头 结束   -->
                            <div class="portlet-body">
                                <div class="row-fluid">
                                    <div class="span12">
                                        <!--BEGIN TABS-->
                                        <div class="tabbable tabbable-custom">
                                            <ul class="nav nav-tabs y_tabTitle">
                                                <li class="active"><a href="#tab_1_1" data-toggle="tab">全部</a></li>
                                                <li><a href="#tab_1_2" data-toggle="tab">待审核</a></li>
                                                <li><a href="#tab_1_3" data-toggle="tab">已审核</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <div class="portlet">
                                                        <div class="portlet-body">
                                                            <div class="clearfix"></div>
                                                            <table class="table table-striped table-hover table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>标题</th>
                                                                    <th>摘要</th>
                                                                    <th>来源</th>
                                                                    <th>状态</th>
                                                                    <th>操作</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">三百六十行，行行出状元！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>审核不通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">你若不走，便是后退，把握时机，成就下一个自己。</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>未审核</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">三百六十行，行行出状元！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>审核不通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">你若不走，便是后退，把握时机，成就下一个自己。</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>未审核</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div>
                                                                <div class="pages">
                                                                    <div class="l_float all_page">
                                                                        <p>当前为第<span>1</span>页/共<span>11</span>页</p>
                                                                    </div>
                                                                    <ul class="r_float pagelist">
                                                                        <li><a>首页</a></li>
                                                                        <li><a href="">上一页</a></li>
                                                                        <li  class="thisclass"><a href="">1</a></li>
                                                                        <li><a href="">2</a></li>
                                                                        <li><a href="">3</a></li>
                                                                        <li><a href="">4</a></li>
                                                                        <li><a href="">5</a></li>
                                                                        <li><a href="">下一页</a></li>
                                                                        <li><a href="">末页</a></li>
                                                                        <div style="clear: both"></div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_1_2">
                                                    <div class="portlet">
                                                        <div class="portlet-body">
                                                            <div class="clearfix"></div>
                                                            <table class="table table-striped table-hover table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>标题</th>
                                                                    <th>摘要</th>
                                                                    <th>来源</th>
                                                                    <th>状态</th>
                                                                    <th>操作</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>未审核</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">三百六十行，行行出状元！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>未审核</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">你若不走，便是后退，把握时机，成就下一个自己。</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>未审核</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>未审核</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>未审核</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div>
                                                                <div class="pages">
                                                                    <div class="l_float all_page">
                                                                        <p>当前为第<span>1</span>页/共<span>11</span>页</p>
                                                                    </div>
                                                                    <ul class="r_float pagelist">
                                                                        <li><a>首页</a></li>
                                                                        <li><a href="">上一页</a></li>
                                                                        <li  class="thisclass"><a href="">1</a></li>
                                                                        <li><a href="">2</a></li>
                                                                        <li><a href="">3</a></li>
                                                                        <li><a href="">4</a></li>
                                                                        <li><a href="">5</a></li>
                                                                        <li><a href="">下一页</a></li>
                                                                        <li><a href="">末页</a></li>
                                                                        <div style="clear: both"></div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_1_3">
                                                    <div class="portlet">
                                                        <div class="portlet-body">
                                                            <div class="clearfix"></div>
                                                            <table class="table table-striped table-hover table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>标题</th>
                                                                    <th>摘要</th>
                                                                    <th>来源</th>
                                                                    <th>状态</th>
                                                                    <th>操作</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">三百六十行，行行出状元！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>审核不通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">你若不走，便是后退，把握时机，成就下一个自己。</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td><a href="">关于孵化平台的一些小常识！</a></td>
                                                                    <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                        管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                                    <td>一阵风</td>
                                                                    <td>已审核通过</td>
                                                                    <td>
                                                                        <a class="y_clolor_green" href="javascript:;" style="display: inline-block">审核</a>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <div>
                                                                <div class="pages">
                                                                    <div class="l_float all_page">
                                                                        <p>当前为第<span>1</span>页/共<span>1</span>页</p>
                                                                    </div>
                                                                    <ul class="r_float pagelist">
                                                                        <li><a>首页</a></li>
                                                                        <li><a href="">上一页</a></li>
                                                                        <li  class="thisclass"><a href="">1</a></li>
                                                                        <li><a href="">2</a></li>
                                                                        <li><a href="">3</a></li>
                                                                        <li><a href="">4</a></li>
                                                                        <li><a href="">5</a></li>
                                                                        <li><a href="">下一页</a></li>
                                                                        <li><a href="">末页</a></li>
                                                                        <div style="clear: both"></div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--END TABS-->
                                    </div>
                                    <div class="space10 visible-phone"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END INLINE TABS PORTLET-->
                    </div>
                </div>
                <!-- tab 切换表 结束-->
            </div>
        </div>
        <!-- 主要内容 结束 -->
        <div class="clearfix"></div>
    </div>
</div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2013 &copy; Metronic by keenthemes.Collect from <a href="http://www.cssmoban.com/" title="网站模板" target="_blank">网站模板</a>
        - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<?php if(CONTROLLER_NAME == 'Index'): ?><script src="/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script><?php endif; ?>
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
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/Public/Admin/js/ckeditor.js"></script>

<script type="text/javascript" src="/Public/Admin/js/bootstrap-fileupload.js"></script>

<script type="text/javascript" src="/Public/Admin/js/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js/select2.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js/wysihtml5-0.3.0.js"></script>

<script type="text/javascript" src="/Public/Admin/js/bootstrap-wysihtml5.js"></script>

<script type="text/javascript" src="/Public/Admin/js/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js/jquery.toggle.buttons.js"></script>

<script type="text/javascript" src="/Public/Admin/js/bootstrap-datepicker.js"></script>

<script type="text/javascript" src="/Public/Admin/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript" src="/Public/Admin/js/clockface.js"></script>

<script type="text/javascript" src="/Public/Admin/js/date.js"></script>

<script type="text/javascript" src="/Public/Admin/js/daterangepicker.js"></script>

<script type="text/javascript" src="/Public/Admin/js/bootstrap-colorpicker.js"></script>

<script type="text/javascript" src="/Public/Admin/js/bootstrap-timepicker.js"></script>

<script type="text/javascript" src="/Public/Admin/js/jquery.inputmask.bundle.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js/jquery.input-ip-address-control-1.0.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js/jquery.multi-select.js"></script>

<script src="/Public/Admin/js/bootstrap-modal.js" type="text/javascript" ></script>

<script src="/Public/Admin/js/bootstrap-modalmanager.js" type="text/javascript" ></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/Admin/js/app.js" type="text/javascript"></script>
<script src="/Public/Admin/js/form-components.js"></script>
<script src="/Public/Admin/js/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins


        FormComponents.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>