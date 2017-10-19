<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //实例化模型
        $henu=M('Home_menu');
        //查询顶级菜单
        $list=$henu->where('henu_level=0')->select();
        $this->assign('list',$list);
        $this->display();
    }
}