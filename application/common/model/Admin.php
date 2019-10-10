<?php
namespace app\common\model;
use think\Loader;
use think\Model;

class Admin extends Model{
    protected $pk = 'admin_id'; //主键
    protected $table = 'blog_admin';

    // 登录
    public function login($data){
        //halt($data);
        // 1.执行验证
        $validate = Loader::validate('Admin');
        if(!$validate->check($data)){
            return ['valid'=>0,'msg'=>$validate->getError()];
            //dump($validate->getError());
        }
        //2.比对用户名和密码是否正确
        $userInfo = $this->where('admin_username', $data['admin_username'])->where('admin_password', $data['admin_password'])->find();
        //halt($userInfo);
        if(!$userInfo){
            //未匹配到相关数据，返回null
            return ['valid'=>0, 'msg'=>'用户名或密码不正确'];
        }

        //3.将用户信息存入到session中

        session('admin.admin_id', $userInfo['admin_id']);
        session('admin.admin_username', $userInfo['admin_username']);

        //dump(session('admin.admin_id'));
        return ['valid'=>1, 'msg'=>'登录成功'];
    }


}