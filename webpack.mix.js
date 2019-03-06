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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/semantic-ui-css/semantic.min.css','public/css/semantic/semantic.min.css')
    .copy('node_modules/semantic-ui-css/semantic.min.js','public/js/semantic/semantic.min.js')
    .copy('node_modules/semantic-ui-css/themes','public/css/semantic/themes')
    .copy('node_modules/owl.carousel/dist/assets/owl.carousel.min.css','public/css/owl.carousel/owl.carousel.min.css')
    .copy('node_modules/owl.carousel/dist/owl.carousel.min.js','public/js/owl.carousel/owl.carousel.min.js');
