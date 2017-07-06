<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        checkLoginStatus();
        $id=session('id');
        $session_users=D('user')->where("user_id='$id'")->find();
        $this->assign('session_users',$session_users);
        //获取委托项目数据
        $p1counts=M('project')->where('pro_type=1 AND pro_examine=1')->count();
        $projects = M('project')->where('pro_type=1 AND pro_examine=1')->limit(($p1counts-5),$p1counts)->select();
        $this->assign('projects',$projects);
        //获取混合模块首个书签的数据
        $p2counts=M('project')->where('pro_type=2 AND pro_examine=1')->count();
        $projects2 = M('project')->where('pro_type=2 AND pro_examine=1')->limit(($p2counts-4),$p2counts)->select();
        $this->assign('projects2',$projects2);

        $p3counts=M('project')->where('pro_type=3 AND pro_examine=1')->count();
        $projects3 = M('project')->where('pro_type=3 AND pro_examine=1')->limit(($p3counts-4),$p3counts)->select();
        $this->assign('projects3',$projects3);

        $p4counts=M('project')->where('pro_type=4 AND pro_examine=1')->count();
        $projects4 = M('project')->where('pro_type=4 AND pro_examine=1')->limit(($p4counts-4),$p4counts)->select();
        $this->assign('projects4',$projects4);

        //获取咨询模块数据
        $cstcounts=M('consult')->count();
        $consults = M('consult')->limit('$cstcounts-4',$cstcounts)->select();
        $this->assign('consults',$consults);

        //查询完成项目数值最大的前五个  ;
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $maxUser =  $Model -> query("select * from jgbs_user where user_pro_num > 0  order by user_pro_num desc limit 5");
        $this->assign('maxUser',$maxUser);


        //查询最新的一个公告
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $notices =  $Model -> query("select * from jgbs_notice where nt_id > 0  order by nt_id desc limit 1");
        $this->assign('notices',$notices);

        $this->display();
    }
}