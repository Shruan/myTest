<?php
/**
 * Created by PhpStorm.
 * User: Qiushiyuan
 * Date: 2017/4/9
 * Time: 16:58
 */

namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller
{
    public function login(){
        if (!IS_POST) {
            $this->display();
            return;
        }

        $username = I('post.username');
        $password = I('post.password');

        if (empty($username) || empty($password)) {
            alert('用户名或帐号错误');
            return;
        }

        $password = md5($password); //密码加密算法
        $user = D('user')->where("user_username='".$username."'")->find();

        if($user['user_type']!=0){
            alert('登录失败', 'default', U('login/login'));
            return;
        }

        if ($user['user_password'] == $password) {
            //session存储
            session('id', $user['user_id']);
            $id=session('id');
            $sesion_users=D('user')->where("user_id='$id'")->find();
            $this->assign('sesion_users',$sesion_users);

            alert('登录成功', 'success', U('index/index'));
            return;
        }else{
            alert('登录失败', 'default', U('login/login'));
        }
    }
    public function logout(){
        session(null);
        $this->redirect('../Home/index/index');
    }
}