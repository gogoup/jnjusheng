<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
    //验证用户信息
    function checkLogin($name,$password){
        //查询该用户是否存在
        $user_info = $this->where("user_name='$name'")->find();
        if(empty($user_info)){
            return false;
        }
        //判断用户名和密码是否一致
        if($user_info['user_name'] == $name && $user_info['user_pwd'] == md5($password)){
            //将用户信心保存到session中
            session('uid',$user_info['user_id']);
            session('uname',$user_info['user_name']);
            session('urole',$user_info['user_role']);
            session('ustate',$user_info['user_state']);
            session('last_ip',$user_info['last_ip']);
            session('last_time',$user_info['last_time']);
            return true;
        }else{
            return false;
        }
    }
}