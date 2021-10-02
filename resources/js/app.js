
require('./bootstrap');

window.Vue = require('vue').default;
import vue from 'vue';

// import vform
import Form from 'vform';
window.Form = Form;
import {
    Button,
    HasError
} from 'vform/src/components/bootstrap5'
Vue.component(Button.name, Button)
Vue.component(HasError.name, HasError)

//import vue-progressbar
import VueProgressBar from 'vue-progressbar';
Vue.use(VueProgressBar,options)
const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
        speed: '0.2s',
        opacity: '0.6s',
        termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
}
// import sweetalert2
import swal from 'sweetalert2'
window.swal= swal;
//config sweetalert2

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
})

window.toast= toast;

// import vue router
import VueRouter from 'vue-router'
Vue.use(VueRouter)
let routes = [
    {path: '/', component: require('./components/ExampleComponent').default},


]
// vue router config
const router = new VueRouter({
    mode: 'history',
    routes
})
Vue.component('login', require('./components/Login.vue').default);

window.Fire = new vue()
const app = new Vue({
    el: '#app',
});
