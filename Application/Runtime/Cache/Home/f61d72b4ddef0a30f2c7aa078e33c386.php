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
    <script src="/Public/Common/layui/layui.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Common/layui/css/layui.css">
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
                    <form action="" id="register_form" method="post">
                        <ul class="float-clear">
                            <li class="register-module">
                                <span>基本信息</span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>用户名：</span><input placeholder="用户名只能包含大小写字母、数字" name="username" id="user1" type="text">
                                <span class="user1-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="user1-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>密码：</span><input placeholder="只能包含大小写字母、数字和下划线" name="password" id="pwd1" type="password"">
                            	<span class="pwd1-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="pwd1-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>确认密码：</span><input placeholder="只能包含大小写字母、数字和下划线" name="repwd" id="repwd1" type="password">
                            	<span class="repwd1-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="repwd1-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class="register-module">
                                <span>详细信息</span>
                            </li>
                            <li class="float-clear">
                                <span><i>*</i>姓名：</span><input placeholder="请输入真实姓名" name="name" id="name1" type="text">
                                <span class="name1-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="name1-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class="float-clear">
                                <span><i>*</i>性别：</span>
                                <label><input name="sex" type="radio" value="1" checked="checked"/>男 </label> 
                                <label><input name="sex" type="radio" value="2" />女 </label>
                            </li>
                            <li class="float-clear">
                                <span><i>*</i>邮箱：</span><input placeholder="请输入邮箱" name="mail" id="email1" type="email">
                                <span class="email1-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="email1-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>

                            <li class=" float-clear">
                                <span><i>*</i>联系方式：</span><input placeholder="请输入手机号" name="tel" id="tel1" type="text">
                                <span class="tel1-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="tel1-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class="float-clear">
                                <span><i>*</i>身份证号：</span><input placeholder="请输入身份证号" name="card" id="card" type="text">
                                <span class="card-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="card-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class="float-clear register-address">
                                <span><i>*</i>地址：</span>
                                <select id="s_province" name="s_province"></select>  
                                <select id="s_city" name="s_city" ></select> 
                                <select id="s_county" name="s_county"></select>
                                <input id="addr" name="addr" type="text">
                                <span class="addr-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="addr-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li>
                            	<span><i>*</i>身份证正面：</span>
                            	
                            	<button type="button" class="layui-btn" id="test1">上传图片</button>
  								<div class="layui-upload-list">
    							<img class="layui-upload-img" id="demo1">
   								<p id="demoText"></p>
  								</div> 
							</li>
							<li>
                            	<span><i>*</i>身份证反面：</span>
                            	
                            	<button type="button" class="layui-btn" id="test2">上传图片</button>
  								<div class="layui-upload-list">
    							<img class="layui-upload-img" id="demo2">
   								<p id="demoText2"></p>
  								</div> 
							</li>
                            <li class="">
                                <button class="register" type="button">提&nbsp;&nbsp;交</button>
                            </li>
                            <li class="float-clear register-box">
                                <input class="xieyi" type="checkbox" checked="checked"><p>我已经阅读同意<a href="#">《山东理工职业学院创业平台》</a></p>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="register-con-left">
                    <form action="" id="reg_form" method="post">
                        <ul class="float-clear">
                            <li class="register-module">
                                <span>基本信息</span>
                            </li>
                           <li class=" float-clear">
                                <span><i>*</i>用户名：</span><input placeholder="用户名只能包含大小写字母、数字" name="username" id="user2" type="text">
                                <span class="user2-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="user2-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>密码：</span><input placeholder="只能包含大小写字母、数字和下划线" name="password" id="pwd2" type="password">                            	<span class="pwd2-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="pwd2-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>确认密码：</span><input placeholder="只能包含大小写字母、数字和下划线" name="repwd" id="repwd2" type="password">
                            	<span class="repwd2-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="repwd2-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class="register-module">
                                <span>单位信息</span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>单位全称：</span><input id="company" name="company" placeholder="请输入单位名称" type="text">
                            	<span class="company-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="company-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>组织机构代码：</span><input id="company_card" name="company_card" placeholder="请输入组织机构代码" type="text">
                            	<span class="company_card-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="company_card-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                            	<span><i>*</i>法人代表：</span><input placeholder="请输入法人代表" name="lp" id="name2" type="text">
                                <span class="name2-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="name2-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>公司成立日期：</span><div  id='date' style="width:200px;height:31px;float: left;border:1px solid #a9a9a9;line-height:31px;padding-left:10px;">请选择时间</div>
                            </li>
                            <li class=" float-clear register-money">
                                <span><i>*</i>注册资金：</span><input id="fund" name="fund" placeholder="请输入注册资金" type="text"><span>&nbsp;万人民币</span>
                            	<span class="fund-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="fund-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>单位性质：</span>
                                <select name="nature_of_unit" id="nature_of_unit">
                                    <option value="#">请选择</option>
                                    <option value="国家机关/事业单位">国家机关/事业单位</option>
                                    <option value="国有企业/上市公司">国有企业/上市公司</option>
                                    <option value="民营/私营/个体/非上市公司">民营/私营/个体/非上市公司</option>
                                    <option value="外企代表处">外企代表处</option>
                                    <option value="外商独资（欧美）">外商独资（欧美）</option>
                                    <option value="外商独资（非欧美）">外商独资（非欧美）</option>
                                    <option value="其他">其他</option>
                                </select>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>机构类型：</span>
                                <select name="institutional" id="institutional">
                                    <option value="#">请选择</option>
                                    <option value="企业法人">企业法人</option>
                                    <option value="企业非法人">企业非法人</option>
                                    <option value="事业法人">事业法人</option>
                                    <option value="事业非法人">事业非法人</option>
                                    <option value="社团法人">社团法人</option>
                                    <option value="社团非法人">社团非法人</option>
                                </select>
                            </li>
                            <li class="register-phone1 float-clear">
                                <span><i>*</i>办公电话：</span><input id="tl" name="work_tel" placeholder="请输入办公电话" type="text"><span>&nbsp;&nbsp;</span>
                            	<span class="tl-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="tl-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                                <span><i>*</i>联系部门：</span><input id="department" name="department" placeholder="请输入联系部门" type="text">
                            	<span class="department-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="department-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                           		<span><i>*</i>联系人：</span><input placeholder="请输入联系人" name="contacts" id="name3" type="text">
                                <span class="name3-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="name3-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class="float-clear">
                            	<span><i>*</i>手机：</span><input placeholder="请输入手机号" name="contacts_tel" id="tel2" type="text">
                                <span class="tel2-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="tel2-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class=" float-clear">
                            	<span><i>*</i>联系人邮箱：</span><input placeholder="请输入邮箱" name="contents_email" id="email2" type="email">
                                <span class="email2-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="email2-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
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
                                <span><i>*</i>公司简介：</span><div style="float:left;"><textarea placeholder="请输入公司简介" name="company_intro" id="intro" cols="30" rows="10"></textarea></div>
                            	<span class="intro-error" style="display:none;padding-left:18px;margin-left:8px;height:16px;font-size:12px;line-height:16px;color:#ff0000;background:url(/Public/Home/image/error.png) no-repeat"></span>
                                <span class="intro-success" style="display:none;margin-left:8px;height:16px;background:url(/Public/Home/image/success.png) no-repeat"></span>
                            </li>
                            <li class="">
                                <button class="reg" type="button">提&nbsp;&nbsp;交</button>
                            </li>
                            <li class="float-clear register-box">
                                <input class="xieyi2" type="checkbox" checked="checked"><p>我已经阅读同意<a href="#">《山东理工职业学院创业平台》</a></p>
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
        });
    });
