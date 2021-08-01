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
	.js('public/assets/js/jquery-1.11.1.min.js', 'public/js')
	.js('public/assets/js/bootstrap.min.js', 'public/js')
	.js('public/assets/js/bootstrap-hover-dropdown.min.js', 'public/js')
	.js('public/assets/js/owl.carousel.min.js', 'public/js')
	.js('public/assets/js/echo.min.js', 'public/js')
	.js('public/assets/js/jquery.easing-1.3.min.js', 'public/js')
	.js('public/assets/js/bootstrap-slider.min.js', 'public/js')
	.js('public/assets/js/jquery.rateit.min.js', 'public/js')
	.js('public/assets/js/lightbox.min.js', 'public/js')
	.js('public/assets/js/bootstrap-select.min.js', 'public/js')
	.js('public/assets/js/wow.min.js', 'public/js')
	.js('public/assets/js/scripts.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .postCss('public/assets/css/bootstrap.min.css', 'public/css')
    .postCss('public/assets/css/main.css', 'public/css')
    .postCss('public/assets/css/blue.css', 'public/css')
    .postCss('public/assets/css/owl.carousel.css', 'public/css')
    .postCss('public/assets/css/owl.transitions.css', 'public/css')
    .postCss('public/assets/css/animate.min.css', 'public/css')
    .postCss('public/assets/css/rateit.css', 'public/css')
    .postCss('public/assets/css/bootstrap-select.min.css', 'public/css')
    .sourceMaps();
