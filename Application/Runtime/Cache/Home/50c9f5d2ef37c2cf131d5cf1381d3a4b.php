<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录页</title>
    <link rel="stylesheet" type="text/css" href="/Public/Common/jquery-easyui/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="/Public/Common/jquery-easyui/themes/icon.css">
	<script type="text/javascript" src="/Public/Common/jquery-easyui/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/Common/jquery-easyui/jquery.easyui.min.js"></script>
    <!-- <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script> -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

        a{
            text-decoration:none;
            color:#333333;
        }
        input,button{
            outline:none;
        }
        /*登录样式*/
        .common-login{
            width:600px;
            background:#ffffff;
            position: fixed;
            z-index:4;
            top:260px;
            left:30%;
            min-height:350px;
            border:1px solid #ededed;
        }
        .common-login-content{
            padding:20px 0;
        }
        .common-login-content p{
            font-size:18px;
            line-height:78px;
            text-align:center;
        }
        .common-login-content form{
            width:50%;
            margin:0 auto;
        }
        .common-login-content form input{
            padding:10px 0 10px  10px;
            font-size:14px;
            margin-bottom:14px;
            width:100%;
            display:block;
            border:1px solid #ededed;
            border-radius: 3px;
        }
        .common-login-content form button{
            width:100%;
            background:#002772;
            border:1px solid #002772;
            font-size:18px;
            line-height:36px;
            margin-top:26px;
            color:#ffffff;
            text-align: center;
            display:block;
            padding-left:10px;
            border-radius: 3px;
        }
        .common-login-bottom{
            position:absolute;
            right:8px;
            top:318px;
        }
        .common-login-bottom a{
            font-size:12px;
            margin-right:10px;
        }
    </style>
</head>
<body>
<div class="common-login">
    <div class="common-login-content">
        <p>登录入口</p>
        <form action="" method="post">
            <input type="text" id="user" placeholder="请输入您的用户名">
            <input type="password" id="pwd" placeholder="密码">
            <button type="button" id="button">登&nbsp;&nbsp;录</button>
        </form>
    </div>
    <div class="common-login-bottom">
        <a href="#">忘记密码</a>
        <a href="<?php echo U('Register/register');?>">注册账号</a>
    </div>
</div>
</body>
</html>
<script>
//登录按钮绑定点击事件
$('#button').click(function(){
	//判断表单是否为空
	if($('#user').val()==''||$('#pwd').val()==''){
		$.messager.alert('提示','您输入的用户名或密码不能为空!','info');
	}else{
		//获取表单的值
		var username=$('#user').val();
		var pwd=$('#pwd').val();
		//将表单的值传送到后台控制器进行处理
		$.ajax({
			'url':"<?php echo U('Login/checkLogin');?>",
			'type':'post',
			'data':{'user':username,'pwd':pwd},
			'dataType':'text',
			'success':function(msg){
				//如果返回值小于1则表示用户名或密码不正确
				if(msg<1){
					$.messager.alert('提示','您输入的用户名或密码错误','info');
					$('#user').val('');
					$('#pwd').val('');
				}else{
					//成功登录则跳转到指定页面
					location.href="<?php echo U('Index/index');?>";
				}
			}
		});
	}
});
</script>