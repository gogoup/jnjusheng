<?php
namespace Home\Controller;
class IndexController extends BaseController {
    public function index(){
        //获取通知公告
        $new_notice = M('New_notice');
        $notice_data = $new_notice->where("new_show>1")->order('id desc')->limit(7)->select();
        $notice_content = $new_notice->order('id desc')->find();
        $this->assign('notice_content',$notice_content);
        $this->assign('notice_data',$notice_data);
        $this->assign('notice_state',1);
        //获取企业新闻
        $new_enterprise = M('New_enterprise');
        $enterprise_data = $new_enterprise->where("new_show>1")->order('id desc')->limit(7)->select();
        $enterprise_content = $new_enterprise->order('id desc')->find();
        $this->assign('enterprise_content',$enterprise_content);
        $this->assign('enterprise_data',$enterprise_data);
        $this->assign('enterprise_state',2);
        //获取申报快讯
        $new_falsh = M('New_falsh');
        $falsh_data = $new_falsh->where("new_show>1")->order('id desc')->limit(7)->select();
        $falsh_content = $new_falsh->order('id desc')->find();
        $this->assign('falsh_content',$falsh_content);
        $this->assign('falsh_data',$falsh_data);
        $this->assign('falsh_state',3);
        //获取媒体报道
        $new_media = M('New_media');
        $media_data = $new_media->where("new_show>1")->order('id desc')->limit(7)->select();
        $media_content = $new_media->order('id desc')->find();
        $this->assign('media_content',$media_content);
        $this->assign('media_data',$media_data);
        $this->assign('media_state',4);
        //获取政策法规
        $plat_policy = M('Plat_policy');
        $policy_data = $plat_policy->order('id desc')->limit(7)->select();
        $policy_content = $plat_policy->order('id desc')->find();
        $this->assign('policy_content',$policy_content);
        $this->assign('policy_data',$policy_data);
        $this->assign('policy_state',4);
        $this->display();
    }
}