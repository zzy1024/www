<?php
    namespace app\index\controller;
    use think\Controller;

    class Index extends Controller{
        public function index(){
            //return 'this is a app\index\controller';
            //return view('./index.html');
            return $this->fetch('./index.html', [
                'email' => '890@qq.com',
                'userName' => 'zzy',
            ]);
        }
    }
