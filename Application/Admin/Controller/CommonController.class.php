<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller
{
    function login()
    {
        layout(false);
        $this->display("Comm:login");
    }

    public function check()
    {
        $data=I('post.','','htmlspecialchars');
        $adm_user=$data['username']?$data['username']:"";
        $adm_pwd=$data['password']?md5($data['password']):"";
        $sql="select * from `sd_adm` where `adm_user` = '".$adm_user."' and `adm_pwd` = '".$adm_pwd ."'";
        $admin=M("Adm")->query($sql);

        if(!empty($admin))
        {
            $_SESSION['adm'] = $admin[0];
            $this->redirect('Index/index');
        }else{
            echo("<script>alert('检查您的用户名/密码。')</script>");
            $this->redirect("login");
        }
    }




}