<template>
  <footer id="footer">
    <div id="foot_email" ><a href="mailto:qiushiyuan1994@qq.com" id="footerHello">qiushiyuan1994@qq.com</a></div>
    <h2 >18650380324   <span >|</span>   371890701</h2>
    <p>Have any questions or want to publish a carousel message, you can feel free to send an email to contact us.</p>
    <div>
        <a href="https://baidu.com" target="_blank"><img src="../assets/baidu.png" width="37" height="37" alt="twitter"></a>
        <a href="https://www.google.com" target="_blank"><img src="../assets/google.png" width="37" height="37" alt="facebook"></a>
        <a href="https://www.youku.com/" target="_blank"><img src="../assets/uk.png" width="37" height="37" alt="linkedin"></a>
    </div>
    <p class="foot_over">Copyright 2017 TKK College,Xiamen University Design. All Rights Reserved</p>
  </footer>
</template>

<script>
export default {
}
</script>

<style>
#footer{
	width: 100%;
	height: 220px;
	background: #4D4D4C;
	color: #fff;
	position: relative;
	text-align: center;
	padding-top: 30px;
	font-size: 5px;
  margin-top: 80px;
}
#footer a{
	color: #9da1b5;
}
#footer a:hover{
	color: #fff;
}
#foot_email{
	color: #fff;
	position: relative;
	font-size: 20px;
}
#footer h2{
	font-size: 5px;
	margin: 5px 0 20px 0;
}
#footer h2 span{
	padding:10px 2.5%;
	display:inline-block;
}
#footer p{
	margin: 20px;
}
#footer .foot_over{
	color: #928c8c;
}
</style>
