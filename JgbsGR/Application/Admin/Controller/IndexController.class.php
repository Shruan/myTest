<?php
namespace Admin\Controller;

class IndexController extends BaseController {
//    public function index(){
//        //统计待审核委托数量
//        $waits1 = M('project')->where('pro_type=1 AND pro_examine=0')->count();
//        $this->assign('waits1',$waits1);
////      $this->display();
//    }
    public function project(){
       //获取待审核的委托
        $w_projects = M('project')->where('pro_type=1 AND pro_examine=0')->select();
        $this->assign('w_projects',$w_projects);

        //获取已审核通过的委托
        $a_projects = M('project')->where('pro_type=1 AND pro_examine=1')->select();
        $this->assign('a_projects',$a_projects);

        $f_projects = M('project')->where('pro_type=1 AND pro_examine=2')->select();
        $this->assign('f_projects',$f_projects);

        $this->display();
    }

    //ajax获取数据
    public function menu(){
        //统计待审核委托数量
        $waits1 = M('project')->where('pro_type=1 AND pro_examine=0')->count();
        $waits2 = M('project')->where('pro_type=2 AND pro_examine=0')->count();
        $waits3 = M('project')->where('pro_type=3 AND pro_examine=0')->count();
        $waits4 = M('project')->where('pro_type=4 AND pro_examine=0')->count();
        $waits5=$waits2+$waits3+$waits4;
        $num=array($waits1,$waits2,$waits3,$waits4,$waits5);
//        $p_label=I('p_label');
        echo json_encode($num);
    }

//通过a标签传输数据<a href=" __URL__/pass_btn/pro_id/{$w_project.pro_id}">通过</a>
    public function pass_btn(){
        $acc_id = I('get.pro_id');
        $project=D('project');
        $index=$project->where("pro_id='$acc_id'")->find();
        $type=$index['pro_type'];
        // 需要更新的数据
        $data['pro_examine']= 1;
        // 更新数据
        $result=$project->where("pro_id='$acc_id'")->save($data);
        if($result !== false){
            if($type==1){
                alert('操作成功', 'success',U('index/project'));
            }else if($type==2){
                alert('操作成功', 'success',U('index/project_team'));
            }else if($type==3){
                alert('操作成功', 'success',U('index/project_find'));
            }else if($type==4){
                alert('操作成功', 'success',U('index/project_ad'));
            }
        }else{
            echo '操作失败！';
        }
    }

    public function false_btn(){
        $acc_id = I('get.pro_id');
        $project=D('project');
        $index=$project->where("pro_id='$acc_id'")->find();
        $type=$index['pro_type'];
        // 需要更新的数据
        $data['pro_examine']= 2;
        // 更新数据
        $result=$project->where("pro_id='$acc_id'")->save($data);
        if($result !== false){
            if($type==1){
                alert('操作成功', 'success',U('index/project'));
            }else if($type==2){
                alert('操作成功', 'success',U('index/project_team'));
            }else if($type==3){
                alert('操作成功', 'success',U('index/project_find'));
            }else if($type==4){
                alert('操作成功', 'success',U('index/project_ad'));
            }
        }else{
            echo '操作失败！';
        }
    }

    public function del_btn(){
        $project = M("project");
        $uid = I('get.pro_id');
        $index=$project->where("pro_id='$uid'")->find();
        $type=$index['pro_type'];
        // 删除 uid=5 的数据记录
        $result=$project->where("pro_id='$uid'")->delete();

        if($result !== false){
            if($type==1){
                alert('操作成功', 'success',U('index/project'));
            }else if($type==2){
                alert('操作成功', 'success',U('index/project_team'));
            }else if($type==3){
                alert('操作成功', 'success',U('index/project_find'));
            }else if($type==4){
                alert('操作成功', 'success',U('index/project_ad'));
            }
        }else{
            echo '删除数据失败！';
        }
        //删除咨询数据
        $consult = M("consult");
        $cid = I('get.cst_id');
        $result_c=$consult->where("cst_id='$cid'")->delete();
        if($result_c !== false){
            alert('操作成功', 'success',U('index/consultation'));
        }else{
            echo '删除数据失败！';
        }

        //删除回复数据
        $reply = M("reply");
        $rid = I('get.reply_id');

        $result_r=$reply->where("reply_id='$rid'")->delete();
        if($result_r !== false){
            alert('操作成功', 'success',U('index/consultation'));
        }else{
            echo '删除数据失败！';
        }
    }

    public function edit_btn(){
        if(!IS_AJAX) $this->error("操作错误");
        $uid=$_POST['uid'];

        $project=M('project');
        $result=$project->where("pro_id='$uid'")->find();

        header("Content-type:application/json;");
        echo json_encode($result);
    }

