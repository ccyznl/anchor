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

    /**
     * 验证规则
     */
    protected $rule = [
        'username'  =>  'require|max:50|unique:admin',
        'nickname'  =>  'require',
        'password'  =>  'require',
        'email'     =>  'require|email|unique:admin,email',
    ];

    /**
     * 提示消息
     */
    protected $message = [];

    /**
     * 字段描述
     */
    protected $field = [];

    /**
     * 验证场景
     */
    protected $scene = [
        'add'   =>  ['username', 'email', 'nickname', 'password'],
        'edit'  =>  ['username', 'email', 'nickname'],
    ];

    /**
     * 管理者构造函数
     * @param array $rule
     * @param array $message
     * @param array $field
     */
    public function __construct(array $rules = [], $message = [], $field = [])
    {
        $this->field = [
            'username'  =>  __('Username'),
            'nickname'  =>  __('Nickname'),
            'password'  =>  __('Password'),
            'email'     =>  __('Email'),
        ];
        parent::__construct($rules, $message, $field);
    }
}