/********************************************* 个人信息的注册验证 ************************************************/ 
//用户名验证   
$('#user1').blur(function(){
	var value = $('#user1').val();
	var re = /^\w{4,12}$/;
	if(value == ''){
        $('.user1-error').html("用户名不能为空");
        $('.user1-error').show();
        $('.user1-success').hide();
        return false;
    }else if(!re.test(value)){
		$('.user1-error').html('用户名格式不正确');
    	$('.user1-error').show();
    	$('.user1-success').hide();
    	return false;
    }else{
    	$.post("<?php echo U('Register/checkName');?>",{name:value},function(msg){
			if(msg == 'false'){
   				$('.user1-error').html("用户名已存在");
   		        $('.user1-error').show();
   		        $('.user1-success').hide();
   		        return false;
   			}else{
   				$('.user1-error').hide();
   				$('.user1-success').show();
   				return true;
   			}
   		});
    }
})

//密码验证
$('#pwd1').blur(function(){
	var text = $('#pwd1').val();
	var re = /^[a-zA-Z0-9\%\@\#\.\$\^\&\*\!]{6,8}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.pwd1-error').html('登录密码不符合规则');
	     $('.pwd1-error').show();
	     $('.pwd1-success').hide();
	     return false;
	 }else{
		 $('.pwd1-error').hide();
		 $('.pwd1-success').show();
		 return true;
	 }
})

