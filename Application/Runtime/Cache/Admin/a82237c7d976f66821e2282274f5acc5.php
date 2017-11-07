<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
<link rel="stylesheet" href="/Public/Admin/css/common.css">
<link rel="stylesheet" href="/Public/Admin/css/content.css">
<link rel="stylesheet" href="/Public/Admin/css1/audit.css">
<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
    <!-- 主要内容头部 开始-->
    <div class="row-fluid">
    </div>
    <!-- 主要内容头部 结束-->
    <hr style="margin-top: 0px">
    <div id="dashboard">
        <!-- 主要内容 开始 -->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->

                        <br>
                        <input type="hidden" name="table" value="<?php echo ($actioned); ?>">
                        <div class="control-group">
                            <label class="control-label">标题：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="title" name="title" value="<?php echo ($list["title"]); ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">企业：</label>
                            <div class="controls">
                                <select name="company" id="company">
                                    <option value="<?php echo ($list["company_id"]); ?>" selected="selected"><?php echo ($list["company"]); ?></option>
                                    <?php if(is_array($companys)): $i = 0; $__LIST__ = $companys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$companys): $mod = ($i % 2 );++$i;?><option value="<?php echo ($companys["id"]); ?>"><?php echo ($companys["company"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">插入图片：</label>
                            <div class="controls y_controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <img src="<?php echo ($list["list_img"]); ?>" alt=""  id="showimg" name="img" style="width: 150px"/>
                                    <div>
                                        <iframe id="form_hidden" name="form_hidden" style="display:none"></iframe>
                                        <form id="formimg" action="<?php echo U('Common/upimg');?>" method="post" enctype="multipart/form-data" target="form_hidden">
                                                        <span class="btn btn-file">
                                                            <input type="file" class="default" name="theimg" onchange="upimg()"/><span>选择图片</span>
                                                        </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">摘要：</label>
                            <div class="controls">
                                <textarea class="span6 m-wrap" rows="3" id="description" name="description"><?php echo ($list["description"]); ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">指导内容：</label>
                            <div class="controls y_controls">
                                <!--<textarea class="span12 wysihtml5 m-wrap" rows="10"></textarea>-->
                                <link href="/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
                                <script type="text/javascript" src="/Public/umeditor/third-party/jquery.min.js"></script>
                                <script type="text/javascript" src="/Public/umeditor/third-party/template.min.js"></script>
                                <script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.config.js"></script>
                                <script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.min.js"></script>
                                <script type="text/javascript" src="/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
                                <script  type="text/plain" id="myEditor" name="content" style="width:100%;height:240px;"  ><?php echo ($list["content"]); ?></script>
                                <div class="clear"></div>
                                <script type="text/javascript">
                                    //实例化编辑器
                                    var um = UM.getEditor('myEditor');
                                    um.addListener('focus',function(){
                                        $('#focush2').html('')
                                    });
                                </script>
                                <div class="clear"></div>
                            </div>
                        </div>
                            <input type="hidden" name="id" id="id" value="<?php echo ($list["id"]); ?>">

                        <div class="form-actions">
                            <button type="button" class="btn blue" onclick="senddata()">发布</button>
                            <a href="#"><button type="button" class="btn">重置</button></a>
                        </div>

                        <script>
                            function upimg()
                            {
                                $("#formimg").submit();
                            }

                            function senddata()
                            {
                                var title=$("#title").val();
                                var company=$("#company").val();
                                var img=$("#showimg").attr('src');
                                var description=$("#description").val();
                                var content=UM.getEditor('myEditor').getContent();
                                var id=$("#id").attr("value");
                                if(title=="")
                                {
                                    alert('标题不能为空');
                                    return false;
                                }
                                if(content=="")
                                {
                                    alert('内容不能为空');
                                    return false;
                                }
                                var data={title:title,company_id:company,list_img:img,description:description,content:content,id:id};
                                console.log(data);
                                $.post("<?php echo U('Business/editedguidance');?>",{data:data},function(msg){
                                    if(msg)
                                    {
                                        alert("操作成功");
                                        var index = parent.layer.getFrameIndex(window.name);  parent.layer.close(index);
                                    }else{
                                        alert("操作发生错误");
                                        var index = parent.layer.getFrameIndex(window.name);  parent.layer.close(index);
                                    }
                                },'json')
                            }


                        </script>
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