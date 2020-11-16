const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/landing.js', 'public/js');

mix.copy('resources/images/', 'public/images/');
mix.copy('resources/webfonts/', 'public/webfonts/');
mix.copy('resources/fonts/', 'public/fonts/');
mix.copy('resources/fontawesome/', 'public/fontawesome/');


mix.styles([

    'resources/css/bootstrap.css',
    'resources/css/animate.css',
    'resources/css/mCustomScrollbar.min.css',
    'resources/css/bootstrap-datepicker.min.css',
    'resources/css/select2.min.css',
    'resources/css/select2-bootstrap4.css',
    'resources/css/dataTables.bootstrap4.min.css',
    'resources/css/fontawesome-all.css',
    'resources/css/custom.css',
    'resources/css/login-custom.css',
    'resources/css/toastr.min.css',
    'resources/css/sweetalert.css'

], 'public/css/app.css');

mix.styles([

    'resources/css/fontawsome/css/fontawesome-all.css',
    'resources/css/bootstrap.css',
    'resources/css/select2.css',
    'resources/css/select2-bootstrap.css',
    'resources/css/style.css',
    'resources/css/custom-front-end.css',




], 'public/css/landing.css');


