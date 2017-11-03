<?php
namespace Home\Controller;
class HatcherController extends BaseController{
    public function hatcher(){
        $pagesize = 5;
        $pageno = I('get.p',1);
        $incubator = M('Incubator');
        $data = $incubator->page($pageno,$pagesize)->select();
        $count = $incubator->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->display();
    }
    public function detail(){
        $id = I('get.id');
        $incubator = M('Incubator');
        $content = $incubator->find();
        $content['content'] = html_entity_decode($content['content']);
        $this->assign('content',$content);
        $this->display();
    }
    public function incubation(){
        $id = session('uid');
        $user_estp = M('UserEstp');
        $data = $user_estp->where("user_id=$id")->setField('company_state',2);
        if($data){
            echo 1;
        }else{
            echo 2;
        }             
    }
    public function hatcher2(){
        $pagesize = 8;
        $pageno = I('get.p',1);
        $policy = M('Policy');
        $data = $policy->page($pageno,$pagesize)->select();
        $count = $policy->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->display();
    }
    public function policy(){
        $id = I('get.id');
        $policy = M('Policy');
        $content = $policy->where("id=$id")->find();
        $content['content'] = html_entity_decode($content['content']);
        $new_notice = M('New_notice');
        $data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $this->assign('content',$content);
        $this->assign('data',$data);
        $this->display('content');
    }
}