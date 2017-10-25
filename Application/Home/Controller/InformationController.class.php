<?php
namespace Home\Controller;
use Think\Controller;
class InformationController extends Controller{
    public function infor_center(){
        // 从文件中读取数据到PHP变量
        //$json_string = file_get_contents('./Public/Home/json/information.json');
        // 把JSON字符串转成PHP数组
        //$data = json_decode($json_string, true);
        // 显示出来看看
        //dump($data);
        //$this->assign('list',$data);
        $this->display('service-center');
    }
    public function news(){
        $pagesize = 8;  
        $pageno = I('get.p',1);
        $state = I('get.state');
        if($state==1){
            $new_notice = M('New_notice');
            $data = $new_notice->page($pageno,$pagesize)->where("new_show>1")->select();
            $this->assign('list',$data);
            $count = $new_notice->count();
        }else if($state==2){
            $new_enterprise = M('New_enterprise');
            $data = $new_enterprise->page($pageno,$pagesize)->where("new_show>1")->select();
            $this->assign('list',$data);
            $count = $new_enterprise->count();
        }else if($state==3){
            $new_falsh = M('New_falsh');
            $data = $new_falsh->page($pageno,$pagesize)->where("new_show>1")->select();
            $this->assign('list',$data);
            $count = $new_falsh->count();
        }else{
            $new_media = M('New_media');
            $data = $new_media->page($pageno,$pagesize)->where("new_show>1")->select();
            $this->assign('list',$data);
            $count = $new_media->count();
        } 
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->display('service-new');
    }
    public function content(){
        $id = I('get.id');
        $new_notice = M('New_notice');
        $content = $new_notice->where("id=$id")->find();
        $data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $this->assign('content',$content);
        $this->assign('data',$data);
        $this->display('service-new-detail');
    }
}