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
        $this->assign('list',$data);
        $this->display();
    }
}