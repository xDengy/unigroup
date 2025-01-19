const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/fancybox.min.js', 'public/js')
    .css('resources/css/global.css', 'public/css')
    .css('resources/css/main.css', 'public/css')
    .css('resources/css/fancybox.min.css', 'public/css')
    .copyDirectory('resources/fonts', 'public/fonts');
