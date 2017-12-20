require('./bootstrap');

window.Vue = require('vue');

import Buefy from 'buefy';

Vue.use(Buefy);

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

var app = new Veu({
	el: '#app',
	data: {}
})