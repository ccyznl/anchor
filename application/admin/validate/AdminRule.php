<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/10
 * Time: 21:58
 * Comment: 管理员规则验证
 */
namespace app\admin\validate;

use think\Validate;

class AdminRule extends Validate {

    /**
     * 正则格式
     */
    protected $regex = ['format' => '[a-z0_9\/]+'];

    /**
     * 验证规则
     */
    protected $rule = [
        'name'  =>  'require|format|uique:AuthRule',
        'title' =>  'require',
    ];

    /**
     * 提示消息
     */
    protected $message = [

    ];
}