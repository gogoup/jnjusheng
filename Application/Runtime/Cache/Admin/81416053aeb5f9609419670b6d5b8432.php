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

    <!-- 主要内容头部 结束-->
    <div id="dashboard">
        <!-- 主要内容 开始 -->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet box purple">
                    <div class="portlet-title">
                        <div class="caption"><?php echo ($name); ?></div>
                        <div class="tools">
                            <a href="javascript:;" class="reload"></a>
                            <input type="hidden" name="table" value="<?php echo ($actioned); ?>" id="action">
                        </div>
                    </div>
                    <div class="portlet-body form">
                        <!-- BEGIN FORM-->

                            <br>
                            <input type="hidden" name="id" value="<?php echo ($content["id"]); ?>">
                            <div class="control-group">
                                <label class="control-label">标题：</label>
                                <div class="controls">
                                    <input type="text" class="span6 m-wrap" id="title" value="<?php echo ($content["title"]); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">来源：</label>
                                <div class="controls">
                                    <input type="text" class="span6 m-wrap" id="from" value="<?php echo ($content["from"]); ?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">摘要：</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap" id="description" rows="3"><?php echo ($content["description"]); ?></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">上传图片：</label>
                                <div class="controls y_controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <img src="<?php echo ($content["listimg"]); ?>" alt=""  id="showimg" name="img" style="width: 150px"/>
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
                                <label class="control-label">主要内容：</label>
                                <div class="controls y_controls">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:240px;" name="content"><?php echo ($content["content"]); ?></script>
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
                                <button type="button" class="btn blue" onclick="senddata()">发布</button>
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

<script>
    //上传图片
    function upimg()
    {
        $("#formimg").submit();
    }
    function senddata()
    {
    	var id = $("[name='id']").val();
    	var title=$("#title").val();
        var from=$("#from").val();
        var listimg=$("#showimg").attr('src');
        var description=$("#description").val();
        var content=UM.getEditor('myEditor').getContent();
        var action=$("#action").val();
        var data={table:action,1:{'id':id,'title':title,from:from,listimg:listimg,description:description,content:content}};
        $.post("<?php echo U('Content/edit');?>",{data:data},function(msg){
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