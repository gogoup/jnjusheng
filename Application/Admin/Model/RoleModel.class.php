<?php
namespace Admin\Model;
use Think\Model;

class RoleModel extends Model
{

    public function getRole($roleid='')
    {
        return $this->where('role_id='.$roleid)->find();
    }



}