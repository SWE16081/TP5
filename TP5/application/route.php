<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
// 注册路由 访问到Index模块index控制器index方法
//Route::rule('/','index/index/index');
//前端路由设置
Route::rule('article','article/index');
Route::rule('article/relate','article/relate');

Route::rule('cate','cate/index');
Route::rule('search','search/index');
//Route::rule('__URL__','/public/index.php');

////后端路由设置
Route::rule('alst','admin/lst');
Route::rule('aadd','admin/add');
Route::rule('adel','admin/del');
Route::rule('aedit','admin/edit');
Route::rule('alogout','admin/logout');
Route::rule([
    "arlst"=>"article/lst",
    "aradd"=>"article/add",
    "ardel"=>"article/del",
    "aredit"=>"article/edit",
    "clst"=>"cate/lst",
    "cadd"=>"cate/add",
    "cdel"=>"cate/del",
    "cedit"=>"cate/edit",
    "llst"=>"links/lst",
    "ladd"=>"links/add",
    "ldel"=>"links/del",
    "ledit"=>"links/edit",
    "login"=>"login/login",
    "tlst"=>"tags/lst",
    "tadd"=>"tags/add",
    "tdel"=>"tags/del",
    "tedit"=>"tags/edit",
]);
return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
