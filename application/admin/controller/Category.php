<?php
namespace app\admin\controller;

use think\Controller;

class Category extends Controller{
    protected $db;
    protected function _initialize(){
        parent::_initialize();
        $this->db = new \app\common\model\Category();
    }
    //首页
    public function index(){
        return $this->fetch();
    }

    public function store(){
        if(request()->isPost()){
            //halt(input('post.'));
            $res = $this->db->store(input('post.'));
            if($res['valid']){
                return $this->success($res['msg'], 'index');exit;
            }else{
                return $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
}