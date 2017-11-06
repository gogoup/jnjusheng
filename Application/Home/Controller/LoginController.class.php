<?php
namespace Home\Controller;
class LoginController extends BaseController {
    //展示登录页面
    public function login(){
        $this->display();      
    }
    //验证用户登录信息
    public function checkLogin(){
        //接收数据
	    $name = I('post.user');
	    $password = I('post.pwd');
	    //实例化User模型
	    $user = D('User');
	    //判断用户是否登录成功
	    if($user->checkLogin($name,$password)){ 
	        $time=date("Y-m-d",time()); 
	        $ip = $_SERVER['REMOTE_ADDR'];
	        $data=array(
	            'user_id'=>session('uid'),
	            'last_time'=>$time,
	            'last_ip'=>$ip
	        );
	        $user->save($data);
	        echo '1';
	    }else{
	        echo '0';
	    }
	}
}
