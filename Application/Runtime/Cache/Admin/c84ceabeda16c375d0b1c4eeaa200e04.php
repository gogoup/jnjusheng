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
        <link href="/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" src="/Public/umeditor/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/layer/layDate/laydate.js"></script>

<script>
    laydate.render({
        elem: '#test1' //指定元素
    });

    laydate.render({
        elem: '#test2' //指定元素
    });
    laydate.render({
        elem: '#test3' //指定元素
    });

    laydate.render({
        elem: '#test4' //指定元素
    });


</script>
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- 主要内容头部 开始-->
            <div class="row-fluid">
                <div class="span12">

                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        发布活动
                        <small>活动发布需要审核</small>
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
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption">活动发布</div>
                                <div class="tools">
                                    <a href="javascript:;" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->

                                    <br>
                                    <div class="control-group">
                                        <label class="control-label">类型：</label>
                                        <div class="controls">
                                            <select class="large m-wrap" tabindex="1" name="type" id="thetype">
                                                <option value="1">创业活动</option>
                                                <option value="2">创业大赛</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">标题：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="title"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">主办：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="zhuban" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">人数：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="number"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">地点：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="adderss"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">报名起止时间：</label>
                                        <div class="controls">
                                            <!--<input type="text" class="span6 m-wrap" />-->
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test1">
                                            <i style="color: gainsboro;">—</i>
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test2">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">活动起止时间：</label>
                                        <div class="controls">
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test3">
                                            <i style="color: gainsboro;">—</i>
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test4">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">插入图片：</label>
                                        <div class="controls y_controls">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <img src="" alt=""  id="showimg" name="img" style="width: 150px"/>
                                                <div>
                                                    <iframe id="form_hidden" name="form_hidden" style="display:none"></iframe>
                                                    <form id="formimg" action="<?php echo U('Common/upimg');?>" method="post" enctype="multipart/form-data" target="form_hidden">
													<span class="btn btn-file">
                                                             <input type="file" name="theimg" class="default" onchange="upimg()" /><span>选择图片</span>
                                                    </span>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">摘要：</label>
                                        <div class="controls">
                                            <textarea class="span6 m-wrap" rows="3" id="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">活动详情：</label>
                                        <div class="controls y_controls">
                                            <script type="text/plain" id="myEditor" style="width:100%;height:240px;" name="content"></script>
                                            <script type="text/javascript">
                                                //实例化编辑器
                                                var um = UM.getEditor('myEditor');
                                                um.addListener('focus',function(){
                                                    $('#focush2').html('')
                                                });
                                                </script>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">操作：</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="state" value="1" checked  />
                                                可报名
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="state" value="2" />
                                                仅展示
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="button" class="btn blue" onclick="addact()">发布</button>
                                        <button type="button" class="btn">取消</button>
                                    </div>

                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>
                <!-- 主要内容 结束 -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
<script>
    function upimg()
    {
        $('#formimg').submit();
    }
    function addact()
    {
        var title=$('#title').val();
        var content=UM.getEditor('myEditor').getContent();
        var zhuban=$('#zhuban').val();
        var number=$("#number").val();
        var adderss=$('#adderss').val();
        var join1=$("#test1").val();
        var join2=$("#test2").val();
        var join3=$("#test3").val();
        var join4=$("#test4").val();
        var img=$("#showimg").attr('src');
        var description=$("#description").val();
        var state=$("input[name='state']:checked").val();
        var thetype=$('#thetype').val();
        alert(img);
        if(title=="")
        {
            alert('标题不能为空');
            return false;
        }
        if(content=="")
        {
            alert('请填写内容');
            return false;
        }
        var data={"table":"activity","1":{title:title,sponsor:zhuban,number:number,adderss:adderss,join_start:join1,join_end:join2,act_start:join3,act_end:join4,list_img:img,description:description,content:content,type:thetype,state:state}};
        $.post("<?php echo U('Publish/send');?>",{data:data},function(msg){
            if(msg){
                alert("YES");
            }else{
                alert("NO");
            }
            location.replace(location)
        },'json')
    }
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
<?php if((CONTROLLER_NAME == 'Index') OR (CONTROLLER_NAME == 'Audit') ): ?><script src="/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script><?php endif; ?>
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