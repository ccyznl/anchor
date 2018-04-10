<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/10
 * Time: 22:00
 * Comment: 用户规则验证
 */

namespace app\admin\validate;

use think\Validate;

class UserRule extends Validate {

    /**
     * 验证规则
     */
    protected $rule = [];

    /**
     * 提示消息
     */
    protected $message = [];

    /**
     * 验证场景
     */
    protected $scene = [
        'add'   =>  [],
        'edit'  =>  [],
    ];
}