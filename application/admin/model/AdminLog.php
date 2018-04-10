<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/8
 * Time: 23:18
 * Comment: 管理者登录失败日志实体类
 */

namespace app\admin\model;

use app\admin\library\Auth;
use think\Model;

class AdminLog extends Model {

    /**
     * 开启自动写入时间
     */
    protected $autoWriteTimestamp = 'int';

    /**
     * 定义创建时间戳字段名
     */
    protected $createTime = 'createTime';

    /**
     * 定义更新时间戳字段名
     */
    protected $updateTime = 'updateTime';

    /**
     * 自定义日志标题
     */
    protected static $title = '';

    /**
     * 自定义日志内容
     */
    protected static $content = '';

    /**
     * 设置标题
     * @param mixed $title
     */
    public static function setTitle($title)
    {
        self::$title = $title;
    }


    /**
     * 设置内容方法
     * @param mixed $content
     */
    public static function setContent($content)
    {
        self::$content = $content;
    }

    /**
     *
     */
    public static function record($title = '') {
        $auth = Auth::instance();
    }
}