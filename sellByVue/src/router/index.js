import Vue from 'vue'
import Router from 'vue-router'
import VGoods from '@/components/VGoods'
import VRatings from '@/components/VRatings'
import VSeller from '@/components/VSeller'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'index'
    },
    {
      path: '/vgoods',
      name: 'VGoods',
      component: VGoods
    },
    {
      path: '/vseller',
      name: 'VSeller',
      component: VSeller
    },
    {
      path: '/vratings',
      name: 'VRatings',
      component: VRatings
    }
  ]
})
