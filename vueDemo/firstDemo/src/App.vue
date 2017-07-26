<template>
  <div id="app">
    <!-- <img src="./assets/logo.png"> -->
    <gr-header  :loginValue="'登录'" :showLogin='showLogin'></gr-header>
    <div class="mask"></div>
    <div class="login" :style='loginDisplay'>
      <div class="title">用户登陆<span class="close" @click='closeLogin()'></span></div>
      <div class="lg">
        <form>
          <input class="username" type="text" placeholder="用户名"/></br>
          <input class="password" type="password" placeholder="密码"/></br>
          <button class="sub" type="submit" value="">登录</button>
          <a class="register" href="register.html">立即注册</a>
          <a class="register" href="#">修改密码？</a>
        </form>
      </div>
    </div>
    <router-view></router-view>
    <gr-footer></gr-footer>
  </div>
</template>

<script>
import GrHeader from '@/components/GrHeader'
import GrFooter from '@/components/GrFooter'

export default {
  name: 'app',
  components: {
    GrHeader,
    GrFooter
  },
  data () {
    return {
      loginValue: '',
      loginDisplay: {
        display: 'none'
      }
    }
  },
  mounted () {
    this.center()
  },
  updated () {
    window.addEventListener('resize', this.center)
    let Title = this.$('title')[0]
    this.init(Title)
  },
  methods: {
    $ (cn) {
      return document.getElementsByClassName(cn)
    },
    center () {
      let Login = this.$('login')[0]
      let _left = (window.innerWidth - 600) / 2
      let _top = (window.innerHeight - 350) / 2
      Login.style.left = _left + 'px'
      Login.style.top = _top + 'px'
    },
    showLogin () {
      this.loginDisplay.display = 'block'
    },
    closeLogin () {
      this.loginDisplay.display = 'none'
    },
    init (moveDom) {
      let Login = this.$('login')[0]
      let isover = true
      moveDom.addEventListener('mousedown', event => {
        let e = event || window.event
        let x = e.clientX
        let y = e.clientY
        let l = Login.offsetLeft
        let t = Login.offsetTop
        document.addEventListener('mousemove', function (event) {
          if (isover) {
            let e = event || window.event
            let nowLeft = e.clientX - x + l
            let nowTop = e.clientY - y + t
            Login.style.left = nowLeft + 'px'
            Login.style.top = nowTop + 'px'
          }
        })
        document.addEventListener('mouseup', () => {
          isover = false
        })
      })
    }
  }
}
</script>

<style>
*{
  margin: 0;
  padding: 0;
}
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
