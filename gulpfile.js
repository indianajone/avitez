var elixir = require('laravel-elixir');

require('laravel-elixir-bower');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.bower()
        .less('app.less')
        .styles([
            "css/vendor.css",
            "css/app.css"
        ])
        .scripts([
            "vendor.js",
            "bootstrap.min.js"
        ], "public/js", "public/js/main.js");
});