//确认两次输入的密码一致 
$('#repwd1').blur(function(){
	var value = $('#repwd1').val();
	 if(value != $('#pwd1').val() || value ==''){		 
		 $('.repwd1-error').html('密码和登录密码不统一');
	     $('.repwd1-error').show();
	     $('.repwd1-success').hide();
	     return false;
	 }else{
		 $('.repwd1-error').hide();
		 $('.repwd1-success').show();
		 return true;
	 }
})
//邮箱验证
$('#email1').blur(function(){
	var text = $('#email1').val();
	var re = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.email1-error').html('邮箱格式不正确');
	     $('.email1-error').show();
	     $('.email1-success').hide();
	     return false;
	 }else{
		 $('.email1-error').hide();
		 $('.email1-success').show();
		 return true;
	 }
})

//姓名验证
$('#name1').blur(function(){
	var text = $('#name1').val();
	var re = /^[\u4e00-\u9fa5]{2,4}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.name1-error').html('请输入真实有效的姓名');
	     $('.name1-error').show();
	     $('.name1-success').hide();
	     return false;
	 }else{
		 $('.name1-error').hide();
		 $('.name1-success').show();
		 return true;
	 }
})

//手机号验证
$('#tel1').blur(function(){
	var text = $('#tel1').val();
	var re = /^1[34578]\d{9}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.tel1-error').html('请输入真实有效的手机号');
	     $('.tel1-error').show();
	     $('.tel1-success').hide();
	     return false;
	 }else{
		 $('.tel1-error').hide();
		 $('.tel1-success').show();
		 return true;
	 }
})
//地址验证
$('#addr').blur(function(){
	 var value = $('#addr').val();
	 if(value == ''){		 
		 $('.addr-error').html('请输入详细的地址信息');
	     $('.addr-error').show();
	     $('.addr-success').hide();
	     return false;
	 }else{
		 $('.addr-error').hide();
		 $('.addr-success').show();
		 return true;
	 }
})

//身份证号验证
$('#card').blur(function(){
	var text = $('#card').val();
	var re = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.card-error').html('请输入真实有效的身份证号');
	     $('.card-error').show();
	     $('.card-success').hide();
	     return false;
	 }else{
		 $('.card-error').hide();
		 $('.card-success').show();
		 return true;
	 }
})

//验证表单不能有空项
$('.register').on('click',function(){
        if(!$('.xieyi').is(':checked')){
        	layui.use('layer', function(){
        		  var layer = layui.layer;
        		  layer.alert('请同意山东理工职业学院创业平台协议');
        		});  
            return false;
        }else {
            $.post("<?php echo U('Register/reg_handle');?>", $('#register_form').serialize(), function (data) {
                console.log(data);
                if (data.error_code!='E08') {
                	layui.use('layer', function(){
              		  var layer = layui.layer;
              		  layer.alert(data.message);
              		});
                    return false;
                }else{
                    window.location.href = "<?php echo U('Login/login');?>";
                }
            },'json');
        }
    });
