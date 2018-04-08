<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/8
 * Time: 23:14
 * Comment: 登录失败时未出现提示的BUG
 */

namespace app\admin\behavior;

class AdminLog {

    public function run(&$params) {
        if (request()->isPost()) {
            \app\admin\model\AdminLog::record();
        }
    }
}