<?php
/**
 * Created by PhpStorm.
 * User: qiush
 * Date: 2017/5/9
 * Time: 12:06
 */
namespace Home\Controller;
use Think\Controller;
class UserInformationController extends Controller{
    public function userinformation(){
        checkLoginStatus();
        $id = session('id');
        if (empty($id)){
            alert('未登录，请登录后再试！');
            return;
        }
        $session_users = D('user')->where("user_id='$id'")->find();
        $this->assign('session_users', $session_users);

        $sql = "select * from jgbs_user where user_id=$id";
        $results = M()->db()->query($sql);
        $this->assign('results',$results);

        //查询最新的一个公告
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $notices =  $Model -> query("select * from jgbs_notice where nt_id > 0  order by nt_id desc limit 1");
        $this->assign('notices',$notices);

        $this->display();
    }

    //编辑按钮
    public function edit_btn(){
        $uid=$_POST['uid'];
        $user=M('user');
        $result=$user->where("user_id='$uid'")->find();

        header("Content-type:application/json;");
        echo json_encode($result);
    }


    //个人信息保存
    public function user_save(){
        $id = session('id');
        $user=M('user');

        $user_username = I('post.user_name');
        $user_gender = I('post.user_gender');
        $user_age = I('post.user_age');
        $user_phone = I('post.user_phone');
//        $user_email = I('post.user_email');
        //echo $user_email;
        if(empty($user_username)){
            echo '用户名不能为空';
            return;
        }

        $data['user_username']= $user_username;
        $data['user_gender']= $user_gender;
        $data['user_age']= $user_age;
        $data['user_phone']= $user_phone;

//        $data['user_mail']= $user_email;
        // 更新数据
        $results=$user->where("user_id='$id'")->save($data);

        if($results !== false){
            echo json_encode($user_email);
        }else{
            echo '操作失败！';
        }

    }
}


