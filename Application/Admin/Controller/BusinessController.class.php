<?php
namespace Admin\Controller;
use Think\Controller;

class BusinessController extends BaseController
{
    public function enter()
    {
        $Company=M("UserEstp");
        $count=$Company->where(array('company_state' =>'3',salt=>array('neq','1')))->count();
        $Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $data = $Company->where(array('company_state' =>'3',salt=>array('neq','1')))->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($data as $val)
        {
            $cost=M("Cost")->where("company_id=".$val['id'])->find();
            $list[]=array_merge((array)$val,(array)$cost);
        }
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function checkcom()
    {
        layout(false);
        $id=I("get.id");
        $company=M('UserEstp')->where('id='.$id)->find();
        $cost=M("Cost")->where('company_id='.$id)->find();
        $list=array_merge((array)$company,(array)$cost);
        $this->assign('company',$list);
        $this->display();
    }

    public function editenter()
    {
        layout(false);
        $id=I("get.id");
        $cost=M("Cost")->where('company_id='.$id)->find();
        $this->assign('entered',$cost);
        $this->display();
    }

    public function editentered()
    {
        $data=I("post.");

        echo $msg=M("Cost")->where("company_id=".$data['company_id'])->save($data);
    }
}