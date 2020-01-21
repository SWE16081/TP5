<?php
/**
 * Created by PhpStorm.
 * User: SWESWE
 * Date: 2018/11/27
 * Time: 21:39
 */
namespace  app\api\validate;
use think\Validate;
class Carinfor extends Validate{
    //验证规则
    protected $rule=[
        'userid'  => 'require',
        'departure' => 'require|different:destination',//different 不同于 某个字段
        'destination' => 'require|different:departure',
        'time' => 'require|date|dateFormat:y-m-d h:i:s',//日期有效性验证--只能提前一周发布信息--前端设置日期下拉框 七天以内
        'contractInfor' => 'require',
//        'contractInfor' => 'require|/^1[34578][0-9]{9}$/',//还可以填写微信号 ---前端验证手机号合法性
    ];
    //错误提示
    protected $message=[
        'userid.require'=>'用户id不能为空',
        'departure.require'=>'出发地点不能为空',
        'departure.different'=>'出发地点不能与目的地相同',
        'destination.require'=>'目的地不能为空',
        'departure.different'=>'目的地不能与出发地点相同',
        'time.require'=>'拼车日期必须填写',
        'time.date'=>'拼车日期格式必须正确',
        'time.dateFormat'=>'拼车日期格式必须正确',
        'contractInfor.require'=>'联系方式必须填写',
    ];
}
