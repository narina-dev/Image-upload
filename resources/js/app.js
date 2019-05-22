require('./bootstrap');

window.Vue = require('vue');

import Toasted from 'vue-toasted';
Vue.use(Toasted)
Vue.toasted.register('error', message => message, {
    position : 'bottom-center',
    duration : 1000
})

import Profile from './components/profile/Profile.vue'

import Password from './components/profile/Password.vue'




Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',

    components: {
        'profile': Profile,
        'profile-password': Password
        
    }
    

});



