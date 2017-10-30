<?php
namespace Home\Controller;
class InformationController extends BaseController{
    //资讯中心的展示
    public function Information(){
        // 从文件中读取数据到PHP变量
        //$json_string = file_get_contents('./Public/Home/json/information.json');
        // 把JSON字符串转成PHP数组
        //$data = json_decode($json_string, true);
        // 显示出来看看
        //dump($data);
        //$this->assign('list',$data);
        //通知公告
        $new_notice = M('New_notice');
        $notice_data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $notice_content = $new_notice->order('id desc')->find();
        $this->assign('notice_content',$notice_content);
        $this->assign('notice_data',$notice_data);
        $this->assign('notice_state',1);
        //企业新闻
        $new_enterprise = M('New_enterprise');
        $enterprise_data = $new_enterprise->where("new_show>1")->order('id desc')->limit(7)->select();
        $enterprise_content = $new_enterprise->order('id desc')->find();
        $this->assign('enterprise_content',$enterprise_content);
        $this->assign('enterprise_data',$enterprise_data);
        $this->assign('enterprise_state',2);
        //申报快讯
        $new_falsh = M('New_falsh');
        $falsh_data = $new_falsh->where("new_show>1")->order('id desc')->limit(7)->select();
        $falsh_content = $new_falsh->order('id desc')->find();
        $this->assign('falsh_content',$falsh_content);
        $this->assign('falsh_data',$falsh_data);
        $this->assign('falsh_state',3);
        //媒体报道
        $new_media = M('New_media');
        $media_data = $new_media->where("new_show>1")->order('id desc')->limit(7)->select();
        $media_content = $new_media->order('id desc')->find();
        $this->assign('media_content',$media_content);
        $this->assign('media_data',$media_data);
        $this->assign('media_state',4);
        //创业大赛
        $activity = M('Activity');
        $dataOne = $activity->where('type=1')->order('id desc')->limit(4)->select();
        $this->assign('listOne',$dataOne);
        $dataTwo = $activity->where('type=2')->order('id desc')->limit(4)->select();
        $this->assign('listTwo',$dataTwo);
        //技术研发
        $plat_science = M('Plat_science');
        $science_data = $plat_science->order('id desc')->limit(7)->select();
        $science_content = $plat_science->order('id desc')->find();
        $this->assign('science_content',$science_content);
        $this->assign('science_data',$science_data);
        $this->assign('science_state',1);
        //生活服务
        $plat_serve = M('Plat_serve');
        $serve_data = $plat_serve->order('id desc')->limit(7)->select();
        $serve_content = $plat_serve->order('id desc')->find();
        $this->assign('serve_content',$serve_content);
        $this->assign('serve_data',$serve_data);
        $this->assign('serve_state',2);
        //共享空间
        $plat_space = M('Plat_space');
        $space_data = $plat_space->order('id desc')->limit(7)->select();
        $space_content = $plat_space->order('id desc')->find();
        $this->assign('space_content',$space_content);
        $this->assign('space_data',$space_data);
        $this->assign('space_state',3);
        //政策法规
        $plat_policy = M('Plat_policy');
        $policy_data = $plat_policy->order('id desc')->limit(7)->select();
        $policy_content = $plat_policy->order('id desc')->find();
        $this->assign('policy_content',$policy_content);
        $this->assign('policy_data',$policy_data);
        $this->assign('policy_state',4);
        //科技支撑
        $plat_support = M('Plat_support');
        $support_data = $plat_support->order('id desc')->limit(7)->select();
        $support_content = $plat_support->order('id desc')->find();
        $this->assign('support_content',$support_content);
        $this->assign('support_data',$support_data);
        $this->assign('support_state',5);
        $this->display('information');
    }
    //新闻中心列表展示
    public function news(){
        $pagesize = 10;  
        $pageno = I('get.p',1);
        $state = I('get.state');
        if($state==1){
            //通知公告
            $new_notice = M('New_notice');
            $data = $new_notice->page($pageno,$pagesize)->where("new_show>1")->order('id desc')->select();
            $listimg = $new_notice->where("new_show>1")->order('id desc')->limit(2)->select();
            $count = $new_notice->count();
        }else if($state==2){
            //企业新闻
            $new_enterprise = M('New_enterprise');
            $data = $new_enterprise->page($pageno,$pagesize)->where("new_show>1")->order('id desc')->select();
            $listimg = $new_enterprise->where("new_show>1")->order('id desc')->limit(2)->select();
            $count = $new_enterprise->count();
        }else if($state==3){
            //申报快讯
            $new_falsh = M('New_falsh');
            $data = $new_falsh->page($pageno,$pagesize)->where("new_show>1")->order('id desc')->select();
            $listimg = $new_falsh->where("new_show>1")->order('id desc')->limit(2)->select();
            $count = $new_falsh->count();
        }else{
            //媒体报道
            $new_media = M('New_media');
            $data = $new_media->page($pageno,$pagesize)->where("new_show>1")->order('id desc')->select();
            $listimg = $new_media->where("new_show>1")->order('id desc')->limit(2)->select();
            $count = $new_media->count();
        }
        $activity = M('Activity');
        $ac_data = $activity->where('type=2')->order('id desc')->find();
        $this->assign('listimg',$listimg);
        $this->assign('ac',$ac_data);
        $this->assign('list',$data);
        $this->assign('state',$state);
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->display();
    }
    //内容展示
    public function content(){
        $id = I('get.id');
        $state = I('get.state');
        if($state == 1){
            $new_notice = M('New_notice');
            $content = $new_notice->where("id=$id")->find();
        }else if($state == 2){
            $new_enterprise = M('New_enterprise');
            $content = $new_enterprise->where("id=$id")->find();
        }else if($state == 3){
            $new_falsh = M('New_falsh');
            $content = $new_falsh->where("id=$id")->find();
        }else{
            $new_media = M('New_media');
            $content = $new_media->where("id=$id")->find();
        }
        $new_notice = M('New_notice');
        $data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $this->assign('content',$content);
        $this->assign('data',$data);
        $this->display();
    }
    //活动中心的展示
    public function activity(){
        $pagesize = 4;
        $pageno = I('get.p',1);
        $state = I('get.state');
        if($state==1){
            $activity = M('Activity');
            $data = $activity->page($pageno,$pagesize)->where('type=1')->order('id desc')->select();
            $count = $activity->where('type=1')->count();
            foreach($data as &$value){
                if(time()>strtotime($value['join_start'])&&time()<strtotime($value['join_end'])){
                    $value['s'] = 1;
                }else if(time()>strtotime($value['join_end'])&&time()<strtotime($value['act_start'])){
                    $value['s'] = 2;
                }else if(time()>strtotime($value['act_start'])&&time()<strtotime($value['act_end'])){
                    $value['s'] = 3;
                }else if(time()>strtotime($value['act_end'])){
                    $value['s'] = 4;
                }else if(time()<strtotime($value['join_start'])){
                    $value['s'] = 5;
                }
            }
        }else{
            $activity = M('Activity');
            $data = $activity->page($pageno,$pagesize)->where('type=2')->order('id desc')->select();
            $count = $activity->where('type=2')->count();
            foreach($data as &$value){
                if(time()>strtotime($value['join_start'])&&time()<strtotime($value['join_end'])){
                    $value['s'] = 1;
                }else if(time()>strtotime($value['join_end'])&&time()<strtotime($value['act_start'])){
                    $value['s'] = 2;
                }else if(time()>strtotime($value['act_start'])&&time()<strtotime($value['act_end'])){
                    $value['s'] = 3;
                }else if(time()>strtotime($value['act_end'])){
                    $value['s'] = 4;
                }else if(time()<strtotime($value['join_start'])){
                    $value['s'] = 5;
                }
            }
        }
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->assign('list',$data);
        $this->assign('state',$state);
        $this->display();
    }
    //活动内容的展示
    public function detail(){
        $id = I('get.id');
        $activity = M('Activity');
        $detail = $activity->where("id=$id")->find();
        $this->assign('detail',$detail);
        $this->display();
    }
    //报名验证
    public function enter(){
        //验证用户是否登录
        if(!session('?uid')){
            echo '1';
        }else{
            //验证活动是否可以报名
            $id = I('post.id');
            $activity = M('Activity');
            $detail = $activity->where("id=$id")->find();
            if($detail['state'] == 1 && time()>strtotime($detail['join_start']) && time()<strtotime($detail['join_end'])){
                $data['user_id'] = session('uid');
                $data['activity_id'] = $detail['id'];
                $user_ac = M('User_activity');
                if($user_ac->add($data)){
                    echo '2';
                }                
            }else{
                echo '3';
            }
        }       
    }
    //平台咨询列表
    public function plat(){
        $pagesize = 10;
        $pageno = I('get.p',1);
        $state = I('get.state');
        if($state==1){
            $plat_science = M('Plat_science');
            $data = $plat_science->page($pageno,$pagesize)->order('id desc')->select();
            $listimg = $plat_science->order('id desc')->limit(2)->select();
            $count = $plat_science->count();
        }else if($state==2){
            $plat_serve = M('Plat_serve');
            $data = $plat_serve->page($pageno,$pagesize)->order('id desc')->select();
            $listimg = $plat_serve->order('id desc')->limit(2)->select();
            $count = $plat_serve->count();
        }else if($state==3){
            $plat_space = M('Plat_space');
            $data = $plat_space->page($pageno,$pagesize)->order('id desc')->select();
            $listimg = $plat_space->order('id desc')->limit(2)->select();
            $count = $plat_space->count();
        }else if($state==4){
            $plat_policy = M('Plat_policy');
            $data = $plat_policy->page($pageno,$pagesize)->order('id desc')->select();
            $listimg = $plat_policy->order('id desc')->limit(2)->select();
            $count = $plat_policy->count();
        }else{
            $plat_support = M('Plat_support');
            $data = $plat_support->page($pageno,$pagesize)->order('id desc')->select();
            $listimg = $plat_support->order('id desc')->limit(2)->select();
            $count = $plat_support->count();
        }
        $activity = M('Activity');
        $ac_data = $activity->where('type=2')->order('id desc')->find();
        $this->assign('listimg',$listimg);
        $this->assign('ac',$ac_data);
        $this->assign('list',$data);
        $this->assign('state',$state);
        $page = new \Think\Page($count,$pagesize);
        $str = $page->show();
        $this->assign('str',$str);
        $this->display();
    }
    //平台咨询详细内容展示
    public function substance(){
        $id = I('get.id');
        $state = I('get.state');
        if($state == 1){
            $plat_science = M('Plat_science');
            $content = $plat_science->where("id=$id")->find();
        }else if($state == 2){
            $plat_serve = M('Plat_serve');
            $content = $plat_serve->where("id=$id")->find();
        }else if($state == 3){
            $plat_space = M('Plat_space');
            $content = $plat_space->where("id=$id")->find();
        }else if($state == 4){
            $plat_policy = M('Plat_policy');
            $content = $plat_policy->where("id=$id")->find();
        }else{
            $plat_support = M('Plat_support');
            $content = $plat_support->where("id=$id")->find();
        }
        $new_notice = M('New_notice');
        $data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $this->assign('content',$content);
        $this->assign('data',$data);
        $this->display();
    }
}