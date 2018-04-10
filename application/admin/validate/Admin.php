<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/10
 * Time: 21:58
 * Comment: 管理员的验证规则
 */
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate {

    protected $rule = [
        'username'  =>  'require|max:50|unique:admin',
        'nickname'  =>  'require',
        ''
    ];
}