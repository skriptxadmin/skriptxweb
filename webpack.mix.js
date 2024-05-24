let mix = require('laravel-mix');

mix.js('assets/scripts/libs.js', 'public/scripts')
.js('assets/scripts/app.js', 'public/scripts')
.setPublicPath('public');

mix.sass('assets/styles/libs.scss', 'public/styles')
.sass('assets/styles/app.scss', 'public/styles');
