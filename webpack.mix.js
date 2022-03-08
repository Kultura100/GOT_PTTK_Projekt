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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/klient.js', 'public/js')
    .js('resources/js/zamowienie.js', 'public/js')
    .js('resources/js/towar.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/form.scss', 'public/css')
    .sass('resources/sass/klient.scss', 'public/css')
    .sass('resources/sass/zamowienie.scss', 'public/css')
    .sass('resources/sass/towar.scss', 'public/css')
    .copy('vendor/proengsoft/laravel-jsvalidation/resources/views', 'resources/views/vendor/jsvalidation')
    .copy('vendor/proengsoft/laravel-jsvalidation/public', 'resources/js/vendor/jsvalidation')
    .sourceMaps();

    