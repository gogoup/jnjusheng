<?php if (!defined('THINK_PATH')) exit();?>
    <link rel="stylesheet" href="/Public/Admin/css1/common.css">
    <link rel="stylesheet" href="/Public/Admin/css1/content.css">
    <link rel="stylesheet" href="/Public/Admin/css1/audit.css">


<div style="background-color: white; width: 100%;">
    <div>
        <div class="span10 y_alert_out">
            <div class="y_activity_top"><p class="span2">入驻企业详情</p></div>
            <ul class="y_activity_ul">
                <li>
                    <div class="span2 y_activity_left">
                        <p>入驻地址：<span><?php echo ($company["office"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>物业费：<span><?php echo ($company["property_fee"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>房租：<span><?php echo ($company["rent"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>入住时间：<span><?php echo ($company["create_time"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >企业编号：<span><?php echo ($company["user_id"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >公司名称：<span><?php echo ($company["company"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >机构代码：<span><?php echo ($company["company_card"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >法人代表：<span><?php echo ($company["legal_person"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >公司成立时间：<span><?php echo ($company["founding_time"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p >注册资金：<span><?php echo ($company["registered_fund"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>单位性质：<span><?php echo ($company["nature_of_unit"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>机构类型：<span><?php echo ($company["institutional"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>办公电话：<span><?php echo ($company["work_tel"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系部门：<span><?php echo ($company["department"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系人：<span><?php echo ($company["contacts"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系电话：<span><?php echo ($company["contacts_tel"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>联系邮箱：<span><?php echo ($company["contents_email"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>办公地址：<span><?php echo ($company["company_add"]); ?></span></p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>公司简介：</p>
                    </div>
                    <div class="span7" id="content">
                        <?php echo ($one); ?>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li>
                    <div class="span2 y_activity_left">
                        <p>营业执照：</p>
                    </div>
                    <div class="span7">
                        <p>
                            <img src="<?php echo ($company["company_img"]); ?>" alt="">
                        </p>
                    </div>
                    <div style="clear: both"></div>
                </li>
                <li class="last">

                </li>
            </ul>
        </div>
    </div>

</div>