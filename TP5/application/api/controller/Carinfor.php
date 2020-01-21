<?php
namespace app\api\controller;
use think\Controller;
use app\api\model\Carinfor as CarInforModel;
//use think\Loader;

class Carinfor extends Controller{
    //数据插入
    public function index(){
        if(request()->isPost()){
            $data = input('post.');//获取提交的用户所有信息
            $carInforModel=new CarInforModel();
            //验证
            $validate=\think\loader::validate('Carinfor');
            if(!$validate->check($data))
            {
                return json(['code'=>404,'error'=>$validate->getError()]);
            }
            if($carInforModel->CarInert($data)==1)
            {
                return json(['msg' => 'true']);
            }else{
                return json(['msg'=>'false']);
            }
        }else{
            json(['error'=>'请求错误','code'=>404]);
        }
    }
    //数据查询
    public function select(){
        if(request()->isGet())
        {
            $carInforModel=new CarInforModel();
            $data=$carInforModel->CarSelect();
            if($data!=0)
            {
                return json($data);
            }
            else{
                return json(['msg'=>'暂无数据','code'=>404]);
            }
        }else{
            return json(['error'=>'请求错误','code'=>404]);
        }

    }
    //数据删除
    public function delete(){
        if(request()->isPost()){
            $data=input('post.');
            $carInforModel=new CarInforModel();
            if($carInforModel->Cardelete($data)==1){
                return json(['msg'=>'删除成功','code'=>200]);
            }else{
                return json(['msg'=>'删除失败','code'=>404]);
            }

        }else{
            return json(['error'=>'请求错误','code'=>404]);
        }

    }
}