<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>资讯中心</title>
    <link rel="stylesheet" href="/Public/Home/css/common.css">
    <link rel="stylesheet" href="/Public/Home/css/commonSection.css">
    <link rel="stylesheet" href="/Public/Home/css/service.css">
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
                    <button class="login"><a href="<?php echo U('Login/login');?>">登录</a></button>
                    <button class="register"><a href="<?php echo U('Register/register');?>" target="_blank">注册</a></button>
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
    <div class="common-middle">
        <div class="common-inner-content">
            <div class="common-section-header float-clear">
                <span>资讯中心</span>
            </div>
            <div class="common-inner-con">
                <div class="service-content float-clear">
                    <div class="service-con-left">
                        <h3>新闻中心</h3>
                        <div class="home-info-list service-con-left-list" id="service-new-left">
                            <ul class="float-clear">
                                <li><a href="<?php echo U('Information/news?state=1');?>" class="notice">通知公告</a></li>
                                <li><a href="<?php echo U('Information/news?state=2');?>" class="enterprise">企业新闻</a></li>
                                <li><a href="<?php echo U('Information/news?state=3');?>" class="falsh">申报快讯</a></li>
                                <li><a href="<?php echo U('Information/news?state=4');?>" class="media">媒体报道</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-con-right home-info-detail"id="service-new-right">
                        <ul>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz1.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz2.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz4.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz3.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service-content float-clear">
                    <div class="service-con-left">
                        <h3>活动中心</h3>
                        <div class="home-info-list service-con-left-list"id="service-activity-left">
                            <ul class="float-clear">
                                <li><a href="#">创业大赛</a></li>
                                <li><a href="service-new.html">创业互动</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-con-right home-info-detail"id="service-activity-right">
                        <ul>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="service-con-activity float-clear">
                                        <img src="/Public/Home/image/service-activity1.png" alt="">
                                        <div class="service-con-activity-detail">
                                            <p>潍坊市新型农民创业大赛</p>
                                            <button>了解详情</button>
                                        </div>
                                    </div>
                                    <div class="service-con-activity float-clear">
                                        <img src="/Public/Home/image/service-activity2.png" alt="">
                                        <div class="service-con-activity-detail">
                                            <p>县市区创业大赛</p>
                                            <button>了解详情</button>
                                        </div>
                                    </div>
                                    <div class="service-con-activity float-clear">
                                        <img src="/Public/Home/image/service-activity3.png" alt="">
                                        <div class="service-con-activity-detail">
                                            <p>潍坊市第四届创业大赛</p>
                                            <button>了解详情</button>
                                        </div>
                                    </div>
                                    <div class="service-con-activity float-clear">
                                        <img src="/Public/Home/image/service-activity4.png" alt="">
                                        <div class="service-con-activity-detail">
                                            <p>潍坊市第三届创业大赛</p>
                                            <button>了解详情</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz1.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="service-content float-clear">
                    <div class="service-con-left">
                        <h3>平台资讯</h3>
                        <div class="home-info-list service-con-left-list"id="service-terrace-left">
                            <ul class="float-clear">
                                <li><a href="service-new.html">技术研发</a></li>
                                <li><a href="service-new.html">共享空间</a></li>
                                <li><a href="service-new.html">政策法规</a></li>
                                <li><a href="service-new.html">科技支撑</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-con-right home-info-detail"id="service-terrace-right">
                        <ul>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz1.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz2.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz3.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                            <li>
                                <div class="home-info-matter float-clear">
                                    <div class="info-matter-left">
                                        <img src="/Public/Home/image/jz4.png" alt="">
                                        <div class="info-matter-left-bot">
                                            <h4>奎文区歌德创业园举办金秋大型人才招聘会</h4>
                                            <p>9月23日上午，奎文区歌德创业园在万达广场举办歌德·智联2017金秋大型人才招聘会。本次招聘会由奎文区人社局主办，歌德创业园、奎文区工商联、北苑街办、东关街办、智联招聘、万达集团共同承办。</p>
                                        </div>
                                    </div>
                                    <div class="info-matter-right">
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
                            </li>
                        </ul>
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