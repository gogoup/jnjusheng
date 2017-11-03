<?php
namespace Admin\Controller;
use Think\Controller;

class AuditController extends BaseController
{
    public function activity()
    {
        $Active=M("Activity");
        $count=$Active->where('state=3')->count();
        $Page       = new \Think\Page($count,25);
        $show       = $Page->show();
        $list = $Active->where('state=3')->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $list1= $Active->where('state=1')->order('id')->limit("0,50")->select();
        $list2=$Active->where('state=2')->order('id')->limit("0,50")->select();

        $this->assign("list1",$list1);
        $this->assign("list2",$list2);


        $this->display();
    }

    public function checkact()
    {
        layout(false);
        $id=I("get.id",'','');
        $list=M("Activity")->where('id='.$id)->find();
        $list['content']=html_entity_decode($list['content']);
        $this->assign('list',$list);
        $this->display();
    }

    public function editactstate()
    {
        $id=I('post.actid','','');
        $sql="update `sd_activity` set `state`=3 where `id`=".$id;
        $msg=M('Activity')->execute($sql);
        echo $msg;
    }
    public function edit1actstate()
    {
        $id=I('post.actid','','');
        $sql="update `sd_activity` set `state`=2 where `id`=".$id;
        $msg=M('Activity')->execute($sql);
        echo $msg;
    }

    public function delactivity()
    {
        $id=I('post.actid','','');
        $msg=M("Activity")->delete($id);
        echo $msg;
    }

    public function person()
    {
        $User=M('User');
        $count=$User->where(array('user_role'=>1,'user_state'=>4))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('user_role'=>1,'user_state'=>4))->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('UserInfo')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function person1()
    {
        $User=M('User');
        $count=$User->where(array('user_role'=>1,'user_state'=>2))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('user_role'=>1,'user_state'=>2))->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('UserInfo')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function person2()
    {
        $User=M('User');
        $count=$User->where(array('user_role'=>1,'user_state'=>3))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('user_role'=>1,'user_state'=>3))->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('UserInfo')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function edituser()
    {
        $id=I('post.actid','','');
        $sql="update `sd_user` set `user_state`=4 where `user_id`=".$id;
        $msg=M('User')->execute($sql);
        echo $msg;
    }
    public function edit1user()
    {
        $id=I('post.actid','','');
        $sql="update `sd_user` set `user_state`=3 where `user_id`=".$id;
        $msg=M('User')->execute($sql);
        echo $msg;
    }

    public function company()
    {
        $User=M('User');
        $count=$User->where(array('user_role'=>2,'user_state'=>4))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('user_role'=>2,'user_state'=>4))->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('UserEstp')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function company1()
    {
        $User=M('User');
        $count=$User->where(array('user_role'=>2,'user_state'=>2))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('user_role'=>2,'user_state'=>2))->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('UserEstp')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function company2()
    {
        $User=M('User');
        $count=$User->where(array('user_role'=>2,'user_state'=>3))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('user_role'=>2,'user_state'=>3))->order('user_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('UserEstp')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function checkcom()
    {
        layout(false);
        $id=I("get.id",'','');
        $list1=M("UserEstp")->where('user_id='.$id)->find();
        $list2=M('User')->where('user_id='.$id)->find();
        $list=array_merge($list1,$list2);
        $company_intro=html_entity_decode($list1['company_intro']);
        $this->assign("one",$company_intro);
        $this->assign('company',$list);
        $this->display();
    }

    public function metting()
    {
        $Metb=M("Metting");
        $count=$Metb->where('met_state=1')->count();
        $Page       = new \Think\Page($count,25);
        $show       = $Page->show();
        $met = $Metb->where('met_state=1')->order('m_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($met as $val)
        {
            $user=M("UserEstp")->where("user_id=".$val['user_id'])->field("company")->find();
            $teacher=M("UserTeacher")->where(array('user_id'=>$val['teach_id'],'state'=>'2'))->field('name')->find();
            $list[]=array_merge($user,$teacher,$val);
        }
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function metting1()
    {
        $Metb=M("Metting");
        $count=$Metb->where('met_state=2')->count();
        $Page       = new \Think\Page($count,25);
        $show       = $Page->show();
        $met = $Metb->where('met_state=2')->order('m_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($met as $val)
        {
            $user=M("UserEstp")->where("user_id=".$val['user_id'])->field("company")->find();
            $teacher=M("UserTeacher")->where(array('user_id'=>$val['teach_id'],'state'=>'2'))->field('name')->find();
            $list[]=array_merge($user,$teacher,$val);
        }
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }

    public function metting2()
    {
        $Metb=M("Metting");
        $count=$Metb->where('met_state=3')->count();
        $Page       = new \Think\Page($count,25);
        $show       = $Page->show();
        $met = $Metb->where('met_state=3')->order('m_id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($met as $val)
        {
            $user=M("UserEstp")->where("user_id=".$val['user_id'])->field("company")->find();
            $teacher=M("UserTeacher")->where(array('user_id'=>$val['teach_id'],'state'=>'2'))->field('name')->find();
            $list[]=array_merge($user,$teacher,$val);
        }
        $this->assign("list",$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function auditmet()
    {
        $id=I("post.id");
        echo $msg=M("Metting")->execute("update `sd_metting` set `met_state`=1 where `m_id`=".$id);
    }
    public function auditmeted()
    {
        $id=I("post.id");
        echo $msg=M("Metting")->execute("update `sd_metting` set `met_state`=3 where `m_id`=".$id);
    }

    public function enter()
    {
        $User=M('UserEstp');
        $count=$User->where(array('company_state'=>3,'salt'=>array('neq','1')))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('company_state'=>3,'salt'=>array('neq','1')))->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('User')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function enter1()
    {
        $User=M('UserEstp');
        $count=$User->where(array('company_state'=>1,'salt'=>array('neq','1')))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('company_state'=>1,'salt'=>array('neq','1')))->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('User')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    public function enter2()
    {
        $User=M('UserEstp');
        $count=$User->where(array('company_state'=>2,'salt'=>array('neq','1')))->count();
        $Page       = new \Think\Page($count,30);
        $show       = $Page->show();
        $users = $User->where(array('company_state'=>2,'salt'=>array('neq','1')))->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        $list=array();
        foreach($users as $val)
        {
            $arr=M('User')->where('user_id='.$val['user_id'])->find();
            $list[]=array_merge($arr,$val);
        }
        $this->assign('list',$list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function editenter()
    {
        $id=I('post.id','','');
        $sql="update `sd_user_estp` set `company_state`=3 where  `id`=".$id;
        $Estp=M('UserEstp');
        $Estp->startTrans();
        $msg=$Estp->execute($sql);
        $data1['company_id']=$id;
        $data1['create_time']=date("Y-m-d");
        $msg2=M("Cost")->add($data1);
        if($msg && $msg2)
        {
            $Estp->commit();
            echo msg2;
        }else{
            $Estp->rollback();
            echo 0;
        }
    }

    public function editentered()
    {
        $id=I('post.id','','');
        $sql="update `sd_user_estp` set `company_state`=2 where  `id`=".$id;
        $msg=M('UserEstp')->execute($sql);
        echo $msg;
    }

}