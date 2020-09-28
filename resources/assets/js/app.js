/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import Swal from 'sweetalert2'
import router from './router'
import VueInternationalization from 'vue-i18n';
import Locale from './vue-i18n-locales.generated';
import moment from 'moment'

Vue.use(VueInternationalization);

const i18n = new VueInternationalization({
    locale: Laravel.locale,
    messages: Locale
});

Vue.filter('formatDate', function(value) {

    if (value) {
  
      return moment(String(value)).format('DD/MM/YYYY')
  
    }
  
  });

window.Swal = Swal

window.Vue = require('vue');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.component('get-news', require('./components/posts/News.vue').default);
Vue.component('view-post', require('./components/posts/ViewPost.vue').default);
Vue.component('send-message', require('./components/SendMessage.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('all-treners', require('./components/treners/AllTreners.vue').default);
Vue.component('top-posts', require('./components/posts/TopPosts.vue').default);


/*import VModal from 'vue-js-modal'
 
Vue.use(VModal)*/



const app = new Vue({
	router,
	i18n
}).$mount('#app')