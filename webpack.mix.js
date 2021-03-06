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

mix.sass('resources/sass/app.scss', 'public/css')
   .js('resources/js/app.js', 'public/js')
   .js('resources/js/calculatePrice.js', 'public/js')
   .js('resources/js/setDate.js', 'public/js')
   .js('resources/js/registerUser.js', 'public/js')
   .js('resources/js/validation.js', 'public/js');
