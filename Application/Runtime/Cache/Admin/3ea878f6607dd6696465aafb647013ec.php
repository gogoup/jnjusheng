<?php if (!defined('THINK_PATH')) exit();?>


    <!--    我的css   开始-->
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    <link rel="stylesheet" href="/Public/Admin/css/content.css">
    <link rel="stylesheet" href="/Public/Admin/css/audit.css">
    <!--    我的css   结束-->
    
            <div class="y_activity_top">
                <p class="span2">公共平台详情</p>
            </div>
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p >标题：</p>
                    </div>
                    <div class="span7">
                        <p class="y_activity_title"><?php echo ($content["title"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >来源：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["from"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>摘要：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["description"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>主要内容：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["content"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>图片：</p>
                    </div>
                    <div class="span7">
                        <p>
                            <img src="<?php echo ($content["listimg"]); ?>" alt="">
                        </p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                
            </ul>