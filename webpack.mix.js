const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/global.css', 'public/css')
    .css('resources/css/main.css', 'public/css')
    .copyDirectory('resources/fonts', 'public/fonts');
