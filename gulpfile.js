var elixir = require('laravel-elixir');

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

elixir(function (mix) {
    var paths = {
        "node": "../../../node_modules/"

    }
    mix.sass('app.scss');

    mix.scripts([
        paths.node + "vue/dist/vue.min.js",
        paths.node + "vue-resource/dist/vue-resource.min.js",
        paths.node + "jquery/dist/jquery.min.js",
        paths.node + "bootstrap-sass/assets/javascripts/bootstrap.min.js",
        "app.js"
        
    ], "public/js/app.js");

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts');
    mix.version(["css/app.css", "js/app.js"]);

});
