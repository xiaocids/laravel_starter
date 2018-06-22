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
// Copy CSS Files to public directory
mix.copy('resources/assets/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
    .copy('resources/assets/css/font-awesome.min.css', 'public/css/font-awesome/font-awesome.min.css')
    .copy('resources/assets/css/fonts.googleapis.com.css', 'public/css/fonts.googleapis.com.css')
    .copy('resources/assets/css/ace.min.css', 'public/css/ace.min.css')
    .copy('resources/assets/css/ace-part2.min.css', 'public/css/ace-part2.min.css')
    .copy('resources/assets/css/ace-skins.min.css', 'public/css/ace-skins.min.css')
    .copy('resources/assets/css/ace-rtl.min.css', 'public/css/ace-rtl.min.css')
    .copy('resources/assets/css/ace-ie.min.css', 'public/css/ace-ie.min.css');

// Copy JS Files to public directory
mix.copy('resources/assets/js/ace-extra.min.js', 'public/js/ace-extra.min.js')
    .copy('resources/assets/js/html5shiv.min.js', 'public/js/html5shiv.min.js')
    .copy('resources/assets/js/respond.min.js', 'public/js/respond.min.js')
    .copy('resources/assets/js/jquery-2.1.4.min.js', 'public/js/jquery-2.1.4.min.js')
    .copy('resources/assets/js/jquery-1.11.3.min.js', 'public/js/jquery-1.11.3.min.js')
    .copy('resources/assets/js/jquery-1.11.3.min.js', 'public/js/jquery-1.11.3.min.js')
    .copy('resources/assets/js/jquery.mobile.custom.min.js', 'public/js/jquery.mobile.custom.min.js')
    .copy('resources/assets/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
    .copy('resources/assets/js/excanvas.min.js', 'public/js/excanvas.min.js')
    .copy('resources/assets/js/jquery-ui.custom.min.js', 'public/js/jquery-ui.custom.min.js')
    .copy('resources/assets/js/jquery.ui.touch-punch.min.js', 'public/js/jquery.ui.touch-punch.min.js')
    .copy('resources/assets/js/jquery.easypiechart.min.js', 'public/js/jquery.easypiechart.min.js')
    .copy('resources/assets/js/jquery.sparkline.index.min.js', 'public/js/jquery.sparkline.index.min.js')
    .copy('resources/assets/js/jquery.flot.min.js', 'public/js/jquery.flot.min.js')
    .copy('resources/assets/js/jquery.flot.pie.min.js', 'public/js/jquery.flot.pie.min.js')
    .copy('resources/assets/js/jquery.flot.resize.min.js', 'public/js/jquery.flot.resize.min.js')
    .copy('resources/assets/js/ace-elements.min.js', 'public/js/ace-elements.min.js')
    .copy('resources/assets/js/ace.min.js', 'public/js/ace.min.js');

// Copy Directory fonts to public directory

mix.copyDirectory('resources/assets/fonts', 'public/css/fonts');
mix.copyDirectory('resources/assets/images', 'public/images');

mix.js([
    'resources/assets/js/app.js',
], 'public/js');
