import Vue from 'vue'
import Router from 'vue-router'
import LineTest from '@/pages/LineTest'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: '线性图表',
      component: LineTest
    }
  ]
})
