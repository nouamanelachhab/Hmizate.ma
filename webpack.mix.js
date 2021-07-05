const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/frontend/app.js', 'assets/js/frontend')
   .vue({ version: 2 })
   .sass('resources/assets/scss/frontend/app.scss', 'assets/css/frontend')
   .setPublicPath('public');
