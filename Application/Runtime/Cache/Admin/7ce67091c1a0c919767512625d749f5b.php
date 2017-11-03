<?php if (!defined('THINK_PATH')) exit();?>
<link rel="stylesheet" href="/Public/Admin/css1/common.css">
<link rel="stylesheet" href="/Public/Admin/css1/content.css">
<link rel="stylesheet" href="/Public/Admin/css1/audit.css">


<div style="background-color: white; width: 100%; text-align: center;">
    <div>
        <div class="span10 y_alert_out">
            <div class="y_activity_top"><p class="span2" value="<?php echo ($entered["company_id"]); ?>" id="comid">企业入驻信息</p></div>

            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p>入驻地址：<span><input type="text" name="office" value="<?php echo ($entered["office"]); ?>"></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>物业费：&nbsp;&nbsp;<span><input type="text" name="fee" value="<?php echo ($entered["property_fee"]); ?>"></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>房&nbsp;&nbsp;&nbsp;&nbsp;租：<span><input type="text" name="rent" value="<?php echo ($entered["rent"]); ?>"></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>缴费周期：<span><input type="text" name="button" value="<?php echo ($entered["button"]); ?>">/月</span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>入住时间：<span><?php echo ($entered["create_time"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>

                <li class="last">
                        <button onclick="editfee()">修改</button>
                        <buttton>取消</buttton>
                </li>
            </ul>
        </div>
    </div>

</div>
<script src="/Public/Admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="/Public/layer/layer.js" type="text/javascript"></script>
<script>
    function editfee()
    {
        // 修改入驻信息
        var office=$("[name='office']").val();
        var fee=$("[name='fee']").val();
        var rent=$("[name='rent']").val();
        var cid=$("#comid").attr("value");
        var button=$("[name='button']").val();
        console.log(cid);
        var index = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引
        if(cid=="")
        {
            console.log(index);
            parent.layer.close(index);
            return;
        }
        if(office=='')
        {
            alert("请填写入驻地址。");
            return;
        }
        if(fee=='')
        {
            alert("请填写物业费。");
            return;
        }
        if(rent=='')
        {
            alert("请填写房租。");
            return;
        }
        var data={company_id:cid,office:office,property_fee:fee,rent:rent,button:button};
        console.log(data);
        $.post("editentered.html",data,function(msg){
            if(msg)
            {
                parent.layer.close(index);
                parent.layer.msg("OK");
            }else{
                parent.layer.close(index);
                parent.layer.msg("NO");
            }
        },'json')

    }

</script>