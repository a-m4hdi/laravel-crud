const mix = require('laravel-mix');
let productionSourceMaps = false;

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

mix
    
.js('resources/js/app.js', 'public/js/app.min.js')
    .sass('resources/sass/app.scss', 'public/css/app.min.css')
    .sourceMaps(productionSourceMaps, 'source-map');
