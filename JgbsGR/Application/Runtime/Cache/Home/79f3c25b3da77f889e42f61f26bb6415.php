<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gold Rush_Project</title>
    <link rel="stylesheet" type="text/css" href="/Public/front/css/login.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/banner.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/index_footer.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/index_header.css">
    <script src="/Public/front/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a href="#">关于我们</a></li>
            <li><a href="#">联系我们</a></li>
            <li><a href="<?php echo U('../Admin/login/login');?>">平台OA</a></li>
            <li class='x1'><a href="#">更多<i></i></a>
                <div class="con">
                    更多内容
                </div>
            </li>
        </ul>
    </div>
</header>
<div class="btn" value="$_Session['usename']">登录</div>
<!--图片切换-->

<!--选项卡-->
<div class="clearfix">
    <div class="tabDiv">
        <ul>
            <li class="tabColor">团队招募</li>
            <li>寻物任务</li>
            <li>商业广告</li>
        </ul>
    </div>
    <div class="contentDiv">
        <div class="content">
            <ul>
                <a href='#' class="clearfix2More">更多内容</a>
                <?php if(is_array($projects2)): $i = 0; $__LIST__ = array_slice($projects2,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project2): $mod = ($i % 2 );++$i;?><li>
                        <span ><a href="#"><?php echo ($project2["pro_title"]); ?></a></span>
                        <span class="pro2"><?php echo ($project2["pro_belong_user"]); ?></span>
                        <span class="pro2"><?php echo ($project2["pro_date"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="content">
            <ul>
                <a href='#' class="clearfix2More">更多内容</a>
                <?php if(is_array($projects3)): $i = 0; $__LIST__ = array_slice($projects3,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project3): $mod = ($i % 2 );++$i;?><li>
                        <span ><a href="#"><?php echo ($project3["pro_title"]); ?></a></span>
                        <span class="pro2"><?php echo ($project3["pro_belong_user"]); ?></span>
                        <span class="pro2"><?php echo ($project3["pro_date"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="content">
            <ul>
                <a href='#' class="clearfix2More">更多内容</a>
                <?php if(is_array($projects4)): $i = 0; $__LIST__ = array_slice($projects4,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project4): $mod = ($i % 2 );++$i;?><li>
                        <span ><a href="#"><?php echo ($project4["pro_title"]); ?></a></span>
                        <span class="pro2"><?php echo ($project4["pro_belong_user"]); ?></span>
                        <span class="pro2"><?php echo ($project4["pro_date"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>

<div class="clearfix2">
    <section>
        <h4>项目委托</h4><a href='#' class="clearfix2More">更多项目</a>
        <ul>
            <?php if(is_array($projects)): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$project): $mod = ($i % 2 );++$i;?><li>
                    <span><?php echo ($project["pro_id"]); ?></span>
                    <span ><a href="#"><?php echo ($project["pro_title"]); ?></a></span>
                    <span class="pro2"><?php echo ($project["pro_date"]); ?></span>
                    <span class="pro2"><?php echo ($project["pro_belong_user"]); ?></span>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </section>

    <aside>
        <h4>排名</h4>
        <ul>
            <?php if(is_array($maxUser)): $i = 0; $__LIST__ = $maxUser;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$maxUser): $mod = ($i % 2 );++$i;?><li><img src="/Public/front/images/head1.png" style="height:60px;width:60px;" /><a href="#"><?php echo ($maxUser["user_username"]); ?></a><span class="countNum"><?php echo ($maxUser["user_pro_num"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </aside>
</div>

<!--咨询/交流模块-->
<div class="consultDiv">
    <h4>咨询/交流版块</h4><a href='#' class="clearfix2More">更多咨询</a>
    <ul>
        <?php if(is_array($consults)): $i = 0; $__LIST__ = $consults;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consult): $mod = ($i % 2 );++$i;?><li>
                <span><?php echo ($consult["cst_id"]); ?></span>
                <span ><a href="#"><?php echo ($consult["cst_title"]); ?></a></span>
                <span class="cst"><?php echo ($consult["cst_date"]); ?></span>
                <span class="cst"><?php echo ($consult["cst_belong_user"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

<!--遮罩层-->
<div class="mask"></div>
<div class="login">
    <div class="title">用户登陆<span class="close"></span></div>
    <div class="lg">
        <form class="reg" action="<?php echo U('login/login');?>" method="post">
            <input class="username" name="username" type="text" placeholder="用户名" type="text">
            <input class="password" name="password" type="password" placeholder="密码"/>
            <button class="sub" type="submit" value=""/>登录</button>
            <a class="register" href="<?php echo U('../Home/login/register');?>">立即注册</a>
            <a class="register" href="#">修改密码？</a>
        </form>
    </div>
</div>
<!--页脚-->
<footer id="footer">footer</footer>
</body>
<!--header/js-->
<script>
    $('.x1').hover(function(){
        if($(".con").css('display')=='none'){
            $('.con').show(1000);
            $('i').css('border-color',' transparent transparent #fff transparent');
        }
    },function(){
        $('.con').hide(1000);
        $('i').css('border-color',' #fff transparent transparent transparent');
    })
    $(window).scroll(function(){
        var scroll_top = $(window).scrollTop();
        //console.log(scroll_top);
        if(scroll_top>72){
            $('.nav').addClass('scrollHeader');
            $('.btn').hide();
        }else{
            $('.nav').removeClass('scrollHeader');
            $('.btn').show();
        }
    })
</script>

<!--登录框js-->
<script>
    var Btn = $('.btn')[0];
    var Mask = $('.mask')[0]; //遮罩层
    var Login = $('.login')[0];
    var Close = $('.login .title .close')[0];
    var Title = $('.login .title')[0];
    //点击登陆显示登陆框

    //    $('.btn').value("$_Session['usename']");
    Btn.onclick = function(){
        Mask.style.display = 'block';
        Login.style.display = 'block';
        center();
    };
    //登陆框居中
    function center(){
        //获取到浏览器窗口的宽度或者高度
        //console.log( window.innerWidth );
        var _left = (window.innerWidth-600)/2;
        var _top = (window.innerHeight-350)/2;
        Login.style.left = _left+'px';
        Login.style.top  = _top+'px';
    };
    //当动态改变浏览器大小时仍然要居中
    window.onresize = function(){
        center();
    };
    //关闭登陆框
    Close.onclick = function(){
        Mask.style.display = 'none';
        Login.style.display = 'none';
    };
    init(Title);
    function init(moveDom){
        //拖拽登陆框
        var l = 0,t = 0,x=0,y=0;
        var isover = true;
        var parentDom = moveDom.parentNode;
        moveDom.onmousedown = function(event){
            //改变鼠标位置，登陆框的left和top值

            //现在的left/top = 移动过程中的鼠标值 - 鼠标按下的值 +开始的left/top
            var e = event||window.event;//解决兼容IE或者火狐
            x = e.clientX;
            y = e.clientY;
            l = Login.offsetLeft;
            t = Login.offsetTop;
            isover = true;
            //alert()测试
            document.onmousemove = function(event){
                if(isover){
                    var e = event||window.event;//解决兼容IE或者火狐
                    var nowLeft = e.clientX - x + l;
                    var nowTop = e.clientY - y + t;
                    Login.style.left = nowLeft+'px';
                    Login.style.top = nowTop+'px';
                }

            };
            document.onmouseup = function(){
                isover = false;
            }
        }
    }
</script>


<!--选项卡js-->
<script>
    $(document).ready(function(){
        $('.contentDiv .content').eq('0').show(1500);
        $('.clearfix .tabDiv ul li').click(function(){
            var _index=$(this).index();
            $(this).addClass('tabColor').siblings().removeClass('tabColor');
            $('.contentDiv .content').eq(_index).show(1500).siblings().hide(500);
        })
    })
</script>
</html>