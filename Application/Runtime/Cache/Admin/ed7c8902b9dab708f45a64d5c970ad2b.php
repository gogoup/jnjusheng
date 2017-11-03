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
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/content.css" />

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
<!--    我的css   开始-->
<link rel="stylesheet" href="/Public/Admin/css/common.css">
<link rel="stylesheet" href="/Public/Admin/css/content.css">
<!--    我的css   结束-->

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
        <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
<script src="/Public/layui/layui.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css">
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
                        活动管理
                        <small>创业云孵化平台</small>
                    </h3>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- 主要内容头部 结束-->
            <hr style="margin-top: 0px">
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
                                        <div class="caption"><i class="icon-reorder"></i>活动管理</div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tabbable portlet-tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active" style="height: 50px"></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="portlet_tab1">
                                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                                    <div class="portlet">
                                                        <div class="portlet-body">
                                                            <div class="clearfix"></div>
                                                            <div class="span6" style="margin-left:2px">
                                                                <span id="y_span1">搜索：</span><input style="height: 25px;" type="text">
                                                                <button class="y_btn">确认</button>
                                                            </div>
                                                            <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                                <thead>
                                                                <tr>
                                                                    <th>标题</th>
                                                                    <th>摘要</th>
                                                                    <th>主办</th>
                                                                    <th>操作</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr class="">
                                                                    <td><a href="javascript:;" class="contentAlert"><?php echo ($val["title"]); ?></a></td>

                                                                    <td><?php echo ($val["description"]); ?></td>
                                                                    <td><?php echo ($val["sponsor"]); ?></td>
                                                                    <td>
                                                                    	<input type="hidden" class="id" name="field＿name" value="<?php echo ($val["id"]); ?>"> 
                                                                   		<input type="hidden" name="field＿name" value="<?php echo ($state); ?>"> 
                                                                   		<a class="y_clolor_blue" href="javascript:;" style="display: inline-block">查看</a>
                                                                        <a class="y_clolor_red" href="javascript:;" style="display: inline-block">删除</a>
                                                                        <a class="y_clolor_yellow" href="javascript:;" style="display: inline-block">修改</a>                                   
                                                                    </td>
                                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </tbody>
                                                            </table>
                                                            <div>
                                                                <div class="pages">
                                                                    <ul class="r_float pagelist">
                                                                        <?php echo ($str); ?>
                                                                        <div style="clear: both"></div>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END EXAMPLE TABLE PORTLET-->
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
<script>
$(document).on('click','.y_clolor_red',function(){
	var id = $(this).prev().prev().prev().val();
	var state = $(this).prev().prev().val();
	layui.use('layer', function(){
		  var layer = layui.layer;
		  layer.confirm('您确定要删除吗？？？',function(){
			$.ajax({
				'url':"<?php echo U('Content/del');?>",
				'type':'post',
				'dataType':'text',
				'data':{'id':id,'state':state},
				'success':function(msg){
					if(msg==1){
						window.location.reload();
					}else{
						layer.alert('删除失败，请联系管理员！！！');
					}  					
				}
			});
		  });
		});	
});
$(document).on('click','.contentAlert',function(){
	var id = $(this).parent().next().next().next().children('.id').val();
	$.post("<?php echo U('Content/activityAlert');?>",{'id':id}, function(data){
		layui.use('layer',function(){
			var layer = layui.layer;
			layer.open({
				  type: 1,
				  //skin: 'layui-layer-rim', //加上边框
				  area: ['1000px', '800px'], //宽高
				  content: data
				});
		});
    });
});
$(document).on('click','.y_clolor_blue',function(){
	var id = $(this).prev().prev().val();
	$.post("<?php echo U('Content/activityAlert');?>",{'id':id}, function (data) {
		layui.use('layer',function(){
			var layer = layui.layer;
			layer.open({
				  type: 1,
				  //skin: 'layui-layer-rim', //加上边框
				  area: ['1000px', '750px'], //宽高
				  content: data
				});
		});
    });
});
$(document).on('click','.y_clolor_yellow',function(){
	var id = $(this).prev().prev().prev().prev().val();
	$.post("<?php echo U('Content/editActivity');?>",{'id':id}, function (data) {
		layui.use('layer',function(){
			var layer = layui.layer;
			layer.open({
				  type: 1,
				  //skin: 'layui-layer-rim', //加上边框
				  area: ['1330px', '750px'], //宽高
				  content: data,
				  
				});
		});
    });
});
$(document).on('click','.y_btn',function(){
	var title = $('#y_span1').next().val();
	$.post("<?php echo U('Content/serchAll');?>",{'title':title,'table':'Activity'}, function (data) {
		//alert(data);
		$('.portlet-body').html(data);
	});
});
</script>

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
<?php if((CONTROLLER_NAME == 'Index') OR (CONTROLLER_NAME == 'Audit') OR (CONTROLLER_NAME == 'Content')): ?><script src="/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script><?php endif; ?>
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