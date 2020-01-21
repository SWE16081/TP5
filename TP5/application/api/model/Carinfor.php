<?php
namespace app\api\model;
use think\Model;
class Carinfor extends Model{
    //拼车信息插入
    function CarInert($data){
        //字段信息正确性验证
        if(db('carinfor')->insert($data))
        {
            return 1;//插入信息成功
        }else {
            return 0;//插入信息失败
        }
    }
    //拼车信息查询
    function CarSelect(){
        $res=db('carinfor')->select();
        if($res)
        {
            return $res;
        }
        else
            return 0;
    }
    //拼车信息删除
    function Cardelete($data){
        if(db('carinfor')->where('id',$data['id'])->delete())
        {
            return 1;
        }
        else{
            return 0;
        }
    }

}