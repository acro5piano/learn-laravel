const elixir = require('laravel-elixir');
var browserSync = require('browser-sync').create();

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
  mix.sass('app.scss')
    .webpack('app.js');
  mix.browserSync({
    proxy: 'http://localhost:8000',
    open: false,
  });
});
