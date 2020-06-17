
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
/** 
 * @import vform 
*/

import { Form, HasError, AlertError } from 'vform';
window.Form = Form;

import swal from 'sweetalert';
window.swal = swal;

/**Google maps */
import * as VueGoogleMaps from 'vue2-google-maps';
import GmapCustomMarker from 'vue2-gmap-custom-marker';
Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyCeeHDCOXmUMja1CFg96RbtyKgx381yoBU',
      libraries: 'places', // This is required if you use the Autocomplete plugin
      // OR: libraries: 'places,drawing'
      // OR: libraries: 'places,drawing,visualization'
      // (as you require)
   
      //// If you want to set the version, you can do so:
      // v: '3.26',
    },
   
    //// If you intend to programmatically custom event listener code
    //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
    //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
    //// you might need to turn this on.
    // autobindAllEvents: false,
   
    //// If you want to manually install components, e.g.
    //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
    //// Vue.component('GmapMarker', GmapMarker)
    //// then disable the following:
    // installComponents: true,
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));
/**Google maps */
Vue.component('gmap-custom-marker', GmapCustomMarker);
Vue.component('gmap-autocomplete', VueGoogleMaps.Autocomplete);
Vue.component('google-map', VueGoogleMaps.Map);      
Vue.component('ground-overlay', Vue.extend({
    render() {
    return '';
    },
    mixins: [VueGoogleMaps.MapElementMixin],
    props: ['source', 'bounds', 'opacity'],
    created() {},
    deferredReady: function() {
    this.$overlay = new google.maps.GroundOverlay(
        this.source,
        this.bounds
    );
    this.$overlay.setOpacity(this.opacity);
    this.$overlay.setMap(this.$map);
    },
    destroyed: function() {
    this.$overlay.setMap(null);
    },
}));
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('home-component', require('./components/HomeComponent.vue').default);
Vue.component('nav-component', require('./components/header/NavComponent.vue').default);
Vue.component('neighbour-component', require('./components/homepage/NeighbourComponent.vue').default);
Vue.component('subscribe-component', require('./components/homepage/NewLetterComponent.vue').default);
Vue.component('footer-component', require('./components/footer/FooterComponent.vue').default);
Vue.component('mapfilter-component', require('./components/homepage/MapFilterComponent.vue').default);
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
/**  
 * Sticky nav bar code
 */
var hth = $('.top-bar-wrapper').height();
$(window).on('scroll', function () {
    if ($(this).scrollTop() > hth) {
        $('#sticky-header').addClass("sticky");
        $('.fix-with-header').addClass("sticky-inner");
    } else {
        $('#sticky-header').removeClass("sticky");
        $('.fix-with-header').removeClass("sticky-inner");
    }
});

$('.c-submenu').on('click', function(){
    $('.c-submenu').removeClass('c-active');
    $(this).addClass('c-active');
    var target = $(this).attr('href');
    var fheight = $(target).height() - 50;
    $('html, body').animate({scrollTop: $(target).offset().top - fheight}, 1000);
});
