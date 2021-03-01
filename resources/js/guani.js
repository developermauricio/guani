/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

window.eventBus = new Vue();


/*=============================================
            COMPONENTES FOMR FIELDS
=============================================*/
import VueFormWizard from 'vue-form-wizard';
import 'vue-form-wizard/dist/vue-form-wizard.min.css';
Vue.use(VueFormWizard);

import Vuesax from 'vuesax';
import 'vuesax/dist/vuesax.css';
Vue.use(Vuesax);


//*IMPORTANDO LIBRERIA TOAST*/
import CxltToastr from 'cxlt-vue2-toastr';
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css';
Vue.use(CxltToastr);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


/*=============================================
            COMPONENTES FOMR FIELDS
=============================================*/
Vue.component('text-input', require('./components/form/TextInput.vue').default);
Vue.component('text-area-input', require('./components/form/TextAreaInput.vue').default);

Vue.component('input-form', require('./components/form/InputFormComponent.vue').default);
Vue.component('upload-image', require('./components/form/UploadImageComponent.vue').default);


/*=============================================
COMPONENTES PAGINAS EMPRESA INCENTIVADORA
=============================================*/
Vue.component('all-companies-incentivadora', require('./guani/pages/incentivadora/AllCompaniesIncen.vue').default);
Vue.component('create-company-incentivadora', require('./guani/pages/incentivadora/WizardCreateCompany.vue').default);


/*============================================
COMPONENTES PAGINAS EMPRESA REDENTORA
=============================================*/
//Vue.component('all-companies-incentivadora', require('./guani/pages/incentivadora/AllCompaniesIncen.vue').default);
Vue.component('create-company-redentora', require('./guani/pages/redentora/WizardCreateCompany.vue').default);

Vue.component('profile-admin', require('./guani/pages/profile/Profile.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
