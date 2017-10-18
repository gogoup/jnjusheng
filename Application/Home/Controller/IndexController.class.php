<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //$henu=M('Home_menu');
        //$list=$henu->where('henu_level=0')->select();
        //$this->assign('list',$list);
        $this->display();
    }
}