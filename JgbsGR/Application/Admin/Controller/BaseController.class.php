<?php
/**
 * Created by PhpStorm.
 * User: Qiushiyuan
 * Date: 2017/4/9
 * Time: 16:53
 */

namespace Admin\Controller;
use Think\Controller;

class BaseController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->init();
    }
    private function init(){
        if (!checkLoginStatus()) {
            redirect(U('Home/login/login'));
        }
    }
}