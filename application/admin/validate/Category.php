<?php
namespace app\admin\validate;

use think\Validate;

class Category extends Validate{
    protected $rule = [
        'cate_name' => 'require',
        'cate_sort' => 'require|number|between:1,9999',
    ];

    protected $message = [
        'cate_name.require' => '请填写栏目名称',
        'cate_sort.require' => '请填写排序',
        'cate_sort.number' => '排序必须为数字',
        'cate_sort.between' => '排序必须为1-9999的数字',
    ];
}