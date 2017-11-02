<?php if (!defined('THINK_PATH')) exit();?>

    <!--    我的css   开始-->
    <link rel="stylesheet" href="/Public/Admin/css/common.css">
    <link rel="stylesheet" href="/Public/Admin/css/content.css">
    <link rel="stylesheet" href="/Public/Admin/css/audit.css">
    <!--    我的css   结束-->
            <div class="y_activity_top">
                <p class="span2">项目详情</p>
            </div>
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p >项目名称：</p>
                    </div>
                    <div class="span7">
                        <p class="y_activity_title"><?php echo ($content["title"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >分类：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["type_id"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >地区：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["adderss"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >联系人：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["people"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >邮箱：</p>
                    </div>
                    <div class="span7">
                        <p><?php echo ($content["email"]); ?></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >计划书：</p>
                    </div>
                    <div class="span7">
                        <p>
                        	<a href="<?php echo ($content["planfile"]); ?>">
								<button type="button" class="btn" style="float:left;margin-right:10px;">查看文件</button>
							</a>
						</p>
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
                        <p>详细介绍：</p>
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