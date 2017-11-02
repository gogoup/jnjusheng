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
                                <div class="caption">活动</div>
                                <div class="tools">
                                    <a href="javascript:;" class="reload"></a>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                        
                                    <input type="hidden" name="id" value="<?php echo ($content["id"]); ?>">
                                    <div class="control-group">
                                        <label class="control-label">类型：</label>
                                        <div class="controls">
                                            <select class="large m-wrap" tabindex="1" name="type" id="thetype">
                                                <option value="1" <?php if($content[type] == 1 ): ?>selected = "selected"<?php endif; ?>>创业活动</option>
                                                <option value="2" <?php if($content[type] == 2 ): ?>selected = "selected"<?php endif; ?>>创业大赛</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">标题：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="title" name="title" value="<?php echo ($content["title"]); ?>" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">主办：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="zhuban" name="zhuban" value="<?php echo ($content["sponsor"]); ?>" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">人数：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="number" value="<?php echo ($content["number"]); ?>"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">地点：</label>
                                        <div class="controls">
                                            <input type="text" class="span6 m-wrap" id="adderss" value="<?php echo ($content["adderss"]); ?>"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">报名起止时间：</label>
                                        <div class="controls">
                                            <!--<input type="text" class="span6 m-wrap" />-->
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test1" value="<?php echo ($content["join_start"]); ?>">
                                            <i style="color: gainsboro;">—</i>
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test2" value="<?php echo ($content["join_end"]); ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">活动起止时间：</label>
                                        <div class="controls">
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test3" value="<?php echo ($content["act_start"]); ?>">
                                            <i style="color: gainsboro;">—</i>
                                            <input type="text" class="span2 m-wrap" placeholder="请选择日期" id="test4" value="<?php echo ($content["act_end"]); ?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">插入图片：</label>
                                        <div class="controls y_controls">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <img src="<?php echo ($content['list_img']); ?>" alt=""  id="showimg" name="img" style="width: 150px"/>
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
                                        <label class="control-label">活动详情：</label>
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
                                    <div class="form-actions">
                                        <button type="button" class="btn blue" onclick="editact()">发布</button>
                                        <a href="#"><button type="button" class="btn">重置</button></a>
                                    </div>
                            	
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END SAMPLE FORM PORTLET-->
                    </div>
                </div>
                <!-- 主要内容 结束 -->
            </div>
        <!-- END PAGE CONTAINER-->
<script>

function upimg()
{
	alert(111);
    $("#formimg").submit();
}
function editact()
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
    var thetype=$('#thetype').val();
    var id = $("[name='id']").val();
    if(title=="")
    {
        alert('标题不能为空');
    }
    if(content=="")
    {
        alert('请填写内容');
    }
    var data={"table":"activity","1":{id:id,title:title,sponsor:zhuban,number:number,adderss:adderss,join_start:join1,join_end:join2,act_start:join3,act_end:join4,list_img:img,description:description,content:content,type:thetype}};
    $.post("<?php echo U('Content/edit');?>",{data:data},function(msg){
        alert(msg);
        if(msg){
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
    });
}

</script>