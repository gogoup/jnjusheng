<?php
 namespace Admin\Controller;
 use Think\Controller;

 class PublishController extends BaseController
 {
     //新闻接受数据
        public function getnewdata()
    {
        $data=I('post.data');
        $data[1]["createtime"]=date("Y-m-d");

       return $data;
    }

     //添加数据
     public function adddata($table,$data)
     {
         return M($table)->add($data);
     }


     //提交数据
     public function send()
     {
        $data=$this->getnewdata();
//         var_dump($data);die();
         if(empty($data[1]['title']))
         {
             $this->error("网络异常，稍后再试...",'',1);
             exit;
         }
         $msg=$this->adddata($data['table'],$data[1]);
         if($msg)
         {
           echo true;
         }else{
             echo false;
         }
     }

    //通知公告
     public function notice()
     {
         $this->assign('actionname',"通知公告");
         $this->assign('actioned',"NewNotice");
         $this->display('new');
     }
     //企业新闻
     public function enterprise()
     {
         $this->assign('actionname',"企业新闻");
         $this->assign('actioned',"NewEnterprise");
         $this->display('new');
     }
     //申报快讯
     public function falsh()
     {
         $this->assign('actionname',"申报快讯");
         $this->assign('actioned',"NewFalsh");
         $this->display('new');
     }
     //媒体报道
     public function media()
     {
         $this->assign('actionname',"媒体报道");
         $this->assign('actioned',"NewMedia");
         $this->display('new');
     }


     public function activity()
     {
         $this->display();
     }

     public function project()
     {
         $this->display();
     }





 }