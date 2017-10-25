<?php
namespace Admin\Controller;
use Think\Controller;

class BaseController extends CommonController
{
    private $Role;
    private $AdmMenu;

    public function _initialize()
    {
        $adm_name = $_SESSION['adm']['adm_user'];
        $adm_id = $_SESSION['adm']['adm_id'];
        if (empty($adm_id) && empty($adm_name)) {
            $this->error('请重新登录', U('Common/login'));
        }
        $this->Role = D('Role');
        $this->AdmMenu = D('AdmMenu');


        $GLOBALS['role'] = $this->Role->getRole($_SESSION['adm']['adm_role']);
        $this->top();
        $this->leftMenu();
    }

    public function top()
    {
        $this->assign('adm', $_SESSION['adm']);
        
    }

    public function leftMenu()
    {
        $where = $GLOBALS['role']['role'] == '*' ? "1=1" : " `menu_id` in (" . $GLOBALS['role']['role'] . ")";
        $sql = "select * from `sd_adm_menu` where " . $where;
        $meun = $this->AdmMenu->query($sql);
        $left_menu = array();
        foreach ($meun as $key => $val) {
            if ($val['menu_lv'] == 1) {
                $left_menu[$val['menu_id']] = $val;
            } else if ($val['menu_lv'] == 2) {
                $menu_lv2[$val['menu_id']] = $val;
            } else {
                $menu_lv2[$val['parent_id']]['child'][] = $val;
            }
        }
        foreach ($menu_lv2 as $key1 => $val1) {
            $left_menu[$val1['parent_id']]['child'][] = $val1;
        }
        // var_dump($left_menu[2]);
        $this->assign('leftmenu', $left_menu);
    }

}