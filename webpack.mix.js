
// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/js/app.js', 'js')
   .sass('src/sass/app.scss', 'css')
   .setPublicPath('dist');

   mix.browserSync({
    proxy: 'loavertex.test',
    // Needs files for page refresh to work
    files: [
        'src/**/*.scss', 
        '**/*.php'
    ]
  });