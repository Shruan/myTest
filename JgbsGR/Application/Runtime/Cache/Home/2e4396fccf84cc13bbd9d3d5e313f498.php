<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Project</title>
    <link rel="stylesheet" type="text/css" href="/Public/front/css/login.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/banner.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/skeleton.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/index_footer.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/index_header.css">
    <link rel="stylesheet" type="text/css" href="/Public/front/css/all_project.css">
    <script src="/Public/front/js/jquery-1.11.3.min.js"></script>
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a href="<?php echo U('index/index');?>">首页</a></li>
            <li><a href="#">关于我们</a></li>
            <li><a href="<?php echo U('UserInformation/userinformation');?>">用户中心</a></li>
            <li><a href="<?php echo U('../Admin/login/login');?>">平台OA</a></li>
            <li class='x1'><a href="#">公告<i></i></a>
                <div class="con">
                    <?php if(is_array($notices)): $i = 0; $__LIST__ = $notices;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$notice): $mod = ($i % 2 );++$i; echo ($notice["nt_content"]); ?>
                        <label style="position: absolute;float:right;top:120px;right: 10px">
                            <?php echo ($notice["nt_date"]); ?>
                        </label><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </li>
        </ul>
    </div>
</header>
<?php if(isset($session_users["user_username"])): else: ?>
    <div class="btn btn_l" value="">登录</div><?php endif; ?>

<?php if(isset($session_users["user_username"])): ?><div class="btn_l" >
    <?php echo ($session_users["user_username"]); ?><a class="loginId" href="<?php echo U('Login/logout');?>" rel="<?php echo ($session_users["user_username"]); ?>">，注销</a>
</div><?php else: endif; ?>

<div class="clearfix2" style="height: 280px">
    <section style="width: 88%">
        <h4>详细内容</h4>
        <ul>
            <?php if(is_array($consults)): $i = 0; $__LIST__ = $consults;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consult): $mod = ($i % 2 );++$i;?><li style="width: 99%;height: 35px">
                    <span class="reply_id" rel="<?php echo ($consult["cst_id"]); ?>"><h2><?php echo ($consult["cst_title"]); ?></h2></span>
                    <div style="border: 1px solid rgba(125, 114, 114, 0.5);height: 206px;">
                        <span class="d_user" rel="<?php echo ($consult["cst_belong_user"]); ?>"><h3><?php echo ($consult["cst_belong_user"]); ?></h3></span>
                        <span class="d_cont"><?php echo ($consult["cst_content"]); ?></span>
                        <span class="d_date"><?php echo ($consult["cst_date"]); ?></span>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </section>
</div>

<div class="clearfix2" >
    <section class="content_list" style="width: 88%">
        <h4>回复内容</h4>
        <ul>
            <?php if(is_array($replies)): $i = 0; $__LIST__ = $replies;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$reply): $mod = ($i % 2 );++$i;?><li style="position:relative;width: 99%;height:80px">
                    <span class="c_user" ><h3><?php echo ($reply["user_username"]); ?></h3></span>
                    <span class="c_cont"><?php echo ($reply["reply_conment"]); ?></span>
                    <span class="c_date"><?php echo ($reply["reply_date"]); ?></span>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </section>
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
            <a class="register" href="<?php echo U('login/register');?>">立即注册</a>
            <a class="register" href="<?php echo U('login/modify');?>">修改密码？</a>
        </form>
    </div>
</div>

<!--发布回复模块-->
<div class="consultDiv">
        <h4>回复内容：</h4>
        <div><textarea class="content" name="content" type="text"  rows="3" cols="26" placeholder="内容" style="left: 46px; padding: 10px; position: relative; margin: 0px; width: 652px; height: 102px;"></textarea></div>
        <button class="sub2" type="submit" value="" >回复</button>
</div>
</body>
<!--页脚-->
<footer id="footer">
    <div id="foot_email" ><a href="mailto:qiushiyuan1994@qq.com" id="footerHello">qiushiyuan1994@qq.com</a></div>

    <h2 >18650380324   <span >|</span>   371890701</h2>
    <p>Have any questions or want to publish a carousel message, you can feel free to send an email to contact us.</p>
    <div>
        <a href="https://baidu.com" target="_blank"><img src="/Public/img/baidu.png" width="37" height="37" alt="twitter"></a>
        <a href="https://www.google.com" target="_blank"><img src="/Public/img/google.png" width="37" height="37" alt="facebook"></a>
        <a href="https://www.youku.com/" target="_blank"><img src="/Public/img/uk.png" width="37" height="37" alt="linkedin"></a>
    </div>
    <p class="foot_over">Copyright 2017 TKK College,Xiamen University Design. All Rights Reserved</p>
</footer>

<script>
   $('.sub2').click(function(){
       $.ajax({
           url: '/index.php/Home/Consultation/reply',
           type:'POST',
           data:{
               cid: $('.reply_id').attr('rel'),
               content:$(".content").val()
           },
           dataType:'text',
           success:function(jsonResult){
               alert('回复成功');
               location.reload();
           },
           error:function(e){
               alert('error');
           }
       })


   })


</script>

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


</html>