// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import axios from 'axios'

axios.defaults.baseURL = process.env.NODE_ENV === 'development' ? '/api' : '/'

Vue.config.productionTip = false
Vue.prototype.$http = axios
Vue.prototype.$qs = require('querystring').stringify
Vue.prototype.webUrl = 'http://www.jgbsgr.com'

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
