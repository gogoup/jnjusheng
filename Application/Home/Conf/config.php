<?php
return array(
	//数据库配置项
    'DB_TYPE'    =>  'mysql',     // 数据库类型
    'DB_HOST'    =>  'localhost', // 服务器地址
    'DB_NAME'    =>  'hatch',      // 数据库名
    'DB_USER'    =>  'root',      // 用户名
    'DB_PWD'     =>  'root',     // 密码
    'DB_PORT'    =>  '3306',      // 端口
    'DB_PREFIX'  =>  'sd_',    // 数据库表前缀
    //默认错误跳转对应的模板文件
    'TMPL_ACTION_ERROR' => 'Public:error',
    'SHOW_PAGE_TRACE'=>true,
);
