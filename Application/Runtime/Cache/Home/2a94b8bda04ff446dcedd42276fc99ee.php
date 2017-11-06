<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="/Public/Home/css/common.css">
    <link rel="stylesheet" href="/Public/Home/css/commonSection.css">
    <link rel="stylesheet" href="/Public/Home/css/home.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common.js"></script>
    <!--轮播图插件-->
    <script type="text/javascript" src="/Public/Home/js/slider.js"></script>
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
                    <button class="login"><a href="<?php echo U('Login/login');?>">登录</a></button>
                    <button class="register"><a href="<?php echo U('Register/register');?>" target="_blank">注册</a></button>
                </div>
            </div>
        </div>
        <div class="header-bottom">
                <div class="header-nav common-middle">
                    <ul class="float-clear">
                        <li>
                            <a href="#"><span>首&nbsp;&nbsp;页</span></a>
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
                        <li><a href="<?php echo U('Hatcher/hatcher');?>"><span>孵化空间</span></a>
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
    <!--轮播图-->
    <div id="banner_tabs" class="flexslider">
        <ul class="slides">
            <li>
                <a title="" target="_blank" href="#">
                    <img alt="" style="background: url(/Public/Home/image/home-banner1.png) no-repeat center;" src="/Public/Home/image/home-banner1.png">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img alt="" style="background: url(/Public/Home/image/home-banner2.png) no-repeat center;" src="/Public/Home/image/home-banner2.png">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img alt="" style="background: url(/Public/Home/image/home-banner3.png) no-repeat center;" src="/Public/Home/image/home-banner3.png">
                </a>
            </li>
            <li>
                <a title="" href="#">
                    <img alt="" style="background: url(/Public/Home/image/home-banner4.png) no-repeat center;" src="/Public/Home/image/home-banner4.png">
                </a>
            </li>
        </ul>
        <ul class="flex-direction-nav">
            <li><a class="flex-prev" href="javascript:;">Previous</a></li>
            <li><a class="flex-next" href="javascript:;">Next</a></li>
        </ul>
        <ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
            <li><a>1</a></li>
            <li><a>2</a></li>
            <li><a>2</a></li>
            <li><a>2</a></li>
        </ol>
    </div>
    <!--资讯中心-->
    <div class="home-information common-middle">
        <div class="common-section-header float-clear">
            <span>资讯中心</span><a href="<?php echo U('Information/information');?>">更多资讯>></a>
        </div>
        <div class="home-info-content float-clear">
            <div class="home-info-list" id="home-info-list">
                <ul>
                    <li><a href="<?php echo U('Information/news?state=1');?>"><span>通知公告</span></a></li>
                    <li><a href="<?php echo U('Information/news?state=2');?>"><span>企业新闻</span></a></li>
                    <li><a href="<?php echo U('Information/news?state=3');?>"><span>申报快讯</span></a></li>
                    <li><a href="<?php echo U('Information/news?state=4');?>"><span>媒体报道</span></a></li>
                    <li><a href="<?php echo U('Information/news?state=4');?>"><span>政策法规</span></a></li>
                </ul>
            </div>
            <div class="home-info-detail" id="home-info-detail">
                <ul>
                    <li>
                        <div class="home-info-matter float-clear">
                            <a class="info-matter-left" href="<?php echo U('Information/content',array('state'=>$notice_state,'id'=>$notice_content[id]));?>">
                                <img src="<?php echo ($notice_content["listimg"]); ?>" alt="">
                                <div class="info-matter-left-bot">
                                    <h4><?php echo ($notice_content["title"]); ?></h4>
                                    <p><?php echo ($notice_content["description"]); ?></p>
                                </div>
                            </a>
                            <div class="info-matter-right">
                                <ul>                                    
                                    <?php if(is_array($notice_data)): foreach($notice_data as $key=>$val): ?><li>
                                        <a href="<?php echo U('Information/content',array('state'=>$notice_state,'id'=>$val['id']));?>" class="float-clear">
                                                    <p><?php echo ($val["title"]); ?></p><span><?php echo ($val["create_time"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="home-info-matter float-clear">
                            <div class="info-matter-left">
                                <img src="<?php echo ($enterprise_content["listimg"]); ?>" alt="">
                                <div class="info-matter-left-bot">
                                    <h4><?php echo ($enterprise_content["title"]); ?></h4>
                                    <p><?php echo ($enterprise_content["description"]); ?></p>
                                </div>
                            </div>
                            <div class="info-matter-right">
                                <ul>
                                    <?php if(is_array($enterprise_data)): foreach($enterprise_data as $key=>$va): ?><li>
                                        <a href="<?php echo U('Information/content',array('state'=>$enterprise_state,'id'=>$va['id']));?>" class="float-clear">
                                                    <p><?php echo ($va["title"]); ?></p><span><?php echo ($va["create_time"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; ?>                                    
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="home-info-matter float-clear">
                            <div class="info-matter-left">
                                <img src="<?php echo ($falsh_content["listimg"]); ?>" alt="">
                                <div class="info-matter-left-bot">
                                    <h4><?php echo ($falsh_content["title"]); ?></h4>
                                    <p><?php echo ($falsh_content["title"]); ?></p>
                                </div>
                            </div>
                            <div class="info-matter-right">
                                <ul>
                                    <?php if(is_array($falsh_data)): foreach($falsh_data as $key=>$value): ?><li>
                                        <a href="<?php echo U('Information/content',array('state'=>$falsh_state,'id'=>$value['id']));?>" class="float-clear">
                                                    <p><?php echo ($value["title"]); ?></p><span><?php echo ($value["create_time"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; ?>                                    
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="home-info-matter float-clear">
                            <div class="info-matter-left">
                                <img src="<?php echo ($media_content["listimg"]); ?>" alt="">
                                <div class="info-matter-left-bot">
                                    <h4><?php echo ($media_content["title"]); ?></h4>
                                    <p><?php echo ($media_content["title"]); ?></p>
                                </div>
                            </div>
                            <div class="info-matter-right">
                                <ul>
                                    <?php if(is_array($media_data)): foreach($media_data as $key=>$v): ?><li>
                                        <a href="<?php echo U('Information/content',array('state'=>$media_state,'id'=>$v['id']));?>" class="float-clear">
                                                    <p><?php echo ($v["title"]); ?></p><span><?php echo ($v["create_time"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; ?>                                    
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="home-info-matter float-clear">
                            <div class="info-matter-left">
                                <img src="<?php echo ($policy_content["listimg"]); ?>" alt="">
                                <div class="info-matter-left-bot">
                                    <h4><?php echo ($policy_content["title"]); ?></h4>
                                    <p><?php echo ($policy_content["title"]); ?></p>
                                </div>
                            </div>
                            <div class="info-matter-right">
                                <ul>
                                    <?php if(is_array($policy_data)): foreach($policy_data as $key=>$pol): ?><li>
                                        <a href="<?php echo U('Information/substance',array('state'=>$policy_state,'id'=>$pol['id']));?>" class="float-clear">
                                                    <p><?php echo ($pol["title"]); ?></p><span><?php echo ($pol["createtime"]); ?></span>
                                        </a>
                                    </li><?php endforeach; endif; ?>                            
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--项目推荐-->
    <div class="common-middle home-project">
        <div class="common-section-header float-clear">
            <span>项目推荐</span><a href="business-service.html">更多项目>></a>
        </div>
        <div class="home-project-content">
            <ul class="float-clear">
                <li>
                    <div class="home-project-detail">
                        <div class="home-project-detail-top">
                            <img src="/Public/Home/image/home-project1.png" alt="">
                        </div>
                        <div class="home-project-detail-bot">
                            <h2>小帅影院</h2>
                            <p><span>联系人：</span><span>XXX</span></p>
                            <p><span>所属行业：</span><span>娱乐</span></p>
                            <button>了解更多</button>
                        </div>
                    </div>
                </li>
                <li>
                <div class="home-project-detail">
                    <div class="home-project-detail-top float-clear">
                        <!--<div class="home-project-detail-img">
                            <img src="image/projectLogo2.png" alt="">
                        </div>
                        <div class="home-project-detail-top-detail">
                            <h4>新型空气净化器</h4>
                            <span>联系人：</span><span>XXX</span>
                        </div>-->
                        <img src="/Public/Home/image/home-project2.png" alt="">
                    </div>
                    <div class="home-project-detail-bot">
                        <h2>端点科技</h2>
                        <p><span>联系人：</span><span>XXX</span></p>
                        <p><span>所属行业：</span><span>娱乐</span></p>
                        <button>了解更多</button>
                    </div>
                </div>
            </li>
                <li>
                    <div class="home-project-detail">
                        <div class="home-project-detail-top float-clear">
                            <img src="/Public/Home/image/home-project3.png" alt="">
                        </div>
                        <div class="home-project-detail-bot">
                            <h2>新能源</h2>
                            <p><span>联系人：</span><span>XXX</span></p>
                            <p><span>所属行业：</span><span>娱乐</span></p>
                            <button>了解更多</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="home-project-detail">
                        <div class="home-project-detail-top float-clear">
                            <img src="/Public/Home/image/home-project4.png" alt="">
                        </div>
                        <div class="home-project-detail-bot">
                            <h2>HOTOEM</h2>
                            <p><span>联系人：</span><span>XXX</span></p>
                            <p><span>所属行业：</span><span>娱乐</span></p>
                            <button>了解更多</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--创业辅导-->
    <div class="home-teacher common-middle">
        <div class="common-section-header float-clear">
            <span>创业辅导</span><a href="#">了解更多>></a>
        </div>
        <div class="home-teacher-content float-clear">
            <div class="home-teacher-con-left">
                <div class="common-section-header-min">
                    <span>创业课程</span>
                </div>
                <div class="home-teacher-con-left-list">
                    <ul class="float-clear">
                        <li>
                            <div class="home-teacher-lesson float-clear">
                                <div class="home-teacher-lessonImg">
                                    <img src="/Public/Home/image/jz1.png" alt="">
                                </div>
                                <div class="home-teacher-lesson-detail">
                                    <h4>技术创新管理</h4>
                                    <span>主讲老师：</span><span>XXX</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="home-teacher-lesson float-clear">
                                <div class="home-teacher-lessonImg">
                                    <img src="/Public/Home/image/jz1.png" alt="">
                                </div>
                                <div class="home-teacher-lesson-detail">
                                    <h4>人力资源管理</h4>
                                    <span>主讲老师：</span><span>XXX</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="home-teacher-lesson float-clear">
                                <div class="home-teacher-lessonImg">
                                    <img src="/Public/Home/image/jz4.png" alt="">
                                </div>
                                <div class="home-teacher-lesson-detail">
                                    <h4>招商人才开发与管理</h4>
                                    <span>主讲老师：</span><span>XXX</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="home-teacher-lesson float-clear">
                                <div class="home-teacher-lessonImg">
                                    <img src="/Public/Home/image/jz3.png" alt="">
                                </div>
                                <div class="home-teacher-lesson-detail">
                                    <h4>技术创新管理</h4>
                                    <span>主讲老师：</span><span>XXX</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="home-teacher-lesson float-clear">
                                <div class="home-teacher-lessonImg">
                                    <img src="/Public/Home/image/jz4.png" alt="">
                                </div>
                                <div class="home-teacher-lesson-detail">
                                    <h4>经济安全研究</h4>
                                    <span>主讲老师：</span><span>XXX</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="home-teacher-lesson float-clear">
                                <div class="home-teacher-lessonImg">
                                    <img src="/Public/Home/image/jz1.png" alt="">
                                </div>
                                <div class="home-teacher-lesson-detail">
                                    <h4>创业投资管理</h4>
                                    <span>主讲老师：</span><span>XXX</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="home-teacher-con-right">
                <div class="common-section-header-min">
                    <span>导师推荐</span>
                </div>
                <div class="home-teacher-con-right-list">
                    <ul>
                        <li>
                            <div class="home-teacher-detail float-clear">
                                <div class="home-teacher-detail-img">
                                    <img src="/Public/Home/image/teacher.png" alt="">
                                </div>
                                <div class="home-teacher-detail-con">
                                    <p><span>姓名：</span><span>XXX</span></p>
                                    <p><span>职务：</span><span>山东理工职业学院教师</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                        <div class="home-teacher-detail float-clear">
                            <div class="home-teacher-detail-img">
                                <img src="/Public/Home/image/teacher.png" alt="">
                            </div>
                            <div class="home-teacher-detail-con">
                                <p><span>姓名：</span><span>XXX</span></p>
                                <p><span>职务：</span><span>山东理工职业学院教师</span></p>
                            </div>
                        </div>
                    </li>
                        <li>
                            <div class="home-teacher-detail float-clear">
                                <div class="home-teacher-detail-img">
                                    <img src="/Public/Home/image/teacher.png" alt="">
                                </div>
                                <div class="home-teacher-detail-con">
                                    <p><span>姓名：</span><span>XXX</span></p>
                                    <p><span>职务：</span><span>山东理工职业学院教师</span></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="home-teacher-detail float-clear">
                                <div class="home-teacher-detail-img">
                                    <img src="/Public/Home/image/teacher.png" alt="">
                                </div>
                                <div class="home-teacher-detail-con">
                                    <p><span>姓名：</span><span>XXX</span></p>
                                    <p><span>职务：</span><span>山东理工职业学院教师</span></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!--创业孵化平台-->
    <div class="home-hatcher common-middle">
        <div class="common-section-header float-clear">
            <span>孵化空间</span><a href="#">更多孵化空间>></a>
        </div>
        <div class="home-hatcher-content float-clear">
            <a class="home-hatcher-con-left" href="#">
                <img src="/Public/Home/image/home-hatcher.png" alt="">
            </a>
            <div class="home-hatcher-con-right">
                <h3>山东中凯兴业贸易广场创业孵化示范园区</h3>
                <p class="float-clear"><i></i><span class="home-hatcher-position">山东省潍坊市寒亭区海港路45000号</span></p>
                <span>•&nbsp;&nbsp;</span><span>基地类别：</span><span>众创空间</span><br>
                <span>•&nbsp;&nbsp;</span><span>投资形式：</span><span>社会投资</span><br>
                <button>申请入孵</button>
            </div>

        </div>
    </div>
    <!--活动中心-->
    <div class="home-activity common-middle">
        <div class="common-section-header float-clear">
            <span>活动中心</span><a href="#">了解更多>></a>
        </div>
        <div class="home-teacher-content float-clear">
            <div class="home-teacher-con-left">
                <div class="common-section-header-min">
                    <span>创业大赛</span>
                </div>
                <a class="home-activity-con-left-detail" href="#">
                    <img src="/Public/Home/image/home-activity.jpg" alt="">
                </a>
            </div>
            <div class="home-teacher-con-right">
                <div class="common-section-header-min">
                    <span>创业互动</span>
                </div>
                <div class="home-activity-con-right-list info-matter-right">
                    <ul>
                        <li>
                            <a href="#" class="float-clear">
                                <p>高新区创新创业工作再传捷报</p><span>2017-09-26</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="float-clear">
                                <p>搭建沟通平台，银企共话发展--北苑歌德创业园</p><span>2017-08-18</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="float-clear">
                                <p>高新区创新创业工作再传捷报</p><span>2017-09-26</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="float-clear">
                                <p>市调研小组来高新区调研创业孵化器及创业大学建</p><span>2017-08-15</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="float-clear">
                                <p>高新区创新创业工作再传捷报</p><span>2017-09-26</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="float-clear">
                                <p>搭建沟通平台，银企共话发展--北苑歌德创业园</p><span>2017-08-18</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="float-clear">
                                <p>高新区创新创业工作再传捷报</p><span>2017-09-26</span>
                            </a>
                        </li>
                    </ul>
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
<script type="text/javascript">
    $(function() {
        var bannerSlider = new Slider($('#banner_tabs'), {
            time: 5000,
            delay: 400,
            event: 'hover',
            auto: true,
            mode: 'fade',
            controller: $('#bannerCtrl'),
            activeControllerCls: 'active'
        });
        $('#banner_tabs .flex-prev').click(function() {
            bannerSlider.prev()
        });
        $('#banner_tabs .flex-next').click(function() {
            bannerSlider.next()
        });
    })
</script>
</body>
</html>