<?php
//封装请求方法
function request($url,$https=true,$method='get',$data=null){
  //1.初始化url
  $ch = curl_init($url);
  //2.设置请求参数
  //把数据以文件流形式保存，而不是直接输出
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //支持http和https协议
  //https协议  ssl证书
  //绕过证书验证
  if($https === true){
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  }
  //支持post请求
  if($method === 'post'){
    curl_setopt($ch, CURLOPT_POST, true);
    //发送的post数据
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  }
  //3.发送请求
  $content = curl_exec($ch);
  //4.关闭请求
  curl_close($ch);
  return $content;
}
//邮件发送测试方法
function sendMail($subject,$msghtml,$sendAddress){
  //引入发送类phpmailer.php
  require './PHPMailer/class.phpmailer.php';
  //实列化对象
  $mail             = new PHPMailer();
  /*服务器相关信息*/
  $mail->IsSMTP();                        //设置使用SMTP服务器发送
  $mail->SMTPAuth   = true;              //开启SMTP认证
  $mail->Host       = 'smtp.163.com';         //设置 SMTP 服务器,自己注册邮箱服务器地址
  $mail->Username   = 'xiaoxing137911';      //发信人的邮箱用户名
  $mail->Password   = 'xing123'; //新注册邮箱，客户端授权码
  /*内容信息*/
  $mail->IsHTML(true);               //指定邮件内容格式为：html
  $mail->CharSet    ="UTF-8";          //编码
  $mail->From       = 'xiaoxing137911@163.com';       //发件人完整的邮箱名称
  $mail->FromName   ="天突突突";      //发信人署名
  $mail->Subject    = $subject;         //信的标题
  $mail->MsgHTML($msghtml);           //发信主体内容
  // $mail->AddAttachment("fish.jpg");      //附件
  /*发送邮件*/
  $mail->AddAddress($sendAddress);        //收件人地址
  //使用send函数进行发送
  if($mail->Send()) {
      //发送成功返回真
      return true;
     // echo '您的邮件已经发送成功！！！';
  } else {
     return  $mail->ErrorInfo;//如果发送失败，则返回错误提示
  }
}
//连接redis
function linkRedis(){
  $redis = new Redis();
  $redis->connect('127.0.0.1',6379);
  return $redis;
}