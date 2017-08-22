<template>
  <div class='header'>
    i am header
    <div class="content-wrapper">
      <div class="avatar">
        <img width='64'heith='64' :src="seller.avatar" alt="">
      </div>
    </div>
    <div class="">

    </div>
  </div>
</template>

<script>
export default {
  props: {
    seller: {}
  },
  data () {
    return {

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
