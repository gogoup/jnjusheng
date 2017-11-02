<?php
namespace Home\Controller;
class RegisterController extends BaseController {
    //展示登录页面
    public function register(){
        $this->display();      
    }
    //用户名验证
    public function checkName(){
        $username = I('post.name');
        if(D('User')->where("user_name = '$username'")->find()){
            echo 'false';
        }
    }
    //个人信息数据及处理
    public function reg_handle(){
        //接受表单信息
        $state = 1;
        $user_info1['salt']=md5(time());
        $salt = $user_info1['salt'];
        $user1['user_name']=I('post.username');
        $user1['user_pwd']=md5(I('post.password'));
        $user1['user_state']=1;
        $user1['user_role']=1;
        $user_info1['name']=I('post.name');
        $user_info1['email']=I('post.mail');
        $user_info1['tel']=I('post.tel');
        $user_info1['sex']=I('post.sex');
        $user_info1['card_no']=I('post.card');
        $user_info1['add']=I('s_province').I('s_city').I('s_county').I('addr');
        $user_info1['card1']=session('card1');
        $user_info1['card2']=session('card2');
        $user = D('User');
        //验证表单不能为空
        if($user_info1['sex'] == '' || $user_info1['add'] == '' || $user_info1['card1'] == '' || $user_info1['card2'] == '' || I('post.username')=='' || I('post.password')=='' || I('post.repwd')=='' || I('post.name')=='' || I('post.mail')=='' || I('post.tel')=='' || I('post.card')==''){
            $arr = Array(
                error_code=>E01,
                message=>不能为空
                );
            echo json_encode($arr);
        }else if(!preg_match('/^\w{4,12}$/', I('post.username'))){
            $arr = Array(
                error_code=>E02,
                message=>用户名不正确
                );
            echo json_encode($arr);
        }else if(D('User')->where("user_name = '$user1[user_name]'")->find()){
            $arr = Array(
                error_code=>E10,
                message=>用户名已存在
                );
            echo json_encode($arr);
        }else if(!preg_match('/^[a-zA-Z0-9\%\@\#\.\$\^\&\*\!]{6,8}$/', I('post.password'))){
            $arr = Array(
                error_code=>E03,
                message=>密码不符合规则
                );
            echo json_encode($arr);
        }else if(I('post.password') != I('post.repwd')){
            $arr = Array(
                error_code=>E09,
                message=>两次输入的密码不一样
                );
            echo json_encode($arr);
        }else if(!preg_match('/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/', I('post.name'))){
            $arr = Array(
                error_code=>E05,
                message=>姓名不正确
                );
            echo json_encode($arr);
        }else if(!preg_match('/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/', I('post.mail'))){
            $arr = Array(
                error_code=>E04,
                message=>邮箱格式不正确
                );
            echo json_encode($arr);
        }else if(!preg_match('/^1[34578]\d{9}$/', I('post.tel'))){
            $arr = Array(
                error_code=>E06,
                message=>手机号不正确
                );
            echo json_encode($arr);
        }else if(!preg_match('/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/', I('post.card'))){
            $arr = Array(
                error_code=>E07,
                message=>身份证号不正确
                );
            echo json_encode($arr);
        }else{ 
            if($user_id=$user->add($user1)){
                $user_info1['user_id']=$user_id;
                $user_info=D('User_info');
                if($rs = $user_info->add($user_info1)){
                    $sendRs = sendMail("感谢您注册本网站","请前往<a href='http://localhost/index.php/Home/Register/active/id/$rs/salt/$salt/state/$state'>点击一下链接进行激活</a>",$user_info1['email']);
                    if($sendRs===true){
                        $arr = Array(
                            error_code=>E08,
                            message=>正确
                            );
                        echo json_encode($arr);
                    }else{
                        $arr = Array(
                            error_code=>E11,
                            message=>注册失败
                            );
                        echo json_encode($arr);
                    }
                }
            }
            
        }
    }
    //文件上传处理
    public function upload(){
        $id = I('post.id');
        $config = array(
            'maxSize' => 5000000,
            'exts' => array('jpg','png','gif'),
            'rootPath' => './Public/Upload/',
            'subName'  =>  array('date', 'Ymd'),
        );
        $upload = new \Think\Upload($config);
        $info = $upload->upload();
        if(!$info){
            $msg = $upload->getError();
            $arr = Array(
                code=>1,
                message=>$msg
                );
            echo json_encode($arr);
        }else{
            $filepath = ltrim($upload->rootPath,'.') . $info['file']['savepath'] . $info['file']['savename'];
            if($id==1){
                session('card1',$filepath);
            }else if($id==2){
                session('card2',$filepath);
            }else{
                session('license',$filepath);
            }
            $arr = Array(
                code=>0,
                message=>上传成功
                );
            echo json_encode($arr);
           
        }
    }
    //企业信息数据及处理
    public function reg(){
        //接受表单信息
        $state = 2;
        $user_estp1['salt']=md5(time());
        $salt = $user_estp1['salt'];
        $user1['user_name']=I('post.username');
        $user1['user_pwd']=md5(I('post.password'));
        $repwd = I('post.repwd');
        $user1['user_state']=1;
        $user1['user_role']=1;
        $user_estp1['license']=session('license');
        $user_estp1['company']=I('post.company');
        $user_estp1['company_card']=I('post.company_card');
        $user_estp1['registered_fund']=I('post.fund');
        $user_estp1['founding_time']=I('post.time');
        $user_estp1['nature_of_unit']=I('post.nature_of_unit');
        $user_estp1['legal_person']=I('lp');
        $user_estp1['institutional']=I('post.institutional');
        $user_estp1['work_tel']=I('post.work_tel');
        $user_estp1['department']=I('post.department');
        $user_estp1['contacts']=I('post.contacts');
        $user_estp1['contacts_tel']=I('post.contacts_tel');
        $user_estp1['contents_email']=I('post.contents_email');
        $user_estp1['company_intro']=I('post.company_intro');
        $user_estp1['company_add']=I('province').I('city').I('town');
        $user = D('User');
        //验证表单不能为空
        if($user1['user_name'] == '' || $user1['user_pwd'] == '' || $repwd =='' || $user_estp1['company'] == '' || $user_estp1['company_card'] == '' || $user_estp1['registered_fund'] == '' || $user_estp1['founding_time']=='' || $user_estp1['nature_of_unit'] == '' || $user_estp1['legal_person'] == '' || $user_estp1['institutional'] == '' || $user_estp1['work_tel'] == '' || $user_estp1['department'] == '' || $user_estp1['contacts'] =='' || $user_estp1['contacts_tel'] == '' || $user_estp1['contents_email'] =='' || $user_estp1['company_intro'] == '' || $user_estp1['company_add'] == ''){
            $arr = Array(
                error_code=>E01,
                message=>不能为空
                );
            echo json_encode($arr);
        }else if(!preg_match('/^\w{4,12}$/', $user1['user_name'])){
            $arr = Array(
                error_code=>E02,
                message=>用户名不正确
                );
            echo json_encode($arr);
        }else if(D('User')->where("user_name = '$user1[user_name]'")->find()){
            $arr = Array(
                error_code=>E03,
                message=>用户名已存在
                );
            echo json_encode($arr);
        }else if(!preg_match('/^[a-zA-Z0-9\%\@\#\.\$\^\&\*\!]{6,8}$/', I('post.password'))){
            $arr = Array(
                error_code=>E04,
                message=>密码不符合规则
                );
            echo json_encode($arr);
        }else if(I('post.password') != $repwd){
            $arr = Array(
                error_code=>E05,
                message=>两次输入的密码不一样
                );
            echo json_encode($arr);
        }else if(!preg_match('/^[\x7f-\xff]+$/', $user_estp1['company'])){
            $arr = Array(
                error_code=>E06,
                message=>请输入正确的单位信息
                );
            echo json_encode($arr);
        }else if(!preg_match('/[a-zA-Z0-9]{8}-[a-zA-Z0-9]/', $user_estp1['company_card'])){
            $arr = Array(
                error_code=>E07,
                message=>请填写正确的组织机构代码
                );
            echo json_encode($arr);
        }else if(!preg_match('/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/', $user_estp1['legal_person'])){
            $arr = Array(
                error_code=>E08,
                message=>请正确填写法人代表
                );
            echo json_encode($arr);
        }else if(!preg_match('/^[0-9]*$/', $user_estp1['registered_fund'])){
            $arr = Array(
                error_code=>E09,
                message=>请填写数字
                );
            echo json_encode($arr);
        }else if(!preg_match('/^0\d{2,3}-?\d{7,8}$/', $user_estp1['work_tel'])){
            $arr = Array(
                error_code=>E10,
                message=>请输入正确的办公电话
                );
            echo json_encode($arr);
        }else if(!preg_match('/^[\x7f-\xff]+$/', $user_estp1['department'])){
            $arr = Array(
                error_code=>E11,
                message=>请输入正确的部门信息
                );
            echo json_encode($arr);
        }else if(!preg_match('/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/', $user_estp1['contacts'])){
            $arr = Array(
                error_code=>E12,
                message=>请输入有效的真实姓名
                );
            echo json_encode($arr);
        }else if(!preg_match('/^1[34578]\d{9}$/', $user_estp1['contacts_tel'])){
            $arr = Array(
                error_code=>E13,
                message=>手机号不正确
                );
            echo json_encode($arr);
        }else if(!preg_match('/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/', $user_estp1['contents_email'])){
            $arr = Array(
                error_code=>E14,
                message=>邮箱格式不正确
                );
            echo json_encode($arr);
        }else{
            if($user_id=$user->add($user1)){
                $user_estp1['user_id']=$user_id;
                $user_estp=D('User_estp');
                if($rs = $user_estp->add($user_estp1)){
                    $sendRs = sendMail("感谢您注册本网站","请前往<a href='http://localhost/index.php/Home/Register/active/id/$rs/salt/$salt/state/$state'>点击一下链接进行激活</a>",$user_estp1['contents_email']);
                    if($sendRs===true){
                        $arr = Array(
                            error_code=>E15,
                            message=>正确
                            );
                        echo json_encode($arr);
                    }else{
                        $arr = Array(
                            error_code=>E16,
                            message=>注册失败
                            );
                        echo json_encode($arr);
                    }
                }
            }
    
        }
    }
    //激活用户操作
    public function active(){
        //接受用户ID
        $id = I('get.id');
        $salt = I('get.salt');
        $state = I('get.state');
        if($state == 1){
            //判断是否为非法激活
            $activeData = M('User_info')->where("salt='$salt'")->find();
            if(empty($activeData)){
                echo "非法激活，你再试我就报警了";
                exit();
            }
            //根据ID查询到信息，修改用户的active字段
            $rs = M('User_info')->where("id='$id' AND salt='$salt'")->setField('active',1);
            if($rs){
                //用户激活成功
                $this->success('激活成功，欢迎加入',U('Login/login'));
            }else{
                //用户激活失败
                $this->error('激活失败',U('Login/login'));
            }
        }else{
            //判断是否为非法激活
            $activeData = M('User_estp')->where("salt='$salt'")->find();
            if(empty($activeData)){
                echo "非法激活，你再试我就报警了";
                exit();
            }
            //根据ID查询到信息，修改用户的active字段
            $rs = M('User_estp')->where("id='$id' AND salt='$salt'")->setField('active',1);
            if($rs){
                //用户激活成功
                $this->success('激活成功，欢迎加入',U('Login/login'));
            }else{
                //用户激活失败
                $this->error('激活失败',U('Login/login'));
            }
        }
        
    }
}
