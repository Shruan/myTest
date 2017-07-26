<template>
  <header class="">
    <div class="nav">
      <ul>
        <li><router-link :to="'/'">关于我们</router-link></li>
        <li><router-link :to="'/'">用户中心</router-link></li>
        <li><a href="#">平台OA</a></li>
        <li class='x1' v-on:mouseover="showMore()" v-on:mouseleave="showLittle()"><a href="#">公告<i></i></a>
          <div class="con">
            更多内容
          </div>
        </li>
      </ul>
    </div>
    <div class="btn" @click='showLogin()'>{{loginValue}}</div>
  </header>
</template>

<script>
export default {
  props: {
    loginValue: String,
    showLogin: Function
  },
  data () {
    return {
    }
  },
  created () {
    window.onscroll = this.scroll
  },
  mounted () {
  },
  updated () {

  },
  methods: {
    scroll () {
      let obj = document.getElementsByClassName('nav')[0]
      let scrollTop = document.body.scrollTop || document.documentElement.scrollTop
      if (scrollTop > 72) {
        this.addClass(obj, 'scrollHeader')
        // document.getElementsByClassName('nav')[0].addClass('scrollHeader')
      } else {
        this.removeClass(obj, 'scrollHeader')
      }
    },
    showMore () {
      document.getElementsByClassName('con')[0].style.display = 'block'
    },
    showLittle () {
      document.getElementsByClassName('con')[0].style.display = 'none'
    },
    hasClass (obj, cls) {
      return obj.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'))
    },
    addClass (obj, cls) {
      if (!this.hasClass(obj, cls)) obj.className += ' ' + cls
    },
    removeClass (obj, cls) {
      if (this.hasClass(obj, cls)) {
        let reg = new RegExp('(\\s|^)' + cls + '(\\s|$)')
        obj.className = obj.className.replace(reg, ' ')
      }
    }
  }
}
</script>

<style>
header{
	background:rgba(237, 231, 209, 0.81);
	height:100px;
	width:100%;
	border:1px solid black;
}
.nav{
	position:relative;
	width:100%;
	height:30px;
	background:rgba(177, 172, 155, 0.5);
	margin:0 auto;
	top:70px;
	z-index:1;
}
.nav ul{
	padding:5px;
}
.nav ul li{
	list-style:none;
	float:left;
	position:relative;
	left:36%;
}
.nav ul li a{
	display:block;	/*块元素*/
	line-height:20px;
	padding:0 42px;
	color:#fff;
	text-decoration:none;

}
.nav ul li a:hover{
	background:#4D4D4C;
}
.nav ul li a i{
	display:inline-block;
	width:0px;
	height:0px;
	border-width:4px;
	border-style:solid;
	border-color:#fff transparent transparent transparent;
}
.nav ul li .con{
	width:150px;
	height:150px;
	background:rgba(0,0,0,0.2);
	box-shadow: 0 2px 3px 0 rgba(0,0,0,0.1) inset;
	position:absolute;
	left:0px;
	top:30px;
	display:none;
}
.scrollHeader{
	position:fixed;
	top:0;
	margin:0 auto;
}
.btn{
	width:50px;
	height:35px;
	background:rgba(0,0,0,0.5);
	position:absolute;
	right:50px;
	top:10px;
	color:#fff;
	font-size:12px;
	font-family:'΢���ź�';
	line-height:35px;
	text-align:center;
	border-radius:5px;
	cursor:pointer;
}
.mask{
	width:100%;
	height:100%;
	background:rgba(0,0,0,0.5);
	position:fixed;
	top:0;
	left:0;
	display:none;
	z-index:2;
}
.login{
	width:450px;
	height:325px;
	background:#fff;
	position:fixed;
	left:150px;
	top:50px;
	border-radius:10px;
	display:block;
	z-index:3;
}
.login .title{
	width:450px;
	height:45px;
	background:#5885e1;
	line-height:45px;
	color:#fff;
	text-indent:20px;
	font-weight:bold;
	font-size:20px;
	text-align:center;
	border-radius:10px 10px 0px 0px;
}
.login .title .close{
	float:right;
	width:17px;
	height:17px;
	background:url('../assets/close.png');
	margin-top:10px;
	margin-right:10px;
}
.login .title .close{
	cursor:pointer;
}
.login .text{
	padding:20px;
	line-height:20px;
}
.login .lg {
	width:315px;
	height:200px;
	margin-bottom:20px;
	line-height:35px;
	margin:30px auto;
}
.login .lg input{
	width:260px;
	height:40px;
	float:right;
	border:1px solid #ccc;
	margin:10px auto;
	padding-left:50px;
	border-radius:5px;
}
.login .lg button{
	width:250px;
	height:35px;
	background:#5885e1;
	border-radius:5px;
	margin: 15px 25px;
	color:#fff;
}
.login .lg button:hover{
	cursor:pointer;
	background:#6996f1;
}
.login .lg input.username{
	background:url('../assets/pw.png') no-repeat;
}
.login .lg input.password{
	background:url('../assets/yonghu.png') no-repeat;
}
.login .lg a{
	font-size:12px;
	text-decoration:none;
	margin: 50px;
}
</style>
