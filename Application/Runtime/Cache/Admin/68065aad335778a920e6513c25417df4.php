<?php if (!defined('THINK_PATH')) exit();?>
<link href="/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" src="/Public/umeditor/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/layer/layDate/laydate.js"></script>
<!--    我的css   开始-->
<link rel="stylesheet" href="/Public/Admin/css/common.css">
<link rel="stylesheet" href="/Public/Admin/css/content.css">
<link rel="stylesheet" href="/Public/Admin/css/audit.css">
<link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-fileupload.css" />
<!--    我的css   结束-->
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
                <div class="portlet box yellow">
                    <div class="portlet-title">
                        <div class="caption">项目发布</div>
                        <div class="tools">
                            <a href="javascript:;" class="reload"></a>
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->

                        <br>
                        <div class="control-group">
                            <label class=" control-label">项目名称：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="title" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">分类：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap"  id="type"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地区：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="adderss" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="person"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮箱：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="email"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">计划书：</label>
                            <div class="controls">

                                <input type="hidden" id="thefile" value="">
                                <iframe id="form_hidden2" name="form_hidden2" style="display:none"></iframe>
                                <form id="formfile" action="<?php echo U('Common/upfile');?>" method="post" enctype="multipart/form-data" target="form_hidden2">
                                    <span class="btn btn-file">
                                        <input type="text" name="theid" value="thefile">
                                        <input type="file" name="thefile" class="default" onchange="upfile()"/><span>选择文件</span>
                                    </span>  <l style="font-size: small">仅支持 doc、docx格式文件</l><span id="msg" style="margin-left: 10%; color: red"></span>
                                </form>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">上传图片：</label>
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
                                <textarea class="span6 m-wrap" id="description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">详细介绍：</label>
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
                        <div class="form-actions">
                            <button type="button" class="btn yellow" onclick="senddata()">发布</button>
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
<script>
    //上传图片
    function upimg()
    {
        $("#formimg").submit();
    }
    //上传文件
    function upfile()
    {
        $("#formfile").submit();
    }
    //提交数据
    function senddata()
    {
        var title=$("#title").val();
        var type=$("#type").val();
        var person=$("#person").val();
        var email=$("#email").val();
        var adderss=$("#adderss").val();
        var thefile=$("#thefile").val();
        var listimg=$("#showimg").attr('src');
        var description=$("#description").val();
        var content=UM.getEditor('myEditor').getContent();
        var data={table:"Project",1:{'title':title,type_id:type,adderss:adderss,people:person,email:email,planfile:thefile,listimg:listimg,description:description,content:content}};
        $.post("<?php echo U('Publish/send');?>",{data:data},function(msg){
            if(msg)
            {
                alert("操作成功");
                location.replace(location)
            }else{
                alert("操作发生错误");
            }
        },'json')
    }
</script>