/*
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
/*
elixir(function(mix) {
    mix.sass('app.scss');
});
*/
var gulp = require('gulp');

var mainBowerFiles = require('main-bower-files');
 
gulp.task('bower', function() {
	console.log(mainBowerFiles());
    return gulp.src(mainBowerFiles())
        .pipe(gulp.dest('public/bower-compile/'))
});

gulp.task('default', ['bower']);
