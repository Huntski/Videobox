const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.sass', 'public/css')
    .postCss("resources/css/tailwind.css", "public/css", [
        require("tailwindcss"),
    ])


mix.disableNotifications()