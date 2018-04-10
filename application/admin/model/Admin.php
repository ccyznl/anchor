<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/8
 * Time: 23:21
 */

namespace app\admin\model;

use think\Model;
use think\Session;

class Admin extends Model {

    /**
     * 开启自动写入时间戳字段
     */
    protected $autoWriteTimestamp = 'int';

    /**
     * 定义创建时间戳字段
     */
    protected $createTime = 'createTime';

    /**
     * 定义更新时间戳字段
     */
    protected $updateTime = 'updateTime';

    /**
     * 重置用户密码
     * @param: unknown $uid
     * @param: unknown
     * @return: 
     */
    public function  resetPassword($uid, $newPassword) {
        $passwd = $this->encryptPassword($newPassword);
        $ret = $this->where(['id' => $uid])->update(['password' => $passwd]);
        return $ret;
    }

    /**
     * 密码加密
     * @param: unknown $password
     * @return: 
     */
    protected function encryptPassword($password, $salt = '', $encrypt = 'md5') {
        return $encrypt($password . $salt);
    }
}

?>

