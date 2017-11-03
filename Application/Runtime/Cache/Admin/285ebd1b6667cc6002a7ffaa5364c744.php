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
                        <input type="hidden" name="id" value="<?php echo ($content["id"]); ?>">
                        <div class="control-group">
                            <label class=" control-label">项目名称：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="title" value="<?php echo ($content["title"]); ?>" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">分类：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap"  id="type" value="<?php echo ($content["type_id"]); ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">地区：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="adderss" value="<?php echo ($content["adderss"]); ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">联系人：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="person" value="<?php echo ($content["people"]); ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">邮箱：</label>
                            <div class="controls">
                                <input type="text" class="span6 m-wrap" id="email" value="<?php echo ($content["email"]); ?>"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">计划书：</label>
                            <div class="controls">
                            	<a href="<?php echo ($content["planfile"]); ?>">
									<button type="button" class="btn" style="float:left;margin-right:10px;">查看文件</button>
								</a>
                                <input type="hidden" id="thefile" value="">
                                <iframe id="form_hidden2" name="form_hidden2" style="display:none"></iframe>
                                <form class="span3" id="formfile" action="<?php echo U('Common/upfile');?>" method="post" enctype="multipart/form-data" target="form_hidden2">
                                    <span class="btn btn-file">
                                        <input type="text" name="theid" value="thefile">
                                        <input type="file" name="thefile" class="default" onchange="upfile()"/><span>选择文件</span>
                                    </span>  <l style="font-size: small">仅支持 doc、docx格式文件</l><span id="msg" style="margin-left: 10%; color: red"></span>
                                </form>
                            </div>
                            <div style="clear:both;"></div>
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
                            <label class="control-label">摘要：</label>
                            <div class="controls">
                                <textarea class="span6 m-wrap" id="description" rows="3"><?php echo ($content["description"]); ?></textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">详细介绍：</label>
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
    	var id = $("[name='id']").val();
    	var title=$("#title").val();
        var type=$("#type").val();
        var person=$("#person").val();
        var email=$("#email").val();
        var adderss=$("#adderss").val();
        var thefile=$("#thefile").val();
        var listimg=$("#showimg").attr('src');
        var description=$("#description").val();
        var content=UM.getEditor('myEditor').getContent();
        var data={table:"Project",1:{'id':id,'title':title,type_id:type,adderss:adderss,people:person,email:email,planfile:thefile,listimg:listimg,description:description,content:content}};
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