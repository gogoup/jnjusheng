<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>孵化空间</title>
    <link rel="stylesheet" href="/Public/Home/css/common.css">
    <link rel="stylesheet" href="/Public/Home/css/commonSection.css">
    <link rel="stylesheet" href="/Public/Home/css/hatcher.css">
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
                    <img src="image/logo.png" alt="">
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
                    <li><a href="service-center.html"><span>资讯中心</span></a>
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
                    <li><a href="business-service.html"><span>创业服务</span></a>
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
                    <li><a href="business-builder.html"><span>创业辅导</span></a>
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
                    <li><a href="hatcher.html"><span>孵化空间</span></a>
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
    <div class="hatcher">
        <div class="common-middle">
            <div class="common-section-header float-clear">
                <span>孵化空间</span>
            </div>
            <div class="hatcher-content float-clear">
                <div class="business-con-left">
                    <ul>
                    <li style="display:none;"><a></a></li>
                        <li>
                            <a href="<?php echo U('Hatcher/hatcher');?>">基本信息</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Hatcher/hatcher2');?>" class="business-con-now">政策介绍</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Hatcher/hatcher3');?>">入孵流程</a>
                        </li>
                    </ul>
                </div>
                <div class="business-con-right">
                    
                    <!--政策介绍-->
                    <div class="business-con-right-tab">
                        <div class="hatcher-policy">
                            <div class="info-matter-right">
                                <ul>
                                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
                                        <a href="<?php echo U('Hatcher/policy?id='.$val[id]);?>" class="float-clear">
                                            <p><?php echo ($val["title"]); ?></p><span><?php echo ($val["createtime"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--入孵流程-->
                    <div class="business-con-right-tab">
                        <div class="hatcher-flow"></div>
                    </div>
                    <!--页码-->
                    <div class="page-num float-clear">
                        <?php echo ($str); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="common-fixed">
        <ul>
            <li>
                <span></span>
                <div class="fixed-position float-clear">
                    <img src="/Public/Home/image/codeDetail.jpg" alt="">
                    <div class="fixed-right">
                        <h3>关注我们</h3>
                        <p>山东理工职业学院创业<br>孵化平台公众号</p>
                    </div>
                </div>
            </li>
            <li>
                <span></span>
                <div class="fixed-position float-clear">
                    <img src="/Public/Home/image/logoMini.png" alt="">
                    <div class="fixed-right">
                        <h3>联系客服</h3>
                        <p>0536-xxxxxxxx</p>
                    </div>
                </div>
            </li>
            <li>
                <span></span>
            </li>
        </ul>
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