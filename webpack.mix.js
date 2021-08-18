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

mix.styles('resources/css/reset.css', 'public/css/reset.css');
mix.sass('resources/sass/mobile-320.scss', 'public/css')
    .sass('resources/sass/mobile-425.scss', 'public/css')
    .sass('resources/sass/tablet-768.scss', 'public/css')
    .sass('resources/sass/desktop-1024.scss', 'public/css')
    .sass('resources/sass/desktop-1440.scss', 'public/css');