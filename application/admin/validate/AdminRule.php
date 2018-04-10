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
        'name.format'   =>  'URL规则只能是小写字母、数字、下划线和/组成',
    ];

    /**
     * 字段描述
     */
    protected $field = [];

    /**
     * 验证场景
     */
    protected $scene = [];

    /**
     * AdminRule constructor.
     * @param array $rules
     * @param array $message
     * @param array $field
     */
    public function __construct(array $rules = [], $message = [], $field = [])
    {
        $this->field = [
            'name'  =>  __('Name'),
            'title' =>  __('Title'),
        ];
        $this->message['name.format'] = __('Name only support letters, numbers, underscore and slash');
        parent::__construct($rules, $message, $field);
    }
}