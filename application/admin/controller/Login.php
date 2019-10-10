<?php
namespace app\admin\controller;
use app\common\model\Admin;
use think\Controller;
class Login extends Controller{
    public function login(){
        //测试数据库链接
        //$data = db('admin')->find(1);
        //dump($data);
        if(request()->isPost()){
            //halt($_POST);
            $res = (new Admin())->login(input('post.'));
            if($res['valid']){
                //登录成功
                $this->success($res['msg'], 'admin/entry/index');
                exit;
            }else{
                //登录失败
                $this->error($res['msg']);
            }
        }
        //加载注册模版文件
        return $this->fetch();
    }
}