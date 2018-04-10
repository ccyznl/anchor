<?php
/**
 * Created by PhpStorm.
 * User: Adminstrator
 * Date: 2018/4/8
 * Time: 23:20
 */

namespace app\admin\library;

use app\admin\model\Admin;
use fast\Random;
use fast\Tree;
use think\Config;
use think\Cookie;
use think\Request;
use think\Session;

class Auth extends \fast\Auth {

    /**
     *
     */
    protected $_error = '';

    /**
     *
     */
    protected $requestUri = '';

    /**
     *
     */
    protected $breadCrumb = [];

    /**
     *
     */
    protected $logined = false;

    /**
     * Auth constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function __get($name)
    {
        return Session::get('admin.' . $name);
    }


}

