window._ = require('lodash');
window.Popper = require('@popperjs/core').default;
window.$ = window.jQuery = require('jquery');
let bootstrap = require('bootstrap/dist/js/bootstrap.bundle');
import swal from 'sweetalert2';
window.Swal = swal;
window.Vue = require('vue');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// --------------------------------------------------------------
//  Enable Bootstrap - Popover & Tooltip
// --------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function(event) {
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
  })

  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
});