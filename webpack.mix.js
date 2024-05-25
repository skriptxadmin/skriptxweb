let mix = require('laravel-mix');

mix.js('src/scripts/libs.js', 'public/scripts')
.js('src/scripts/app.js', 'public/scripts')
.setPublicPath('public');

mix.sass('src/styles/libs.scss', 'public/styles')
.sass('src/styles/app.scss', 'public/styles');
