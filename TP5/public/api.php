<?php
/**
 * Created by PhpStorm.
 * User: SWESWE
 * Date: 2018/9/21
 * Time: 9:22
 */
// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
//定义一个站点根路径常量
define('SITE_URL','https://123.207.89.57/TP5');
define("BIND_MODULE",'api'); # 绑定后台模块
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
//\think\App::route(false);