/********************************************************* 个人信息的注册验证结束 *******************************************/
/********************************************************* 企业信息的注册验证开始 *******************************************/

//用户名验证   
$('#user2').blur(function(){
	var value = $('#user2').val();
	var re = /^\w{4,12}$/;
	if(value == ''){
        $('.user2-error').html("用户名不能为空");
        $('.user2-error').show();
        $('.user2-success').hide();
        return false;
    }else if(!re.test(value)){
		$('.user2-error').html('用户名格式不正确');
    	$('.user2-error').show();
    	$('.user2-success').hide();
    	return false;
    }else{
    	$.post("<?php echo U('Register/checkName');?>",{name:value},function(msg){
			if(msg == 'false'){
   				$('.user2-error').html("用户名已存在");
   		        $('.user2-error').show();
   		        $('.user2-success').hide();
   		        return false;
   			}else{
   				$('.user2-error').hide();
   				$('.user2-success').show();
   				return true;
   			}
   		});
    }
})

//密码验证
$('#pwd2').blur(function(){
	var text = $('#pwd2').val();
	var re = /^[a-zA-Z0-9\%\@\#\.\$\^\&\*\!]{6,8}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.pwd2-error').html('登录密码不符合规则');
	     $('.pwd2-error').show();
	     $('.pwd2-success').hide();
	     return false;
	 }else{
		 $('.pwd2-error').hide();
		 $('.pwd2-success').show();
		 return true;
	 }
})

//确认两次输入的密码一致 
$('#repwd2').blur(function(){
	var value = $('#repwd2').val();
	 if(value != $('#pwd2').val() || value ==''){		 
		 $('.repwd2-error').html('密码和登录密码不统一');
	     $('.repwd2-error').show();
	     $('.repwd2-success').hide();
	     return false;
	 }else{
		 $('.repwd2-error').hide();
		 $('.repwd2-success').show();
		 return true;
	 }
})
//邮箱验证
$('#email2').blur(function(){
	var text = $('#email2').val();
	var re = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.email2-error').html('邮箱格式不正确');
	     $('.email2-error').show();
	     $('.email2-success').hide();
	     return false;
	 }else{
		 $('.email2-error').hide();
		 $('.email2-success').show();
		 return true;
	 }
})

