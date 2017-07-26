import Vue from 'vue'
import Router from 'vue-router'
import Index from '@/pages/Index'
import GrHeader from '@/components/GrHeader'
import GrBanner from '@/components/GrBanner'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'index',
      component: Index
    },
    {
      path: '/grheader',
      name: 'header',
      component: GrHeader
    },
    {
      path: '/grbanner',
      name: 'banner',
      component: GrBanner
    }
  ]
})
