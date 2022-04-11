let mix = require('laravel-mix');

mix.js('src/js/app.js', 'js')
mix.sass('src/scss/app.scss', 'css')
mix.setPublicPath('assets');

mix.browserSync({
   proxy: "http://sportanddiet.local/",
   files: [
         './**/*.php',
         './**/*.js',
         './**/*.css',
   ]
});