<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
//定义一个站点根路径常量
define('SITE_URL','');
//define('SITE_URL','http://127.0.0.1');
//# 绑定前台模块,只能通过index.php访问前台
//输入index.php默认只能访问前台
//1、入口绑定之前
//	http://www.tp.com/admin.php/模块/控制器/方法
//2、入口绑定之后
//	http://www.tp.com/admin.php/控制器/方法
define("BIND_MODULE",'index');

// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
