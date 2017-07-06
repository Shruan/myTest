<?php
/**
 * Created by PhpStorm.
 * User: qiush
 * Date: 2017/4/20
 * Time: 21:33
 */
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login()
    {
        if (!IS_POST) {
            $this->display();
            return;
        }

        $username = I('post.username');
        $password = I('post.password');

        header("Content-type:text/html;charset=utf-8");
        if (empty($username) || empty($password)) {
            alert('用户名或帐号错误');
            return;
        }

        $password = md5($password); //密码加密算法
        $user = D('user')->where("user_username='".$username."'")->find();


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
    //登出  
    public function logout(){
        session(null);
        $this->redirect('index/index');
    }

    public function register()
    {
        if (!IS_POST) {
            $this->display();
            return;
        }
        //使用I方法获取html表单提交的数据
        $username = I('post.username');
        $password = I('post.password');
        $passwordConfirm = I('post.passwordConfirm');

        //判断用户名密码均不能为空
        if (empty($username)) {
            alert('用户名不能为空', 'error');
            return;
        }
        if (empty($password)) {
            alert('密码不能为空', 'error');
            return;
        }
        if ($password !== $passwordConfirm) {
            alert('密码不一致', 'error');
            return;
        }

        //注册成功将密码加密录入数据库中
        $user = D('user');
        $data['user_username'] = $username;
        $data['user_password'] = md5($password);
        $result = $user->add($data);
        if (!$result) {
            alert('注册失败');
            return;
        }
        alert('注册成功', 'success', U('login/login'));
    }

    //修改密码
    public function modify(){
        if (!IS_POST) {
            $this->display();
            return;
        }
        //使用I方法获取html表单提交的数据
        $username = I('post.username');
        $password = I('post.password');
        $newpassword = I('post.newpassword');

        //判断用户名密码均不能为空
        if (empty($username)) {
            alert('用户名不能为空', 'error');
            return;
        }
        if (empty($password)) {
            alert('密码不能为空', 'error');
            return;
        }
        if (empty($newpassword)) {
            alert('新密码不能为空', 'error');
            return;
        }

        $password = md5($password); //密码加密算法
        $user = D('user')->where("user_username='".$username."'")->find();

        if ($user['user_password'] == $password) {
            $data['user_password'] = md5($newpassword);

            $result = D('user')->where("user_username='".$username."'")->save($data);
            if (!$result) {
                alert('修改失败');
                return;
            }
            alert('修改成功', 'success', U('login/login'));
            return;
        }

    }
}