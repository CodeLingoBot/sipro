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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');


mix.js('resources/assets/js/questions/form.js', 'public/js/questions');
mix.js('resources/assets/js/questions_in_tests/form.js', 'public/js/questions_in_tests');
mix.js('resources/assets/js/tests/apply.js', 'public/js/tests');
