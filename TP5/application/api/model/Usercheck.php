<?php
/**
 * Created by PhpStorm.
 * User: SWESWE
 * Date: 2018/11/26
 * Time: 20:14
 */
namespace app\api\model;
use think\Model;
class Usercheck extends  Model{
    //查询数据
    public function check($data){
        //查到数据
        $data=db('usercheck')->where('openid',$data->openid)->select();
        if($data)
        {
            return $data;
        }
        else{
            return 0;
        }

    }

    public function insert($data){
        //未查到数据 插入数据insert
        dump($data->openid);
        $data2=['openid'=>$data->openid];
        if(db('usercheck')->insert($data2))
        {
            return 1;
        }
        else{
            return 0;
        }

    }

}
