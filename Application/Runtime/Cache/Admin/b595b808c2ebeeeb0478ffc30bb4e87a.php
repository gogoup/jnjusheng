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
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown" id="header_notification_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-warning-sign"></i>
                        <span class="badge">6</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>You have 14 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                New user registered.
                                <span class="time">Just now</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                Server #12 overloaded.
                                <span class="time">15 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                Server #2 not respoding.
                                <span class="time">22 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                Application error.
                                <span class="time">40 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                Database overloaded 68%.
                                <span class="time">2 hrs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                2 user IP blocked.
                                <span class="time">5 hrs</span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END NOTIFICATION DROPDOWN -->
                <!-- BEGIN INBOX DROPDOWN -->
                <li class="dropdown" id="header_inbox_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-envelope"></i>
                        <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p>You have 12 new messages</p>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                                <span class="photo"><img src="/Public/Admin/image/avatar2.jpg" alt=""/></span>
                                <span class="subject">
								<span class="from">Lisa Wong</span>
								<span class="time">Just Now</span>
								</span>
                                <span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                                <span class="photo"><img src="/Public/Admin/image/avatar3.jpg" alt=""/></span>
                                <span class="subject">
								<span class="from">Richard Doe</span>
								<span class="time">16 mins</span>
								</span>
                                <span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                                <span class="photo"><img src="/Public/Admin/image/avatar1.jpg" alt=""/></span>
                                <span class="subject">
								<span class="from">Bob Nilson</span>
								<span class="time">2 hrs</span>
								</span>
                                <span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh
								auctor nibh...
								</span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END INBOX DROPDOWN -->
                <!-- BEGIN TODO DROPDOWN -->
                <li class="dropdown" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-tasks"></i>
                        <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li>
                            <p>You have 12 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
								<span class="task">
								<span class="desc">New release v1.2</span>
								<span class="percent">30%</span>
								</span>
                                <span class="progress progress-success ">
								<span style="width: 30%;" class="bar"></span>
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
								<span class="task">
								<span class="desc">Application deployment</span>
								<span class="percent">65%</span>
								</span>
                                <span class="progress progress-danger progress-striped active">
								<span style="width: 65%;" class="bar"></span>
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
								<span class="task">
								<span class="desc">Mobile app release</span>
								<span class="percent">98%</span>
								</span>
                                <span class="progress progress-success">
								<span style="width: 98%;" class="bar"></span>
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
								<span class="task">
								<span class="desc">Database migration</span>
								<span class="percent">10%</span>
								</span>
                                <span class="progress progress-warning progress-striped">
								<span style="width: 10%;" class="bar"></span>
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
								<span class="task">
								<span class="desc">Web server upgrade</span>
								<span class="percent">58%</span>
								</span>
                                <span class="progress progress-info">
								<span style="width: 58%;" class="bar"></span>
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
								<span class="task">
								<span class="desc">Mobile development</span>
								<span class="percent">85%</span>
								</span>
                                <span class="progress progress-success">
								<span style="width: 85%;" class="bar"></span>
								</span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- END TODO DROPDOWN -->
                <!-- BEGIN USER LOGIN DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="/Public/Admin/image/avatar1_small.jpg"/>
                        <span class="username">Bob Nilson</span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                        <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
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
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..."/>
                    <input type="button" class="submit" value=" "/>
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="start">
            <a href="Y-publish-news.html">
                <i class="icon-home"></i>
                <span class="title">创业孵化平台</span>
                <span class="selected"></span>
            </a>
        </li>
        <li>
            <a class="active" href="Y-publish-news.html">
                <i class="icon-sitemap"></i>
                <span class="title">信息发布</span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="Y-publish-news.html">
                        新闻发布
                    </a>
                </li>
                <li>
                    <a href="Y-publish-activity.html">
                        活动发布
                    </a>
                </li>
                <li>
                    <a href="Y-publish-platform.html">
                        公开平台发布
                    </a>
                </li>
            </ul>
        </li>
        <li class="active">
            <a class="active" href="javascript:;">
                <i class="icon-sitemap"></i>
                <span class="title">内容管理</span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="javascript:;">
                        新闻管理
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">通知公告</a></li>
                        <li><a href="#">企业新闻</a></li>
                        <li><a href="#">申报快讯</a></li>
                        <li><a href="#">媒体报道</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        活动管理
                    </a>
                </li>
                <li>
                    <a href="#">
                        公开平台管理
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">技术研发</a></li>
                        <li><a href="#">生活服务</a></li>
                        <li><a href="#">共享空间</a></li>
                        <li><a href="#">政策法规</a></li>
                        <li><a href="#">科技支撑</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-table"></i>
                <span class="title">信息审核</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">
                        活动审核</a>
                </li>
                <li>
                    <a href="#">
                        个人信息审核</a>
                </li>
                <li>
                    <a href="#">
                        企业信息审核</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-briefcase"></i>
                <span class="title">业务处理</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="page_timeline.html">
                        <i class="icon-time"></i>
                        入驻管理</a>
                </li>
                <li>
                    <a href="page_coming_soon.html">
                        <i class="icon-cogs"></i>
                        物业管理</a>
                </li>
                <li>
                    <a href="page_blog.html">
                        <i class="icon-comments"></i>
                        统计管理</a>
                </li>
                <li>
                    <a href="page_blog_item.html">
                        <i class="icon-font"></i>
                        服务导航</a>
                </li>
                <li>
                    <a href="page_news.html">
                        <i class="icon-coffee"></i>
                        创业导师</a>
                </li>
            </ul>
        </li>
        <li class="">
            <a href="javascript:;">
                <i class="icon-gift"></i>
                <span class="title">用户管理</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="extra_profile.html">
                        个人</a>
                </li>
                <li>
                    <a href="extra_lock.html">
                        企业</a>
                </li>
            </ul>

        </li>
        <li class="last">
            <a class="active" href="javascript:;">
                <i class="icon-sitemap"></i>
                <span class="title">系统设置</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="javascript:;">
                        分类管理
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">Smple Link 1</a></li>
                        <li><a href="#">Sample Link 2</a></li>
                        <li><a href="#">Sample Link 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        权限设置
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 1</a></li>
                        <li><a href="#">Sample Link 1</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        个人设置
                    </a>
                </li>
            </ul>
        </li>
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
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="Y-publish-news.html">首页</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="Y-publish-news.html">内容管理</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="Y-publish-news.html">新闻管理</a>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- 主要内容头部 结束-->
    <div id="dashboard">
        <!-- 主要内容 开始 -->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE CONTENT-->
                <div class="row-fluid ">
                    <div class="span12">
                        <!-- BEGIN TAB PORTLET-->
                        <div class="portlet box blue tabbable">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-reorder"></i>新闻管理</div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable portlet-tabs">
                                    <ul class="nav nav-tabs">
                                        <li><a href="#portlet_tab4" data-toggle="tab">媒体报道</a></li>
                                        <li><a href="#portlet_tab3" data-toggle="tab">申报快讯</a></li>
                                        <li><a href="#portlet_tab2" data-toggle="tab">企业新闻</a></li>
                                        <li class="active"><a href="#portlet_tab1" data-toggle="tab">通知公告</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_tab1">
                                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                            <div class="portlet">
                                                <div class="portlet-body">
                                                    <div class="clearfix">
                                                        <div class="btn-group">
                                                            <!--<button id="sample_editable_1_new" class="btn green">
                                                                发布新闻 <i class="icon-plus"></i>
                                                            </button>-->
                                                        </div>
                                                        <div class="btn-group pull-right">
                                                            <button class="btn dropdown-toggle" data-toggle="dropdown">工具 <i class="icon-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li><a href="#">打印</a></li>
                                                                <li><a href="#">保存为PDF</a></li>
                                                                <li><a href="#">导出Excel</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                        <thead>
                                                        <tr>
                                                            <th>标题</th>
                                                            <th>摘要</th>
                                                            <th>来源</th>
                                                            <th>操作</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>三百六十行，行行出状元！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>你若不走，便是后退，把握时机，成就下一个自己。</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>三百六十行，行行出状元！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>你若不走，便是后退，把握时机，成就下一个自己。</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        <tr class="">
                                                            <td>关于孵化平台的一些小常识！</td>
                                                            <td>管理员管理通知公告，进行通知公告的发布、删除、修改等操作，模块清晰，对新闻进行明确的分类。
                                                                管理员管理企业新闻，进行企业新闻的发布、删除、修改等操作，模块清晰。</td>
                                                            <td>一阵风</td>
                                                            <td>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">删除</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">修改</a>
                                                                <a class="delete" href="javascript:;" style="display: inline-block">置顶</a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- END EXAMPLE TABLE PORTLET-->
                                        </div>
                                        <div class="tab-pane" id="portlet_tab2">

                                            <p>

                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.

                                            </p>

                                            <p>

                                                <a class="btn red" href="ui_tabs_accordions.html#portlet_tab2" target="_blank">Activate this tab via URL</a>

                                            </p>

                                        </div>
                                        <div class="tab-pane" id="portlet_tab3">

                                            <p>

                                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

                                            </p>

                                            <p>

                                                <a class="btn blue" href="ui_tabs_accordions.html#portlet_tab3" target="_blank">Activate this tab via URL</a>

                                            </p>

                                        </div>
                                        <div class="tab-pane" id="portlet_tab4">

                                            <p>

                                                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

                                            </p>

                                            <p>

                                                <a class="btn blue" href="ui_tabs_accordions.html#portlet_tab3" target="_blank">Activate this tab via URL</a>

                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END TAB PORTLET-->
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
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
<!-- BEGIN CORE PLUGINS -->
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
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS     table表-->

<script type="text/javascript" src="/Public/Admin/js/select2.min.js"></script>

<script type="text/javascript" src="/Public/Admin/js/jquery.dataTables.js"></script>

<script type="text/javascript" src="/Public/Admin/js/DT_bootstrap.js"></script>

<!-- END PAGE LEVEL PLUGINS     table表-->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/Admin/js/app.js" type="text/javascript"></script>
<script src="/Public/Admin/js/table-editable.js"></script>
<script src="/Public/Admin/js/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins
        TableEditable.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>