    public function save_btn(){
        $uid=$_POST['uid'];
        $project = M("project");

        $index=$project->where("pro_id='$uid'")->find();
//        $type=$index['pro_type'];

        $pro_title = I('post.pro_title');
        $pro_content = I('post.pro_content');
        $pro_belong_user = I('post.pro_belong_user');
        $pro_date = I('post.pro_date');
        $pro_acc_user = I('post.pro_acc_user');
        $pro_complete = I('post.pro_complete');

        $data['pro_title']= $pro_title;
        $data['pro_content']= $pro_content;
        $data['pro_belong_user']= $pro_belong_user;
        $data['pro_date']= $pro_date;
        $data['pro_acc_user']= $pro_acc_user;
        $data['pro_complete']= $pro_complete;
        // 更新数据
        $result=$project->where("pro_id='$uid'")->save($data);

        if($result !== false){
//            if($type==1){
//                alert('操作成功', 'success',U('index/project'));
//            }else if($type==2){
//                alert('操作成功', 'success',U('index/project_team'));
//            }else if($type==3){
//                alert('操作成功', 'success',U('index/project_find'));
//            }else if($type==4){
//                alert('操作成功', 'success',U('index/project_ad'));
//            }
                echo json_encode($uid);
        }else{
            echo '操作失败！';
        }

    }
    public function project_team(){
        //获取待审核的委托
        $w_projects = M('project')->where('pro_type=2 AND pro_examine=0')->select();
        $this->assign('w_projects',$w_projects);

        //获取已审核通过的委托
        $a_projects = M('project')->where('pro_type=2 AND pro_examine=1')->select();
        $this->assign('a_projects',$a_projects);

        $f_projects = M('project')->where('pro_type=2 AND pro_examine=2')->select();
        $this->assign('f_projects',$f_projects);

        $this->display();
    }

    public function project_find(){
        //获取待审核的委托
        $w_projects = M('project')->where('pro_type=3 AND pro_examine=0')->select();
        $this->assign('w_projects',$w_projects);

        //获取已审核通过的委托
        $a_projects = M('project')->where('pro_type=3 AND pro_examine=1')->select();
        $this->assign('a_projects',$a_projects);

        $f_projects = M('project')->where('pro_type=3 AND pro_examine=2')->select();
        $this->assign('f_projects',$f_projects);

        $this->display();
    }

    public function project_ad(){
        //获取待审核的委托
        $w_projects = M('project')->where('pro_type=4 AND pro_examine=0')->select();
        $this->assign('w_projects',$w_projects);

        //获取已审核通过的委托
        $a_projects = M('project')->where('pro_type=4 AND pro_examine=1')->select();
        $this->assign('a_projects',$a_projects);

        $f_projects = M('project')->where('pro_type=4 AND pro_examine=2')->select();
        $this->assign('f_projects',$f_projects);

        $this->display();
    }

    public function consultation(){
        $sql = "select * from jgbs_consult";
        $sql_r="select * from jgbs_reply";
        $results = M()->db()->query($sql);
        $result2 = M()->db()->query($sql_r);
        foreach ($results as $key => &$value) {
            foreach ($result2 as $k => $reply) {
                if ($value['cst_id'] == $reply['consult_id']) {
                    $value['replies'][] = $reply;
                }
            }
        }
//        $sql = "select * from jgbs_consult join jgbs_reply on jgbs_consult.cst_id=jgbs_reply.consult_id ";
//        $sql_1 = "select * from jgbs_reply join jgbs_user on jgbs_reply.user_id=jgbs_user.user_id";
//        $results = M()->db()->query($sql);
//        $results_1 = M()->db()->query($sql_1);
//        print_r($results);
//        print_r($results_1);
//        $s = array_unique($results);
//        print_r($s);
//        $results=M('consult')->select();
        $this->assign('results',$results);
        $this->display();
    }
//    public function cst_btn(){
////        if(!IS_AJAX) $this->error("操作错误");
//        $uid=$_POST['uid'];
//        $consult=M('reply');
//        $consults=$consult->where("consult_id='" . $uid . "'")->select();
//        $this->assign('consults',$consults);
////        $this->display();
////        // $data = array('l'=>1);
//        header("Content-type:application/json;");
//        echo json_encode($consults);
//
//    }
    public function user_information(){
        $sql = "select * from jgbs_user";
        $sql_r="select * from jgbs_reply";
        $sql_c="select * from jgbs_consult";
        $sql_p="select * from jgbs_project";
        $results = M()->db()->query($sql);
        $result2 = M()->db()->query($sql_r);
        $result_c = M()->db()->query($sql_c);
        $result_p = M()->db()->query($sql_p);
        foreach ($results as $key => &$value) {
            foreach ($result2 as $k => $reply) {
                if ($value['user_id'] == $reply['user_id']) {
                    $value['replies'][] = $reply;
                }
            }
        }
        $this->assign('results',$results);
        $this->display();
    }

    public function notice(){
       $notices=M('notice')->select();
//       $result=$user->where("user_type=1")->select();
        $this->assign('notices',$notices);
        $this->display();
    }

    //ajax获取公告内容
    public function send_notice(){
        $content=I('post.content');
        if(empty($content)){
            echo '公告不能为空';
            return;
        };
        $data['nt_content']=$content;
        $result=M('notice')->add($data);
        if (!$result) {
            alert('发布失败');
            return;
        }
        alert('发布成功', 'success', U('index/notice'));
        echo json_encode($result);
    }
}