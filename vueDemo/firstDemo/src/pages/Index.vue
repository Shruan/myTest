<template>
  <div class="hello">
    <gr-banner></gr-banner>
    <div class="clearfix">
      <div class="tabDiv">
          <ul class="clickTab">
              <li class="tabColor">团队招募</li>
              <li>寻物任务</li>
              <li>商业广告</li>
          </ul>
      </div>
      <div class="contentDiv">
          <div class="content">
            <a href="{:U('Projectteam/all_projectteam')}" class="clearfix2More">更多内容</a>
              <ul>
                  <li>
                      <span ><a href="#">{$project2.pro_title}</a></span>
                      <span class="pro2">{$project2.pro_belong_user}</span>
                      <span class="pro2">{$project2.pro_date}</span>
                  </li>
              </ul>
          </div>
          <div class="content">
              <ul>
                  <a href="{:U('Projectfind/all_projectfind')}" class="clearfix2More">更多内容</a>
                  <li>
                      <span ><a href="#">{$project3.pro_title}</a></span>
                      <span class="pro2">{$project3.pro_belong_user}</span>
                      <span class="pro2">{$project3.pro_date}</span>
                  </li>
              </ul>
          </div>
          <div class="content">
              <ul>
                <a href="{:U('Projectad/all_projectad')}" class="clearfix2More">更多内容</a>
                <li>
                    <span ><a href="#">{$project4.pro_title}</a></span>
                    <span class="pro2">{$project4.pro_belong_user}</span>
                    <span class="pro2">{$project4.pro_date}</span>
                </li>
              </ul>
          </div>
      </div>
    </div>
    <h1>{{ msg }}</h1>
    <h2>Essential Links</h2>
    <ul>
      <li><a href="https://vuejs.org" target="_blank">Core Docs</a></li>
      <li><a href="https://forum.vuejs.org" target="_blank">Forum</a></li>
      <li><a href="https://gitter.im/vuejs/vue" target="_blank">Gitter Chat</a></li>
      <li><a href="https://twitter.com/vuejs" target="_blank">Twitter</a></li>
      <br>
      <li><a href="http://vuejs-templates.github.io/webpack/" target="_blank">Docs for This Template</a></li>
    </ul>
    <h2>Ecosystem</h2>
    <ul>
      <li><a href="http://router.vuejs.org/" target="_blank">vue-router</a></li>
      <li><a href="http://vuex.vuejs.org/" target="_blank">vuex</a></li>
      <li><a href="http://vue-loader.vuejs.org/" target="_blank">vue-loader</a></li>
      <li><a href="https://github.com/vuejs/awesome-vue" target="_blank">awesome-vue</a></li>
      <li><router-link to="/GrBanner">头部</router-link></li>
    </ul>
  </div>
</template>
<script>
import GrBanner from '@/components/GrBanner'

export default {
  name: 'hello',
  components: {
    GrBanner
  },
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  created () {

  },
  mounted () {
    let contentDiv = document.getElementsByClassName('content')
    contentDiv[0].style.display = 'block'
    let clickLi = document.getElementsByClassName('clickTab')[0].getElementsByTagName('li')
    console.log(clickLi)
    for (let i = 0; i < clickLi.length; i += 1) {
      clickLi[i].onclick = (function (i) {
        return function () {
          for (let j = 0; j < contentDiv.length; j++) {
            contentDiv[j].style.display = 'none'
          }
          contentDiv[i].style.display = 'block'
        }
      })(i)
    }
  },
  methods: {
    // $('.clearfix .tabDiv ul li').click(function(){
    //     var _index=$(this).index();
    //     $(this).addClass('tabColor').siblings().removeClass('tabColor');
    //     $('.contentDiv .content').eq(_index).show(1500).siblings().hide(500);
    // })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
.clearfix{
	height:220px;
	width:768px;
	border:0px solid black;
	position:relative;
	padding:5px;
	margin:0 auto;
	top:-10px;
}
.clearfix .tabDiv ul{
	padding:0px;
}
.clearfix .tabDiv ul li{
	list-style: none;
	float: left;
	width: 60px;
	height: 20px;
	border: 0px solid black;
	margin: 5px 10px;
	cursor: pointer;
	text-align:center;
	font-size:13px;
}
.tabColor{
	background:#6b6e7a;
	color:#fff;
}
.clearfix .tabDiv{
	height:30px;
	width:500px;
	border:0px solid black;
}
.clearfix .contentDiv{
	height:175px;
	width:755px;
	padding:5px;
	border:0px solid black;
	position:relative;
	float:left;
}
.contentDiv .content{
	height:185px;
	width:760px;
	position:absolute;
	display:none;
}
.clearfix .contentDiv ul{
	padding:0px;
}
.clearfix .contentDiv ul li{
	list-style:none;
	float:left;
	width:170px;
	height:170px;
	border:1px solid rgba(177, 172, 155, 0.5);
	margin: 5px 3px;
	box-shadow: 5px 5px 2px #888888;
	padding: 5px;
}
.clearfix .clearfix2More{
	top:-15px;
	right:10px;
}
.tabDiv ul li::before{
	content:"";
	display:block;
	height:13px;
	width:1px;
	left:85px;
	top:14px;
	background:#b1b9ba;
	position: absolute;
}
.clearfix2{
	height:550px;
	width:750px;
	border:0px solid black;
	position:relative;
	padding:5px;
	margin:25px auto;
}
section{
	float:left;
	position:absolute;
	width:65%;
	height:97%;
	border:0px solid black;
}
.clearfix2More{
	position:absolute;
	top:0;
	right:0;
	font-size:15px;
}
section ul{
	list-style:none;
	padding:5px;
}
section ul li{
	width:100%;
	height:90px;
	border:1px solid rgba(0, 0, 0, 0.5);
	margin: 5px auto 10px;
	box-shadow: 5px -5px 2px #888888;
}
section ul li span{
    position: relative;
    top: 5%;
	float:left;
	margin-right:10px;
}
</style>
