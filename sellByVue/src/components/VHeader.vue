<template>
  <div class='header'>
    <div class="content-wrapper">
      <div class="avatar">
        <img width='64'heith='64' :src="seller.avatar" alt="">
      </div>
      <div class="content">
        <div class="title">
          <span class="brand"></span>
          <span class="name">{{seller.name}}</span>
        </div>
        <div class="description">
          {{seller.description}}/{{seller.deliveryTime}}送达
        </div>
        <!-- 数据请求异步过程，seller.supports获取之前先判断是否为空 -->
        <div class="" v-if='seller.supports' class="supports">
          <span class="icon"></span>
          <span class="text">{{seller.supports[0].description}}</span>
        </div>
      </div>
      <div v-if="seller.supports" class="support-count" @click='showDetail'>
        <span class="count">{{seller.supports.length}}个</span>
        <i class="icon-keyboard_arrow_right">></i>
      </div>
    </div>
    <div class="bulletin-wrapper">
      <span class="bulletin-title"></span>
      <span class="bulletin-text">{{seller.bulletin}}</span>
      <i class="icon-keyboard_arrow_right" @click='showDetail'> > </i>
    </div>
    <div class="background">
      <img :src="seller.avatar" width="100%" height="100%">
    </div>
    <transition name="fade">
      <div v-show="detailshow" class="detail">
        <div class="detail-wrapper clearfix">
          <div class="detail-main">
            <h1 class="name">{{seller.name}}</h1>
            {{seller.bulletin}}
          </div>
        </div>
        <div class="detail-close">
          <i class="icon-close" @click="showDetail"> X </i>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
export default {
  props: {
    seller: {}
  },
  data () {
    return {
      detailshow: false
    }
  },
  methods: {
    showDetail () {
      this.detailshow = !this.detailshow
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .header {
    position: relative;
    color: #fff;
    overflow: hidden;
  }
  .content-wrapper {
    position: relative;
    padding: 24px 12px 18px 24px;
    font-size: 0;
  }
  .avatar {
    display: inline-block;
    vertical-align: top;
  }
  .avatar img {
    border-radius: 2px;
  }
  .content {
    display: inline-block;
    font-size: 14px;
    margin-left: 16px;
  }
  .title {
    margin: 2px 0 8px 0;
  }
  .brand {
    display: inline-block;
    width: 30px;
    height: 18px;
    /*垂直方向对齐方式 */
    vertical-align: top;
  }
  .name {
    margin-left: 6px;
    font-size: 16px;
    line-height: 18px;
    font-weight: bold;
  }
  .description {
    margin-bottom: 10px;
    line-height: 12px;
    font-size: 12px;
  }
  .supports .icon {
    display: inline-block;
    width: 12px;
    height: 12px;
    margin-right: 4px;
    background-size: 12px;
    background-repeat: no-repeat;
    vertical-align: top;
  }
  .text {
    line-height: 12px;
    font-size: 10px;
  }
  .support-count {
    position: absolute;
    right: 12px;
    bottom: 14px;
    padding: 0 8px;
    height: 24px;
    line-height: 24px;
    border-radius: 14px;
    background: rgba(0, 0, 0, 0.2);
    text-align: center;
  }
  .count {
    font-size: 10px;
    vertical-align:
  }
  .icon-keyboard_arrow_right {
    margin-left: 2px;
    line-height: 24px;
    font-size: 10px;
    content: '\ >';
  }
  .bulletin-wrapper {
    position: relative;
    height: 28px;
    line-height: 28px;
    padding: 0 22px 0 12px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    background: rgba(7, 17, 27, 0.2)
    /*font-size: 0;*/
  }
  .bulletin-title {
    display: inline-block;
    vertical-align: top;
    width: 22px;
    height: 12px;
    background-size: 22px 12px;
    background-repeat: no-repeat;
    margin-top: 7px;
  }
  .bulletin-text {
    font-size: 10px;
    margin: 0 4px;
    vertical-align: top;
  }
  .bulletin-wrapper .icon-keyboard_arrow_right {
    position: absolute;
    font-size: 10px;
    right: 12px;
    top: 3px;
  }
  .background {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    z-index: -1;
    background: rgba(7, 17, 20, 0.5);
    /*模糊效果*/
    filter:blur(10px);
  }
  .detail {
    position: fixed;
    z-index: 100;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background: rgba(7, 17, 27, 0.8);
    backdrop-filter: blur(10px);
  }
  .detail {
    transition: all 0.5s;
  }
  /*.detail.fade-transition {
    opacity: 1;
    background: rgba(7, 17, 27, 0.8);
  }*/
  .detail .fade-enter, .fade-leave-to {
    opacity: 0;
    background: rgba(7, 17, 27, 0);
  }
  .cleafix {
    display: inline-block;
  }
  .cleafix::after {
    display: block;
    content: '.';
    height: 0;
    line-height: 0;
    clear: both;
    visibility: hidden;
  }
  .detail-wrapper {
    min-height: 100%;
    width: 100%;
  }
  .detail-main {
    margin-top: 64px;
    padding-bottom: 64px;
  }
  .detail-close {
    position: relative;
    width: 32px;
    height: 32px;
    margin: -64px auto 0 auto;
    clear:both;
    font-size: 32px;
  }
  .detail-main .name {
    line-height: 16px;
    text-align: center;
    font-size: 16px;
    font-weight: 700
  }
</style>
