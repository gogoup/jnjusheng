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
            $log=M( 'CostPaylog')->where("log_id=".$pay['log_id'])->select();
        }

        $list=array_merge((array)$com,(array)$com1,(array)$pay);
        $this->assign('list',$list);
        $this->assign("log",$log);
        $this->display();
    }



}