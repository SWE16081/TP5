<?php
/**
 * Created by PhpStorm.
 * User: SWESWE
 * Date: 2018/11/26
 * Time: 20:13
 */


namespace app\api\controller;
use think\Controller;

use app\api\model\Usercheck as UsercheckModel;
class Usercheck extends Controller{
    public function check(){
//        header("Content-type: text/html; charset=utf-8");
        if(request()->isPost()){
            $code=input('post.')['code'];
            $AppId="wx655f7a604e6db470";
            $AppSecret="5360c7bd84d4b499bf5909208b290346";
            $c= file_get_contents("https://api.weixin.qq.com/sns/jscode2session?appid=".$AppId.
                "&secret=".$AppSecret."&js_code=".$code."&grant_type=authorization_code");
            $res=json_decode($c);
            if(!array_key_exists("openid",$res)) {
              return json($res);
            }
            $usercheckModel=new UsercheckModel();
            $result=$usercheckModel->check($res);
            if($result!=0)
            {
                return json(['code'=>200,'userid'=>$result[0]['userid']]);
            }
            else {//未查到数据 插入数据
                if($usercheckModel->insert($res)==1)
                {
                    $result2=$usercheckModel->check($res);
                    if($result2!=0)
                    {
                        return json(['code'=>200,'userid'=>$result2[0]['userid']]);
                    }
                    else{
                        return json(['error'=>'数据插入错误','code'=>404]);
                    }
                }
                else{
                    return json(['error'=>404]);//数据插入失败
                }

            }
        }
        else{
            return json(['error'=>'请求错误'],404);
//            abort(404);
        }

    }
}