<?php
/**
 * Created by PhpStorm.
 * User: qiush
 * Date: 2017/5/7
 * Time: 1:26
 */
namespace Home\Controller;
use Think\Controller;
class ProjectfindController extends Controller {

    public function all_projectfind(){

        checkLoginStatus();
        $id=session('id');
        $session_users=D('user')->where("user_id='$id'")->find();
        $this->assign('session_users',$session_users);
//        print_r($session_users);

        $projects = M('project')->where('pro_type=3 AND pro_examine=1')->select();
        $this->assign('projects',$projects);

        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $maxUser =  $Model -> query("select * from jgbs_user where user_pro_num > 0  order by user_pro_num desc limit 5");
        $this->assign('maxUser',$maxUser);

        //查询最新的一个公告
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $notices =  $Model -> query("select * from jgbs_notice where nt_id > 0  order by nt_id desc limit 1");
        $this->assign('notices',$notices);

        $this->display();
    }

    //委托项目发布控制器
    public function issue(){
        $id=session('id');
        if (empty($id)){
            alert('未登录，请登录后再试！');
            return;
        }

        $username=D('user')->where("user_id='$id'")->getField('user_username');
        if (!IS_POST) {
            $this->display();
            return;
        }

        $title = I('post.title');
        $content = I('post.content');

        if (empty($title) || empty($content)) {

            alert('内容不能为空');
            return;
        }

        $project=D('project');
        $data['pro_belong_user'] = $username;
        $data['pro_title'] = $title;
        $data['pro_content'] = $content;
        $data['pro_date']=date('Y-m-d');
        $data['pro_examine']=0;
        $data['pro_type']=3;
        $result = $project->add($data);

        if (!$result) {
            alert('发布失败，请重试！');
            return;
        }
        alert('发布成功，等待审核', 'success', U('projectfind/all_projectfind'));
    }

    //页面session是否存在判断
//    public function detail_project(){
//        checkLoginStatus();
//        $id=session('id');
//        $session_users=D('user')->where("user_id='$id'")->find();
//        $this->assign('session_users',$session_users);
////        print_r($session_users);
//        $this->display();
//    }
    //点击委托标签发送的ID跳转页面
    public function send_pid(){
        checkLoginStatus();
        $id=session('id');
        $session_users=D('user')->where("user_id='$id'")->find();
        $this->assign('session_users',$session_users);

        $pid=I('get.pid');
        $projects = M('project')->where("pro_id='$pid'AND pro_type=3 AND pro_examine=1")->select();
        $this->assign('projects',$projects);

        //查询最新的一个公告
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $notices =  $Model -> query("select * from jgbs_notice where nt_id > 0  order by nt_id desc limit 1");
        $this->assign('notices',$notices);

        $this->display('detail_project');
//        print_r($projects);
    }

    public function is_acc(){
        $pid=$_POST['pid'];
        $projects = M('project')->where("pro_id='$pid'AND pro_type=3 AND pro_examine=1")->find();
       echo json_encode($projects);
    }
    //detail_project页面AJAX操作
    public function acc_pid(){
        $id=session('id');
        $session_users=D('user')->where("user_id='$id'")->find();
        if (empty($id)){
            alert('未登录，请登录后再试！');
            return;
        }
        $pid=$_POST['pid'];
        $project=M('project');
        $data['pro_complete']=0;
        $data['pro_acc_user']=$session_users['user_username'];
        $result=$project->where("pro_id='$pid'")->save($data);

        if($result !== false){
            echo '接取委托成功，请及时完成';
        }else{
            echo '操作失败！';
        }
        $results=$project->where("pro_id='$pid'")->find();
        echo json_encode($results);
    }
    //终止
    public function quit_pid(){
        $id=session('id');

        if (empty($id)){
            alert('未登录，请登录后再试！');
            return;
        }
        $pid=$_POST['pid'];
        $project=M('project');
        $data['pro_complete']='';
        $data['pro_acc_user']='';
        $result=$project->where("pro_id='$pid'")->save($data);

        if($result !== false){
            echo '已放弃任务';
        }else{
            echo '操作失败！';
        }
        $results=$project->where("pro_id='$pid'")->find();
        echo json_encode($results);
    }

    public function over_pid(){
        $id=session('id');

        if (empty($id)){
            alert('未登录，请登录后再试！');
            return;
        }
        $pid=$_POST['pid'];
        $project=M('project');
        $data['pro_complete']=1;
        $result=$project->where("pro_id='$pid'")->save($data);

        $sql="select pro_acc_user from jgbs_project where pro_id=$pid";
        $acc_user= M()->db()->query($sql);
        $acc_users=$acc_user[0]['pro_acc_user'];
        $count=$project->where("pro_acc_user='$acc_users' and pro_complete=1 and pro_type=3")->count();
        $user=M('user');
        $data['user_pro_num']=$count;
        $user->where("user_username='$acc_users'")->save($data);


        if($result !== false){
            echo '已完成任务';
        }else{
            echo '操作失败！';
        }
        $results=$project->where("pro_id='$pid'")->find();
//        echo json_encode($results);
    }
}