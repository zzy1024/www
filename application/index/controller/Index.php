<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\config;

class Index extends Controller
{
    public function index()
    {
        //dump(Db::connect());
        $result = Db::query('select * from imooc_user where id = 1');
        dump($result);
        //$result1 = Db::execute('insert into imooc_user (username, password ,email) values (?, ?, ?)',["dawei2", "thinkphp2","think2@qq.com"]);
        //Db::table('imooc_user')->where('id',4)->delete();
        dump(Db::query('select * from imooc_user'));
        return '123';
    }
}
