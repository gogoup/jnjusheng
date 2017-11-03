<?php if (!defined('THINK_PATH')) exit();?>

	<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <script src="/Public/layui/layui.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css">
    <!--    我的css   开始-->
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    <link rel="stylesheet" href="/Public/Admin/css/content.css">
    <link rel="stylesheet" href="/Public/Admin/css/audit.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-fileupload.css" />
    <!--    我的css   结束-->
        <!-- BEGIN PAGE CONTAINER-->
            <div id="dashboard">
                <!-- 主要内容 开始 -->
                <div class="row-fluid">
                    <div class="span12">
                        <!-- BEGIN SAMPLE FORM PORTLET-->
                        <div class="portlet box blue">
                            <div class="portlet-title">
                                <div class="caption"><?php echo ($name); ?></div>
                                <div class="tools">
                                    <a href="javascript:;" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->

                                    <br>
                                    <input type="hidden" name="table" value="<?php echo ($actioned); ?>">
                                    <input type="hidden" name="id" value="<?php echo ($content["id"]); ?>">
                                    <div class="control-group">
                                        <label class="control-label">标题：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="title" name="title" value="<?php echo ($content["title"]); ?>" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">来源：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="from" name="from" value="<?php echo ($content["from"]); ?>" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">插入图片：</label>
                                        <div class="controls y_controls">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <img src="<?php echo ($content["listimg"]); ?>" alt=""  id="showimg" name="img" style="width: 150px"/>
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
                                            <textarea class="span6 m-wrap" rows="3" id="description" name="description" ><?php echo ($content["description"]); ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">内容：</label>
                                        <div class="controls y_controls">
                                            <!--<textarea class="span12 wysihtml5 m-wrap" rows="10"></textarea>-->
                                            <link href="/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
                                            <script type="text/javascript" src="/Public/umeditor/third-party/jquery.min.js"></script>
                                            <script type="text/javascript" src="/Public/umeditor/third-party/template.min.js"></script>
                                            <script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.config.js"></script>
                                            <script type="text/javascript" charset="utf-8" src="/Public/umeditor/umeditor.min.js"></script>
                                            <script type="text/javascript" src="/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
                                            <script  type="text/plain" id="myEditor" name="content" style="width:100%;height:240px;"  ><?php echo ($content["content"]); ?></script>
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

                                    <div class="control-group">
                                        <label class="control-label">显示：</label>
                                        <div class="controls">
                                            <label class="radio">
                                                <input type="radio" name="show" value="1" <?php if($content[new_show] == 2 ): ?>checked<?php endif; ?> />显示
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="show" value="2" <?php if($content[new_show] == 1 ): ?>checked<?php endif; ?> />隐藏
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="show" value="3" <?php if($content[new_show] == 3 ): ?>checked<?php endif; ?> />首页显示
                                            </label>
                                        </div>
                                    </div>

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
                                        var from=$("#from").val();
                                        var img=$("#showimg").attr('src');
                                        var description=$("#description").val();
                                        var content=UM.getEditor('myEditor').getContent();
                                        var table=$("[name='table']").val();
                                        var show=$("[name='show']").val();
                                        var id = $("[name='id']").val();
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
                                        var data={table:table,1:{'id':id,'title':title,from:from,listimg:img,description:description,content:content,new_show:show}};
                                        console.log(data);
                                        $.post("<?php echo U('Content/edit');?>",{'data':data},function(msg){
                                            if(msg)
                                            {
                                            	
                                            	layui.use('layer', function(){
                          			    		  var layer = layui.layer;
                          			    		  layer.alert('操作成功!');
                          			    		});
                                                location.replace(location);
                                            }else{
                                            	layui.use('layer', function(){
                          			    		  var layer = layui.layer;
                          			    		  layer.alert('操作发生错误!');
                          			    		});
                                            }
                                        })
                                    }


                                </script>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>
                <!-- 主要内容 结束 -->
            </div>
        <!-- END PAGE CONTAINER-->