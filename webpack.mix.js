let mix = require('laravel-mix');

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

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/bootstrap.js',
    'resources/assets/js/AdminLTE.js',
    'resources/assets/js/datatables.js',
    'resources/assets/js/toastr.js',
    'resources/assets/js/vue.js',
    'resources/assets/js/vee-validate.js',
    'resources/assets/js/axios.js',
    //'resources/assets/js/require-vue.js',
    //'resources/assets/js/require.min.js',
    'resources/assets/js/app.js',
    'resources/assets/js/componente-codigos-postales.js',
    'resources/assets/js/regions.js',
    'resources/assets/js/servicios.js',
    'resources/assets/js/stat-box.js'

], 'public/js/app.js')
    .styles([
        'resources/assets/css/bootstrap.css',
        'resources/assets/css/AdminLTE.css',
        'resources/assets/css/datatables.css',
        'resources/assets/css/toastr.css'
    ], 'public/css/app.css');
