<?php if (!defined('THINK_PATH')) exit();?>
    <!--    我的css   开始-->
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    <link rel="stylesheet" href="/Public/Admin/css/content.css">
    <link rel="stylesheet" href="/Public/Admin/css/audit.css">
    <!--    我的css   结束-->
            <div class="y_activity_top">
                <p class="span2">活动详情</p>
            </div>
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p >主题：</p>
                    </div>
                    <div class="span7">
                        <p class="y_activity_title"><?php echo ($content["title"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >主办方：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["sponsor"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>              
                <li>
                    <div class="span2 y_activity_left">
                        <p >限报：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["number"]); ?>人</p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >地点：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["adderss"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >报名起止时间：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["join_start"]); ?> - <?php echo ($content["join_end"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >活动起止时间：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["act_start"]); ?> - <?php echo ($content["act_end"]); ?></p>
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
                        <p>活动详情：</p>
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
                            <img src="<?php echo ($content["list_img"]); ?>" alt="">
                        </p>
                    </div>
                    <div style="clear: both"></div>
                </li>
               
            </ul>