<?php
namespace Home\Controller;
class BusinessController extends BaseController{
    public function business(){
        $pagesize = 8;
        $pageno = I('get.p',1);
        $project = M('Project');
        $data = $project->page($pageno,$pagesize)->select();
        foreach($data as &$value){
            $typeName = M('ProjectType')->where("type_id=$value[type_id]")->getField('type_name');
            $value['type_name']=$typeName;
        }
        //dump($data);
        $count = $project->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('project_list',$data);
        $this->display();
    }
    public function business2(){
        $pagesize = 8;
        $pageno = I('get.p',1);
        $guidance = M('Guidance');
        $msg = $guidance->page($pageno,$pagesize)->select();
        $count = $guidance->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('guidance_list',$msg);
        $this->display();
    }
    public function business3(){
        $pagesize = 8;
        $pageno = I('get.p',1);
        $support = M('Support');
        $data3 = $support->page($pageno,$pagesize)->select();
        $count = $support->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('support_list',$data3);
        $this->display();
    }
    public function project(){
        $id = I('get.id');
        $project = M('Project');
        $data = $project->where("id=$id")->find();
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function guidance(){
        $id = I('get.id');
        $guidance = M('Guidance');
        $content = $guidance->where("id=$id")->find();
        $content['content'] = html_entity_decode($content['content']);
        $new_notice = M('New_notice');
        $data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $this->assign('content',$content);
        $this->assign('data',$data);
        $this->display('content');
    }
    public function support(){
        $id = I('get.id');
        $support = M('Support');
        $content = $support->where("id=$id")->find();
        $content['content'] = html_entity_decode($content['content']);
        $new_notice = M('New_notice');
        $data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $this->assign('content',$content);
        $this->assign('data',$data);
        $this->display('content');
    }
}