<template>
  <div id="app">
    <v-header :seller='seller'></v-header>
    <div class="tab">
      <div class="tab-item">
        <router-link :to="{path: '/vgoods'}">商品</router-link>
      </div>
      <div class="tab-item">
        <router-link :to="{path: '/vratings'}">评论</router-link>
      </div>
      <div class="tab-item">
        <router-link :to="{path: '/vseller'}">商家</router-link>
      </div>
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
import VHeader from '@/components/VHeader'
import VGoods from '@/components/VGoods'
import VRatings from '@/components/VRatings'
import VSeller from '@/components/VSeller'
export default {
  components: {
    VHeader,
    VGoods,
    VRatings,
    VSeller
  },
  data () {
    return {
      seller: {}
    }
  },
  created () {
    // this.$router.push('/vgoods')
    this.$http.get('/api/seller').then(res => {
      res = res.data
      this.seller = res.data
      console.log(res)
    })
  }
}
</script>

<style>
.tab{
  display: flex;
  position: relative;
  height: 40px;
  line-height: 40px;
  /*border-bottom: 1px solid rgba(7, 17, 27, 0.1);*/
}
/*一像素边框，通过缩放*/
.tab::after{
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  border-top: 1px solid rgba(7, 17, 27, 0.1);
  content: ' ';
  /*根据物理像素dpr缩放（2=0.5/1.5=0.7/...）*/
  -webkit-transform: scaleY(0.5)
}
.tab-item{
  flex:1;
  text-align: center;
}
 .tab-item .router-link-active {
  color: #f01414;
}
.tab-item > a{
  display: block;
  font-size: 14px;
  color: rgb(77, 85, 93);
}
body, html {
  line-height: 1;
  font-weight: 200;
  font-family: 'PingFang SC', 'STHeitiSC-Light', 'Helvetica-Light', arial, sans-serif;
}
</style>
