<template>
  <div id="banner">
		<div class="img">
			<ul class="img-ul"><!--无序列表标签-->
				<li><img src="../assets/ad/banner5.jpg" alt="广告"></li>
				<li><img src="../assets/ad/banner1.jpg" alt="广告"></li>
				<li><img src="../assets/ad/banner2.jpg" alt="广告"></li>
				<li><img src="../assets/ad/banner3.jpg" alt="广告"></li>
				<li><img src="../assets/ad/banner4.jpg" alt="广告"></li>
				<li><img src="../assets/ad/banner5.jpg" alt="广告"></li>
				<li><img src="../assets/ad/banner1.jpg" alt="广告"></li>
			</ul>
		</div>
		<div class="banBtn">
			<div class="leftBtn" @click='leftBtn()'> < </div>
			<div class="rightBtn" @click='rightBtn()'> > </div>
		</div>
		<div class="icon">
			<ul class='icon-ul'>
				<li class="curr"></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
  components: {

  },
  data () {
    return {
      index: '',
      index2: '',
      imgPosition: '',
      iconUl: '',
      iconLi: ''
    }
  },
  created () {
    this.index = 1
    this.index2 = 0
  },
  mounted () {
    this.imgPosition = document.getElementsByClassName('img-ul')[0]
    this.iconUl = document.getElementsByClassName('icon-ul')[0]
    this.iconLi = document.getElementsByClassName('icon-ul')[0].getElementsByTagName('li')
  },
  updated () {

  },
  methods: {
    leftBtn () {
      this.index ++
      this.index2 ++
      if (this.index2 > 4) {
        this.index2 = 0
      }
      this.imgPosition.style.left = -750 * this.index + 'px'
      if (this.index === 6) {
        this.index = 1
        this.imgPosition.style.left = '-750px'
      }
      for (let i = 0; i < this.iconLi.length; i++) {
        this.iconLi[i].className = ''
      }
      this.iconLi[this.index2].className = 'curr'
    },
    rightBtn () {
      this.index --
      this.index2 --
      if (this.index2 < 0) {
        this.index2 = 4
      }
      this.imgPosition.style.left = -750 * this.index + 'px'
      if (this.index === 0) {
        this.index = 5
        this.imgPosition.style.left = '-3750px'
      }
      for (let i = 0; i < this.iconLi.length; i++) {
        this.iconLi[i].className = ''
      }
      this.iconLi[this.index2].className = 'curr'
    }
  }
}
</script>

<style>
/*轮播图css*/
#banner{
	position:relative;
	width:750px;
	height:300px;
	border:5px solid rgba(0, 0, 0, 0.5);
	margin:50px auto;
	overflow:hidden;
	box-shadow: 0px 0px 15px #505650;
}
.img{
	width:750px;
}
.img ul{
	width:700%; /*相对于父元素的宽度*/
	position:relative;
	left:-750px;
}
.img ul li{
	list-style:none; /*去除无序列表的圆点*/
	width:750px;
	height:300px;
	float:left;
}
#banner ul li img{
	width:750px;
	height:300px;
}
.banBtn div{
	position:absolute;
	width:24px;
	height:38px;
	top:50%;
	background:rgba(0,0,0,0.2);
	color:#fff;
	font-size:20px;
	text-align:center;
	line-height:38px;
	cursor:pointer; /*鼠标的形状*/
}
.banBtn div.rightBtn{
	right:0px;
}
.banBtn div.leftBtn{
	left:0px;
}
.icon{
	position:absolute;
	bottom:15px;
	width:100%;
	height:10px;
	text-align:center;
}
.icon ul{
	height:10px;
	border-radius:10px;
	background:rgba(0,0,0,0.1);
	display:inline-block;

}
.icon ul li{
	list-style:none;
	display:inline-block; /*行间块级元素*/
	width:10px;
	height:10px;
	background:#aaa;
	border-radius:10px;
	position:relative;
	top:-5px;
}
.icon ul li.curr{
	background:white;
}
</style>
