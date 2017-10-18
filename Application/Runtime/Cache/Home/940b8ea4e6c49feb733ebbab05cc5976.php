<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>error页面</title>
<link href="/Public/Home/css/pintuer.css" rel="stylesheet"/>
<style>
*{ margin:0; padding:0; list-style:none;}
table{border-collapse:collapse;border-spacing:0;}
body,html{ height:100%; font-family:'微软雅黑'; overflow-y:hidden;}
.main{ width:60%; margin-left:20%; margin-right:20%; margin-top:10%;}
.main_left{ width:38%; margin-left:12%; margin-top:10%; float:left;}
.main_right{width:50%; float:left;}
.main_radius{ padding-top:4%; width:75%; height:130px; border-radius:50%; background:#fef2ec; font-size:14px;text-align:center;}
.main_p{ font-family:'华文行楷';}
</style>
</head>

<body>
<div class="main">
   <div class="main_left"><img src="/Public/Home/image/img2.png" width="229" height="128"/></div>
   <div class="main_right">
      <div class="main_radius">
         <p class="main_p">sorry</p>
         <p class="main_p">您输入的用户名或密码错误</p>
         <p class="main_p">页面将在<span id="jumpTo">5</span>秒后自动跳转</p>
      </div>
      <div class="text-left" style="margin-top:10%; margin-left:8%;">     
          <a href="<?php echo U('Login/login');?>" class="button bg-yellow">返回登录</a>
          <a href="" class="button">保证不打死管理员</a> 
      </div>
   </div>
</div>
</body>
<script type="text/javascript"> 
function countDown(secs,surl){ 
 var jumpTo = document.getElementById('jumpTo');
 jumpTo.innerHTML=secs; 
 if(--secs>0){ 
  setTimeout("countDown("+secs+",'"+surl+"')",1000); 
 }
 else
 {  
  location.href=surl; 
 } 
}
countDown(100,"<?php echo U('Login/login');?>");
</script>
</html>