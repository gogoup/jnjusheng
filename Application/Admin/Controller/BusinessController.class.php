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

    public function selenter()
    {
        $val=I("post.val");
        $sql="select * from `sd_user_estp` where `company` like '%".$val."%'";
        $data=M()->query($sql);
      $html="";
        foreach($data as $value)
        {
            $ent=M('Cost')->where('company_id ='.$value['id'])->find();
                $list="<tr class=\"\">
                         <td><a href=\"\">".$value['id']."</a></td>
                          <td>".$value['company']."</td>
                          <td>".$value['legal_person']."</td>
                          <td>".$value['contacts_tel']."</td>
                          <td>".$value['contents_email']."</td>";
                     if(!empty($ent))
                        {
                            $list.="<td>".$ent['office']."</td>
                             <td>
                                <span class=\"seeinfo\" value=\"".$value['id']."\">详情</span>
                                <span class=\"editenter\" value=\"".$value['id']."\">编辑</span>
                          </td>
                          </tr>";
                        }else{
                            $list.="<td>该企业暂未入驻</td><td>
                                <span class=\"seeinfo\" value=\"".$value['id']."\">详情</span>
                                <span class=\"\" value=\"".$value['id']."\">编辑</span>
                          </td>
                          </tr>";
                        }

            $html.=$list;

        }
        echo $html;
    }

    public function pay()
    {
        $payment=new \Admin\Model\CostModel();
        $list=$payment->duePayCompanys();
        $this->assign('list',$list);
        $this->display();
    }

    public function selpay()
    {
        $val=I("get.val");
        $sql="select `company`,`id` from `sd_user_estp` where `company` like '%".$val."%'";
        $com=M()->query($sql);
        if(empty($com))
        {
            exit;
        }
        $data=array();
        $html="";
        foreach($com as $value)
        {
            $arr=M("Cost")->where('company_id='.$value['id'])->find();
            $html.=" <tr class=\"\">
                         <td><a href=\"\">".$value['id']."</a></td>
                         <td>".$value['company']."</td>";
                  if(!empty($arr))
                  {
                      $paylog=M("CostPay")->where(array("company_id"=>$arr['company_id'],"pay_time"=>$arr['last_time']))->order('log_id desc')->limit("0,1")->select();
                      $arr['remark']=$paylog[0]['remark'];
                      $html.="<td > ".$arr['property_fee']." / ".$arr['rent']." </td >
                         <td > ".$arr['last_time']." </td >
                         <td > ".$arr['button']."月 </td >
                         <td > ".$arr['office']." </td >
                         <td > ".$arr['remark']." </td >
                         <td >
                         <span class='paypay' value='".$value['id']."'>缴费</span>
                         </td>
                     </tr>";
                   }else{
                      $html.="<td cellpadding='6'>该企业未入驻</td >";
                  }
        }
        echo $html;
    }

    public function editpay()
    {
        layout(false);
        $id=I('get.id');
        $com=M('UserEstp')->where('id='.$id)->find();
        $com1=M('Cost')->where('company_id='.$id)->find();
        $pay=M("CostPay")->where("company_id=".$id)->find();
        if(!empty($pay))
        {
            $log=M( 'CostPaylog')->where("company_id =".$id)->select();
        }

        $list=array_merge((array)$com,(array)$com1,(array)$pay);
        $this->assign('list',$list);
        $this->assign("log",$log);
        $this->display();
    }

    public function editpaid()
    {
        $data = I("post.");
        $thetime = date("Y-m-d");
        $sql1 = "update `sd_cost` set `last_time`='" . $thetime . "' where `company_id`=" . $data['company_id'];
        $sql2 = "update `sd_cost_pay` set `paid`='" . $data['paid'] . "' ,`pay_state`='" . $data['pay_state'] . "',`remark`='" . $data['remark'] . "',`pay_time`='" . $thetime . "' where `company_id`=" . $data['company_id'];
        $sql3 = "insert into `sd_cost_pay`(`company_id`,`paid`,`pay_state`,`pay_time`,`remark`) value('" . $data['company_id'] . "','" . $data['paid'] . "','" . $data['pay_state'] . "','" . $thetime . "','" . $data['remark'] . "')";
        $sql4 = "insert into `sd_cost_paylog`(`company_id`,`getpay`,`createtime`,`remark`) value('" . $data['company_id'] . "','" . $data['paid'] . "','" . date('Y-m-d H:i:s') . "','" . $data['remark'] . "')";
        $tables = M();
        $tables->startTrans();
        $msg1 = $tables->execute($sql1);
        $costpay = M('CostPay')->where('company_id=' . $data['company_id'])->find();
        if (empty($costpay)) {
            $msg2 = $tables->execute($sql3);
        } else {
            $msg2 = $tables->execute($sql2);
        }
        $msg3 = $tables->execute($sql4);
        if ($msg1 || $msg1 == 0) {
                if ($msg2 && $msg3) {
                    $tables->commit();
                    echo "<script>var index = parent.layer.getFrameIndex(window.name);  parent.layer.close(index); parent.location.reload(); </script>";
                } else {
                    $tables->rollback();
                    echo "<script>var index = parent.layer.getFrameIndex(window.name);  parent.layer.close(index); parent.location.reload();  </script>";
                }
        }else{
            $tables->rollback();
            echo "<script>var index = parent.layer.getFrameIndex(window.name);  parent.layer.close(index); parent.location.reload();  </script>";
        }
    }

    public function paylog()
    {
        $Paylog=M('CostPaylog');
        $count      = $Paylog->count();
        $Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $list = $Paylog->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $data=array();
        foreach($list as $val)
        {
            $company['company']=D('Cost')->getCompanynameByid($val['company_id']);
            $costs=D('Cost')->getCostinfobyId($val['company_id']);
            $data[]=array_merge((array)$val,(array)$company,(array)$costs);
        }
        $this->assign("list",$data);
        $this->assign('page',$show);
        $this->display();
    }

    public function sellog()
    {
        $company=I('get.theval');
        $sql="select `id`,`company` from `sd_user_estp` where `company` like '%".$company."%'";
        $companyids=M("UserEstp")->query($sql);
        $list="";
        foreach($companyids as $ids)
        {
            $cost=M("Cost")->where('company_id='.$ids['id'])->getField('office');
            $logs=M('CostPaylog')->where('company_id='.$ids['id'])->order('id')->select();
            foreach($logs as $log)
            {
                $list.="<tr><td>".$log['createtime']."</td><td>".$ids['id']."</td><td>".$ids['company']."</td><td>".$log['getpay']."</td><td>".$cost."</td><td>".$log['remark']."</td></tr>";
            }
        }
        echo $list;
    }


    public function guidance()
    {
        $Guidance=M('Guidance');
        $count      = $Guidance->count();
        $Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        $list = $Guidance->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        foreach($list as $val)
        {
            $company=D('Cost')->getCompanynameByid($val['company_id']);
            $val['company']=$company;
            $data[]=$val;
        }
        $this->assign("list",$data);
        $this->assign('page',$show);
        $this->display();
    }

    public function addedguidance()
    {
        layout(false);
        $companys=M('UserEstp')->field('id,company')->select();
        $this->assign('companys',$companys);
        $this->display();
    }

    public function addguidance()
    {
        $data=I('post.');
        $msg=M("Guidance")->add($data['data']);
        echo $msg;
    }

    Public function editguidance()
    {
        layout(false);
        $id=I("get.id");
        $data=M('Guidance')->where('id='.$id)->find();
        $data['content']=html_entity_decode($data['content']);
        $data['company']=D("Cost")->getCompanynameByid($data['company_id']);
        $companys=M('UserEstp')->field('id,company')->select();
        $this->assign('companys',$companys);
        $this->assign('list',$data);
        $this->display();
    }

    public function editedguidance()
    {
        $data=I('post.');
        $msg=M("Guidance")->save($data['data']);
        if($msg>0 || $msg===0)
        {
            echo 1;
        }else{
            echo 0;
        }
    }

    public function delguidance()
    {
        $id=I("get.id");
       echo $msg=M("Guidance")->delete($id);
    }

    public function selguidance()
    {
        $title=I('get.val');
        $sql="select * from `sd_guidance` where `title` like '%".$title."%'";
        $guidances=M("Guidance")->query($sql);
        $list="";
        foreach($guidances as $ids)
        {
            $company=D("Cost")->getCompanynameByid($ids['company_id']);
            $list.="<tr><td>".$ids['id']."</td><td>".$company."</td><td>".$ids['title']."</td><td><button class=\"edit\" value=\"".$ids['id']."\">修改</button><button class=\"del\" value=\"".$ids['id']."\">删除</button></td></tr>";
        }
        echo $list;
    }




}