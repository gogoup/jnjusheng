<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-COMPATIBLE" content="ie=edge">
    <title>创业大赛</title>
    <link rel="stylesheet" href="/Public/Home/css/common.css">
    <link rel="stylesheet" href="/Public/Home/css/service-activity.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="common-header">
        <div class="header-top ">
            <div class="common-middle">
                <span>山东理工职业学院创业平台欢迎您!</span>
            </div>
        </div>
        <div class="header-middle">
            <div class="common-middle-two float-clear">
                <div class="header-middle-left">
                    <img src="/Public/Home/image/logo.png" alt="">
                </div>
                <div class="header-middle-right">
                    <button class="login"><a href="person/register.html">登录</a></button>
                    <button class="register"><a href="person/register.html" target="_blank">注册</a></button>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="header-nav common-middle">
                <ul class="float-clear">
                    <li>
                        <a href="/"><span>首&nbsp;&nbsp;页</span></a>
                    </li>
                    <li><a href="<?php echo U('Information/information');?>"><span>资讯中心</span></a>
                        <!--<div class="header-nav-slide float-clear">
                            <div class="header-nav-slide-left">
                                <img src="image/nav-slide1.jpg" alt="">
                            </div>
                            <div class="header-nav-slide-right">
                                <a href="#">新闻中心</a>
                                <a href="#">活动中心</a>
                                <a href="#">平台资讯</a>
                            </div>
                        </div>-->
                    </li>
                    <li><a href="<?php echo U('Business/business');?>"><span>创业服务</span></a>
                        <!--<div class="header-nav-slide float-clear">
                            <div class="header-nav-slide-left">
                                <img src="image/nav-slide2.jpg" alt="">
                            </div>
                            <div class="header-nav-slide-right float-clear">
                                <a href="#">项目推荐</a>
                                <a href="#">风险评估</a>
                                <a href="#">创业指导</a>
                                <a href="#">跟踪扶持</a>
                            </div>
                        </div>-->
                    </li>
                    <li><a href="business-coach.html"><span>创业辅导</span></a>
                        <!--<div class="header-nav-slide float-clear">
                            <div class="header-nav-slide-left">
                                <img src="image/nav-slide3.jpg" alt="">
                            </div>
                            <div class="header-nav-slide-right">
                                <a href="#">创业课程</a>
                                <a href="#">专题讲座</a>
                                <a href="#">导师推荐</a>
                                <a href="#">会面预约</a>
                                <a href="#">创业教育</a>
                                <a href="#">直播辅导</a>
                                <a href="#">创业测试</a>
                            </div>
                        </div>-->
                    </li>
                    <li><a href="incubation-space.html"><span>孵化空间</span></a>
                        <!--<div class="header-nav-slide float-clear">
                            <div class="header-nav-slide-left">
                                <img src="image/nav-slide3.jpg" alt="">
                            </div>
                            <div class="header-nav-slide-right">
                                <a href="#">基本信息</a>
                                <a href="#">政策介绍</a>
                                <a href="#">入孵流程</a>
                                <a href="#">在线入孵</a>
                            </div>
                        </div>-->
                    </li>
                    <li><a href="business-center.html"><span>创业中心</span></a>
                        <!--<div class="header-nav-slide float-clear">
                            <div class="header-nav-slide-left">
                                <img src="image/nav-slide3.jpg" alt="">
                            </div>
                            <div class="header-nav-slide-right">
                                <a href="#">团队认证</a>
                                <a href="#">企业认证</a>
                                <a href="#">创客交流</a>
                                <a href="#">入驻服务</a>
                            </div>
                        </div>-->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="service-activity-con common-middle">
        <div class="common-section-header float-clear">
        	<?php if($state == 2 ): ?><span>创业大赛</span>
            <?php else: ?>
            <span>创业活动</span><?php endif; ?>
        </div>
        <div class="service-activity-sub float-clear">
            <?php if(is_array($list)): foreach($list as $key=>$val): ?><a class="service-activity-list" href="<?php echo U('Information/detail?id='.$val[id]);?>">
                <img src="<?php echo ($val[list_img]); ?>" alt="">
                <div class="service-act-detail">
                    <h3><?php echo ($val["title"]); ?></h3>
                    <p><span>主办：&nbsp;&nbsp;</span><span><?php echo ($val["sponsor"]); ?></span></p>
                    <p><span>限报：&nbsp;&nbsp;</span><span><?php echo ($val["number"]); ?>人</span></p>
                    <p><span>报名时间:</span><span><?php echo ($val["join_start"]); ?>至<?php echo ($val["join_end"]); ?></span></p>
                    <p><span>活动时间:</span><span><?php echo ($val["act_start"]); ?>至<?php echo ($val["act_end"]); ?></span></p>
                    <div class="service-act-state">
                    <?php if($val[s] == 1 ): ?><span>报名进行中</span>
                    <?php elseif($val[s] == 2): ?>
                    	<span class="service-act-end">活动未开始</span>
                    <?php elseif($val[s] == 3): ?>
                    	<span>活动进行中</span>
                    <?php elseif($val[s] == 4): ?>
                    	<span class="service-act-end">活动已结束</span>
                    <?php elseif($val[s] == 5): ?>
                    	<span class="service-act-end">活动未开始</span><?php endif; ?>
                    </div>                   
                </div>               
            </a><?php endforeach; endif; ?>
            <div class="page-num float-clear">
                        <?php echo ($str); ?>
            </div>                       
        </div>                
    </div>
    <div class="common-footer">
        <div class="common-middle float-clear">
            <div class="footer-left">
                <img src="/Public/Home/image/danwei.png" alt="">
            </div>
            <div class="footer-middle">
                <p>版权所有：山东理工职业学院 鲁ICP备12031654 号 鲁公网安备37089902000008号</p>
                <p>地址：山东省济宁市太白湖新区荷花路6号 邮政编码：272067</p>
                <p>办公室电话：0537-3617778 3617779 </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>