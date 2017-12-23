require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy';
import 'buefy/lib/buefy.css';

Vue.use(Buefy);

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

$(document).ready(function() {
	//  Dropdowns
	$('.dropdown').hover(function(e) {
	    $(this).toggleClass('is-open')
	})
})﻿