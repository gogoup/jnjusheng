<?php
namespace Admin\Model;
use Think\Model;


class CostModel extends Model
{
    private $Cost;
    private $CostPay;
    private $PayLog;

    public function _initialize()
    {
        $this->Cost=M("Cost");
        $this->CostPay=M('CostPay');
        $this->PayLog=M('CostPaylog');

    }

    public function duePayCompanys()
    {
        //到期时间查询
        $companys=$this->Cost->select();
        $typeone=array();
        foreach($companys as $val)
        {
            $last=strtotime($val['last_time']);
            $nowtime=date("Y-m-d");
            $a=strtotime($nowtime);
            $now=strtotime(date("Y-m-d"));
            $gap=$val['button']*3600*24*28;
            $cha=$now-$last;
            if($now-$last>=$gap)
            {
                $typeone[]=$val;
            }
        }
        $unfinish=$this->CostPay->where('pay_state=1')->select();
        $typetwo=array();
        foreach($unfinish as $val2)
        {
            $arr=$this->Cost->where('company_id='.$val2['company_id'])->find();
            $typetwo[]=array_merge((array)$arr,(array)$val2);
        }
        //未结清查询
        $alltype=array_merge((array)$typeone,(array)$typetwo);

        $list=array();
        foreach($alltype as $val2)
        {
            $val2["company"]=$this->getCompanynameByid($val2['company_id']);
            $list[]=$val2;
        }
        return $list;
    }

    public function getCompanynameByid($id)
    {
        return M("UserEstp")->where("id=".$id)->getField('company');
    }

    public function getCostinfobyId($id)
    {
        return M("Cost")->where('company_id='.$id)->find();
    }



}