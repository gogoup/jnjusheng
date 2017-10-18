<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册页面</title>
    <link rel="stylesheet" href="/Public/Home/css/common.css">
    <link rel="stylesheet" href="/Public/Home/css/commonPerson.css">
    <link rel="stylesheet" href="/Public/Home/css/register.css">
    <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/common.js"></script>
    <!--时间选择-->
    <script type="text/javascript" src="/Public/Home/js/calendar.js"></script>
    <!--省市区三级联动-->
    <script type="text/javascript" src="/Public/Home/js/city.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="commonP-header">
        <div class="common-middle float-clear">
            <div class="commonP-header-left float-clear">
                <img src="/Public/Home/image/logo.png" alt=""><p>欢迎注册</p>
            </div>
            <a class="commonP-header-right" href="<?php echo U('Index/index');?>">返回首页</a>
        </div>
    </div>
    <div class="register-content">
        <div class="register-con common-middle">
            <h3>注册山东理工职业学院创业孵化平台会员</h3>
            <div class="register-con-tab">
                <a href="javascript:void(0)">个人</a>
                <a href="javascript:void(0)">企业</a>
            </div>
            <div class="register-con-detail float-clear">
                <div class="register-con-left">
                    <form action="">
                        <ul class="float-clear">
                            <li class="register-module">
                                <span>基本信息</span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>用户名：</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>密码：</span><input type="password">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>确认密码：</span><input type="password">
                            </li>
                            <li class="float-clear">
                                <span><i>*</i>邮箱：</span><input type="email">
                            </li>

                            <li class=" float-clear">
                                <span><i>*</i>联系方式：</span><input type="text">
                            </li>
                            <li class="float-clear register-address">
                                <span><i>*</i>地址：</span>
                                <select id="s_province" name="s_province"></select>  
                                <select id="s_city" name="s_city" ></select> 
                                <select id="s_county" name="s_county"></select>
                                <input type="text">
                            </li>
                            <li class="">
                                <button>提&nbsp;&nbsp;交</button>
                            </li>
                            <li class="float-clear register-box">
                                <input type="checkbox"><p>我已经阅读同意<a href="#">《山东理工职业学院创业平台》</a></p>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="register-con-left">
                    <form action="">
                        <ul class="float-clear">
                            <li class="register-module">
                                <span>基本信息</span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>用户名：</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>密码：</span><input type="password">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>确认密码：</span><input type="password">
                            </li>
                            <li class="register-module">
                                <span>单位信息</span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>单位全称：</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>组织机构代码：</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span>法人代表：</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>公司成立日期：</span><div  id='date' style="width:200px;height:31px;float: left;border:1px solid #a9a9a9;
line-height:31px;padding-left:10px;">请选择时间</div>
                            </li>
                            <li class=" float-clear register-money">
                                <span><i>*</i>注册资金：</span><input type="text"><span>&nbsp;万人民币</span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>单位性质：</span>
                                <select name="" id="">
                                    <option value="#">请选择</option>
                                    <option value="#">国家机关/事业单位</option>
                                    <option value="#">国有企业/上市公司</option>
                                    <option value="#">民营/私营/个体/非上市公司</option>
                                    <option value="#">外企代表处</option>
                                    <option value="#">外商独资（欧美）</option>
                                    <option value="#">外商独资（非欧美）</option>
                                    <option value="#">其他</option>
                                </select>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>机构类型：</span>
                                <select name="" id="">
                                    <option value="#">请选择</option>
                                    <option value="#">企业法人</option>
                                    <option value="#">企业非法人</option>
                                    <option value="#">事业法人</option>
                                    <option value="#">事业非法人</option>
                                    <option value="#">社团法人</option>
                                    <option value="#">社团非法人</option>
                                </select>
                            </li>
                            <li class="register-phone1 float-clear">
                                <span><i>*</i>办公电话：</span><input type="text"><span>&nbsp;——&nbsp;&nbsp;</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>联系部门：</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span> <i>*</i>联系人：</span><input type="text">
                            </li>
                            <li class="float-clear">
                                <span><i>*</i>手机：</span><input type="text">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>联系人邮箱：</span><input type="email">
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>办公地址：</span>
                                <div class="outer">
                                    <select name="province" id="province">
                                        <option value="请选择">请选择</option>
                                    </select>
                                    <select name="city" id="city">
                                        <option value="请选择">请选择</option>
                                    </select>
                                    <select name="town" id="town">
                                        <option value="请选择">请选择</option>
                                    </select>
                                </div>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>公司简介：</span><textarea name="" id="" cols="30" rows="10"></textarea>
                            </li>
                            <li class="">
                                <button>提&nbsp;&nbsp;交</button>
                            </li>
                            <li class="float-clear register-box">
                                <input type="checkbox"><p>我已经阅读同意<a href="#">《山东理工职业学院创业平台》</a></p>
                            </li>
                        </ul>
                    </form>

                </div>
                <div class="register-con-right">
                    <p>我已注册，现在就<a href="<?php echo U('Login/login');?>">登录</a></p>
                </div>
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
<script type="text/javascript">

    _init_area();
</script>
<script type="text/javascript">

    var Gid  = document.getElementById ;

    var showArea = function(){

        Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +

                Gid('s_city').value + " - 县/区" +

                Gid('s_county').value + "</h3>"

    }

    Gid('s_county').setAttribute('onchange','showArea()');


</script>

<script type="text/javascript" src="/Public/Home/js/area.js"></script>
<script type="text/javascript" src="/Public/Home/js/select.js"></script>
<script>
    $('#date').on('click',function(){
        new Calendar({id:'#date',class:'amd',callback:function(y,m,d){
            if(arguments.length>1){
                $('#date').html(y+'-'+m+'-'+d);
            }

        }
        })
    })
</script>
</body>
</html>