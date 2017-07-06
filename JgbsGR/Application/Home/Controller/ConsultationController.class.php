<?php
/**
 * Created by PhpStorm.
 * User: qiush
 * Date: 2017/5/8
 * Time: 20:00
 */

namespace Home\Controller;
use Think\Controller;
class ConsultationController extends Controller {
    //session缓存，与咨询列表数据查询
    public function all_consultation(){
        checkLoginStatus();
        $id=session('id');
        $session_users=D('user')->where("user_id='$id'")->find();
        $this->assign('session_users',$session_users);

        $consults = M('consult')->select();
        $this->assign('consults',$consults);

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

        $consult=D('consult');
        $data['cst_belong_user'] = $username;
        $data['cst_title'] = $title;
        $data['cst_content'] = $content;
        $data['cst_date']=date('Y-m-d');

        $result = $consult->add($data);

        if (!$result) {
            alert('发布失败，请重试！');
            return;
        }
        alert('咨询发布成功', 'success', U('consultation/all_consultation'));
    }

    //点击委托标签发送的ID跳转页面
    public function send_cid(){
        checkLoginStatus();
        $id=session('id');
        $session_users=D('user')->where("user_id='$id'")->find();
        $this->assign('session_users',$session_users);

        $cid=I('get.cid');
        $consults = M('consult')->where("cst_id='$cid'")->select();
        $this->assign('consults',$consults);


        $sql="select * from jgbs_reply join jgbs_user on jgbs_reply.user_id=jgbs_user.user_id where jgbs_reply.consult_id=$cid";
        $replies = M()->db()->query($sql);
        $this->assign('replies',$replies) ;

        //查询最新的一个公告
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $notices =  $Model -> query("select * from jgbs_notice where nt_id > 0  order by nt_id desc limit 1");
        $this->assign('notices',$notices);

        $this->display('detail_consultation');
    }
    public function reply(){
        $cid=$_POST['cid'];
        $conment = $_POST['content'];
        $id=session('id');

        if (empty($id)){
            alert('未登录，请登录后再试！');
            return;
        }

        if (!IS_POST) {
            $this->display();
            return;
        }

        if ( empty($conment)) {
            alert('内容不能为空');
            return;
        }

        $reply=D('reply');
        $data['consult_id'] = $cid;
        $data['user_id'] = $id;
        $data['reply_conment'] = $conment;
        $data['reply_date']=date('Y-m-d');

        $result = $reply->add($data);

        if (!$result) {
            alert('回复失败，请重试！');
            return;
        }
        alert('咨询回复成功', 'success', U('consultation/detail_consultation'));
    }

}