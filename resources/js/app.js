import $ from 'jquery';
window.$ = window.jQuery = $;

window.toastr = require('toastr');


require('bootstrap');
require('malihu-custom-scrollbar-plugin');
require('datatables.net-dt');
require('datatables.net-bs4');
require('bootstrap-datepicker');
require('select2');
require('bootstrap-sweetalert');


require('./custom');

require('./bundle');