//法人代表验证
$('#name2').blur(function(){
	var text = $('#name2').val();
	var re = /^[\u4e00-\u9fa5]{2,4}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.name2-error').html('请输入真实有效的姓名');
	     $('.name2-error').show();
	     $('.name2-success').hide();
	     return false;
	 }else{
		 $('.name2-error').hide();
		 $('.name2-success').show();
		 return true;
	 }
})
//联系人验证
$('#name3').blur(function(){
	var text = $('#name3').val();
	var re = /^[\u4e00-\u9fa5]{2,4}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.name3-error').html('请输入真实有效的姓名');
	     $('.name3-error').show();
	     $('.name3-success').hide();
	     return false;
	 }else{
		 $('.name3-error').hide();
		 $('.name3-success').show();
		 return true;
	 }
})
//联系部门验证
$('#department').blur(function(){
	var text = $('#department').val();
	var re = /^[\u4e00-\u9fa5]+$/;
	var result = re.test(text);
	 if(result){
		 $('.department-error').hide();
		 $('.department-success').show();
		 return true;
	 }else{
		 $('.department-error').html('请填写正确的部门信息');
	     $('.department-error').show();
	     $('.department-success').hide();
	     return false;
	 }
})
//手机号验证
$('#tel2').blur(function(){
	var text = $('#tel2').val();
	var re = /^1[34578]\d{9}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.tel2-error').html('请输入真实有效的手机号');
	     $('.tel2-error').show();
	     $('.tel2-success').hide();
	     return false;
	 }else{
		 $('.tel2-error').hide();
		 $('.tel2-success').show();
		 return true;
	 }
})
//单位验证
$('#company').blur(function(){
	var text = $('#company').val();
	var re = /^[\u4e00-\u9fa5]+$/;
	var result = re.test(text);
	 if(result){
		 $('.company-error').hide();
		 $('.company-success').show();
		 return true;
	 }else{
		 $('.company-error').html('请填写正确的单位信息');
	     $('.company-error').show();
	     $('.company-success').hide();
	     return false;
	 }
})
//注册资金验证
$('#fund').blur(function(){
	var text = $('#fund').val();
	var re = /^[0-9]*$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.fund-error').html('请填写数字');
	     $('.fund-error').show();
	     $('.fund-success').hide();
	     return false;
	 }else{
		 $('.fund-error').hide();
		 $('.fund-success').show();
		 return true;
	 }
})
//组织机构代码验证
$('#company_card').blur(function(){
	var text = $('#company_card').val();
	var re = /[a-zA-Z0-9]{8}-[a-zA-Z0-9]/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.company_card-error').html('请填写正确的组织机构代码');
	     $('.company_card-error').show();
	     $('.company_card-success').hide();
	     return false;
	 }else{
		 $('.company_card-error').hide();
		 $('.company_card-success').show();
		 return true;
	 }
})
//办公电话验证
$('#tl').blur(function(){
	var text = $('#tl').val();
	var re = /^0\d{2,3}-?\d{7,8}$/;
	var result = re.test(text);
	 if(!result || text == ''){		 
		 $('.tl-error').html('请填写正确的办公电话');
	     $('.tl-error').show();
	     $('.tl-success').hide();
	     return false;
	 }else{
		 $('.tl-error').hide();
		 $('.tl-success').show();
		 return true;
	 }
})
//公司简介验证
$('#intro').blur(function(){
	var value = $('#intro').val();
	if(value == ''){
        $('.intro-error').html("不能为空");
        $('.intro-error').show();
        $('.intro-success').hide();
        return false;
    }else{
        $('.intro-error').hide();
        $('.intro-success').show();
        return false;
    }
})
//验证表单不能有空项
$('.reg').on('click',function(){
	var funding_time = $('#date').text();
    if(!$('.xieyi2').is(':checked')){
    	layui.use('layer', function(){
    		  var layer = layui.layer;
    		  layer.alert('请同意山东理工职业学院创业平台协议');
    		});  
        return false;
    }else {
        $.post("<?php echo U('Register/reg');?>", $('#reg_form').serialize()+"&"+"time="+funding_time, function (data) {
            console.log(data);
            if (data.error_code!='E15') {
            	layui.use('layer', function(){
          		  var layer = layui.layer;
          		  layer.alert(data.message);
          		});
                return false;
            }else{
                window.location.href = "<?php echo U('Login/login');?>";
            }
        },'json');
    }
});

/*********************************************************企业信息的注册验证结束 *******************************************/
//文件上传
layui.use('upload', function(){
  var $ = layui.jquery
  ,upload = layui.upload;
  
  //普通图片上传
  var uploadInst = upload.render({
    elem: '#test1'
    ,url: '<?php echo U('upload');?>'
    ,data: {id:1}
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        $('#demo1').attr('src', result); //图片链接（base64）
      });
    }
    ,done: function(res){
      //如果上传失败
      if(res.code > 0){
        return layer.msg(res.message);
      }else{
    	return layer.msg(res.message);
      }
      //上传成功
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  });
})
layui.use('upload', function(){
  var $ = layui.jquery
  ,upload = layui.upload;
  
  //普通图片上传
  var uploadInst = upload.render({
    elem: '#test2'
    ,url: '<?php echo U('upload');?>'
    ,data: {id:2}
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        $('#demo2').attr('src', result); //图片链接（base64）
      });
    }
    ,done: function(res){
      //如果上传失败
      if(res.code > 0){
        return layer.msg(res.message);
      }else{
    	return layer.msg(res.message);
      }
      //上传成功
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText2');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  });
})
</script>
</body>
</html>