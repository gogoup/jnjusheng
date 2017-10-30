<?php
namespace Admin\Controller;
use Think\Controller;


class CommonController extends Controller
{

    function index()
    {
        $this->check();
    }
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
    public function upimg()
    {
        $file=$_FILES['theimg'];
        if($file["error"])
        {
            echo $file["error"];
        }else{
            if(($file["type"]=="image/x-png" || $file["type"]=="image/gif" || $file["type"]=="image/pjpeg" || $file["type"]=="image/jpg" || $file["type"]=="image/png" || $file["type"]=="image/jpeg") && $file["size"]<1024000)
            {
                $temp = explode(".", $file["name"]);
                $extension = end($temp);
                $filename =time().".".$extension;
                $jia=date("Ymd");
                $path="./Public/upload/".$jia;
                if(!file_exists($path))
                {
                    if ( !mkdir( $path , 0777 , true ) ) {
                        return false;
                    }
                }
                if ( !move_uploaded_file( $file[ "tmp_name" ] , $path."/".$filename) ) {
                    return false;
                }
                echo "<script>parent.$('#showimg').attr('src','/Public/upload/".$jia."/".$filename."');</script>";
            }else{
                return false;
            }

        }
    }

    public function upfile()
    {
        $file=$_FILES['thefile'];
        $theid=$_POST['theid'];
        if($file["error"])
        {
            echo $file["error"];
        }else{
            $type=array('doc','docx');
            $temp = explode(".", $file["name"]);
            $extension = end($temp);
            if(in_array($extension,$type))
            {
                $filename =time().".".$extension;
                $jia=date("Ymd");
                $path="./Public/upload/".$jia;
                if(!file_exists($path))
                {
                    if ( !mkdir( $path , 0777 , true ) ) {
                        return false;
                    }
                }
                if ( !move_uploaded_file( $file[ "tmp_name" ] , $path."/".$filename) ) {
                    return false;
                }
                echo "<script>parent.$('#".$theid."').attr('value','/Public/upload/".$jia."/".$filename."');parent.$('#msg').html(\"OK\");</script>";
            }else{
                echo "<script>parent.$('#msg').html(\"type of error\")</script>";
            }
        }

    }




}