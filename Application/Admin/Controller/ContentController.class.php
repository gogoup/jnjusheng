<?php
namespace Admin\Controller;
use Think\Controller;
class ContentController extends BaseController{
    public function notice(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $notice = M('New_notice');
        $data = $notice->page($pageno,$pagesize)->select();
        $count = $notice->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',1);
        $this->assign('name','通知公告');
        $this->assign('actioned',"NewNotice");
        $this->display('news');
    }
    public function enterprise(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $enterprise = M('New_enterprise');
        $data = $enterprise->page($pageno,$pagesize)->select();
        $count = $enterprise->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',2);
        $this->assign('name','企业新闻');
        $this->assign('actioned',"NewEnterprise");
        $this->display('news');
    }
    public function falsh(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $falsh = M('New_falsh');
        $data = $falsh->page($pageno,$pagesize)->select();
        $count = $falsh->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',3);
        $this->assign('name','申报快讯');
        $this->assign('actioned',"NewFalsh");
        $this->display('news');
    }
    public function media(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $media = M('New_media');
        $data = $media->page($pageno,$pagesize)->select();
        $count = $media->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',4);
        $this->assign('name','媒体报道');
        $this->assign('actioned',"NewMedia");
        $this->display('news');
    }
    public function del(){
        $id = I('post.id');
        $state = I('post.state');
        if($state==1){
            $notice = M('New_notice');
            if($notice->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==2){
            $enterprise = M('New_enterprise');
            if($enterprise->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==3){
            $falsh = M('New_falsh');
            if($falsh->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==4){
            $media = M('New_media');
            if($media->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==5){
            $activity = M('Activity');
            if($activity->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==6){
            $project = M('Project');
            if($project->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==7){
            $science = M('Plat_science');
            if($science->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==8){
            $serve = M('Plat_serve');
            if($serve->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==9){
            $space = M('Plat_space');
            if($space->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==10){
            $policy = M('Plat_policy');
            if($policy->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }else if($state==11){
            $support = M('Plat_support');
            if($support->where("id=$id")->delete()){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    public function activity(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $activity = M('Activity');
        $data = $activity->page($pageno,$pagesize)->where('state=3')->select();
        $count = $activity->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',5);
        $this->display();
    }
    public function project(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $project = M('Project');
        $data = $project->page($pageno,$pagesize)->select();
        $count = $project->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',6);
        $this->display();
    }
    public function science(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $science = M('Plat_science');
        $data = $science->page($pageno,$pagesize)->select();
        $count = $science->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',7);
        $this->assign('name','技术研发');
        $this->assign('actioned',"PlatScience");
        $this->display('platform');
    }
    public function serve(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $serve = M('Plat_serve');
        $data = $serve->page($pageno,$pagesize)->select();
        $count = $serve->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',8);
        $this->assign('name','生活服务');
        $this->assign('actioned',"PlatServe");
        $this->display('platform');
    }
    public function space(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $space = M('Plat_space');
        $data = $space->page($pageno,$pagesize)->select();
        $count = $space->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',9);
        $this->assign('name','共享空间');
        $this->assign('actioned',"PlatSpace");
        $this->display('platform');
    }
    public function policy(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $policy = M('Plat_policy');
        $data = $policy->page($pageno,$pagesize)->select();
        $count = $policy->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',10);
        $this->assign('name','政策法规');
        $this->assign('actioned',"PlatPolicy");
        $this->display('platform');
    }
    public function support(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $support = M('Plat_support');
        $data = $support->page($pageno,$pagesize)->select();
        $count = $support->count();
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',11);
        $this->assign('name','科技支撑');
        $this->assign('actioned',"PlatSupport");
        $this->display('platform');
    }
    public function newsAlert(){
        $id = I('post.id');
        $state = I('post.state');
        if($state==1){
            $notice = M('New_notice');
            $data = $notice->where("id=$id")->find();
        }else if($state==2){
            $enterprise = M('New_enterprise');
            $data = $enterprise->where("id=$id")->find();
        }else if($state==3){
            $falsh = M('New_falsh');
            $data = $falsh->where("id=$id")->find();
        }else if($state==4){
            $media = M('New_media');
            $data = $media->where("id=$id")->find();
        }
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function activityAlert(){
        $id = I('post.id');
        $activity = M('Activity');
        $data = $activity->where("id=$id")->find();
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function projectAlert(){
        $id = I('post.id');
        $project = M('Project');
        $data = $project->where("id=$id")->find();
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function platformAlert(){
        $id = I('post.id');
        $state = I('post.state');
        if($state==7){
            $science = M('Plat_science');
            $data = $science->where("id=$id")->find();
        }else if($state==8){
            $serve = M('Plat_serve');
            $data = $serve->where("id=$id")->find();
        }else if($state==9){
            $space = M('Plat_space');
            $data = $space->where("id=$id")->find();
        }else if($state==10){
            $policy = M('Plat_policy');
            $data = $policy->where("id=$id")->find();
        }else if($state==11){
            $support = M('Plat_support');
            $data = $support->where("id=$id")->find();
        }
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function editNew(){
        $id = I('post.id');
        $state = I('post.state');
        if($state==1){
            $notice = M('New_notice');
            $data = $notice->where("id=$id")->find();
            $this->assign('name','通知公告');
            $this->assign('actioned',"NewNotice");
        }else if($state==2){
            $enterprise = M('New_enterprise');
            $data = $enterprise->where("id=$id")->find();
            $this->assign('name','企业新闻');
            $this->assign('actioned',"NewEnterprise");
        }else if($state==3){
            $falsh = M('New_falsh');
            $data = $falsh->where("id=$id")->find();
            $this->assign('name','申报快讯');
            $this->assign('actioned',"NewFalsh");
        }else if($state==4){
            $media = M('New_media');
            $data = $media->where("id=$id")->find();
            $this->assign('name','媒体报道');
            $this->assign('actioned',"NewMedia");
        }
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function editActivity(){
        $id = I('post.id');
        $activity = M('Activity');
        $data = $activity->where("id=$id")->find();
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function editPlatform(){
        $id = I('post.id');
        $state = I('post.state');
        if($state==7){
            $science = M('Plat_science');
            $data = $science->where("id=$id")->find();
            $this->assign('actionname',"技术研发");
            $this->assign('actioned',"PlatScience");
        }else if($state==8){
            $serve = M('Plat_serve');
            $data = $serve->where("id=$id")->find();
            $this->assign('actionname',"生活服务");
            $this->assign('actioned',"PlatServe");
        }else if($state==9){
            $space = M('Plat_space');
            $data = $space->where("id=$id")->find();
            $this->assign('actionname',"共享空间");
            $this->assign('actioned',"PlatSpace");
        }else if($state==10){
            $policy = M('Plat_policy');
            $data = $policy->where("id=$id")->find();
            $this->assign('actionname',"政策法规");
            $this->assign('actioned',"PlatPolicy");
        }else if($state==11){
            $support = M('Plat_support');
            $data = $support->where("id=$id")->find();
            $this->assign('actionname',"科技支撑");
            $this->assign('actioned',"PlatSupport");
        }
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function editProject(){
        $id = I('post.id');
        $project = M('Project');
        $data = $project->where("id=$id")->find();
        $data['content'] = html_entity_decode($data['content']);
        $this->assign('content',$data);
        $this->display();
    }
    public function getnewdata(){
        $data=I('post.data');
        $data[1]["createtime"]=date("Y-m-d");
        return $data;
    }
    public function editdata($table,$data){
        return M($table)->save($data);
    }
    public function edit(){
        $data=$this->getnewdata();
        if(empty($data[1]['title'])){
            $this->error("网络异常，稍后再试...",'',1);
            exit;
        }
        $msg=$this->editdata($data['table'],$data[1]);
        if($msg){
            echo true;
        }else{
            echo false;
        }
    }
    public function setField($table,$id){
        return M($table)->where("id=$id")->setField('new_show',3);
    }
    public function tuisong(){
        $id = I('post.id');
        $table = I('post.table');
        $msg = $this->setField($table,$id);
        if($msg){
            echo true;
        }else{
            echo false;
        }
    }
    public function serch($table,$where){
        return M($table)->where($where)->select();
    }
    public function count($table,$where){
        return M($table)->where($where)->count();
    }
    public function serchAll(){
        $title = I('post.title');
        $table = I('post.table');
        $where['title'] = array('like', "%$title%");
        $data = $this->serch($table,$where);
        $count = $this->count($table,$where);
        switch ($table){
            case 'NewNotice':
                 $this->assign('state',1);
            break;  
            case 'NewEnterprise':
                 $this->assign('state',2);
            break;
            case 'NewFalsh':
                 $this->assign('state',3);
            break;
            case 'NewMedia':
                 $this->assign('state',4);
            break;
            case 'PlatScience':
                 $this->assign('state',7);      ;
            break;
            case 'PlatServe':
                 $this->assign('state',8);
            break;
            case 'PlatSpace':
                 $this->assign('state',9);;
            break;
            case 'PlatPolicy':
                 $this->assign('state',10);  ;
            break;
            case 'PlatSupport':
                 $this->assign('state',11);      ;
            break;
        }
        $this->assign('title',$title);
        $this->assign('data',$data);
        $this->assign('table',$table);
        $this->display('serch');     
    }
}