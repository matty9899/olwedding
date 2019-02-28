// Grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    cssnano = require('gulp-cssnano'),
    autoprefixer = require('gulp-autoprefixer'),
    sourcemaps = require('gulp-sourcemaps'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    bower = require('gulp-bower'),
    babel = require('gulp-babel'),
    browserSync = require('browser-sync').create();

// Compile Sass, Autoprefix and minify
gulp.task('styles', function() {
    return gulp.src('sass/**/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('css'))
});
    
// JSHint, concat, and minify JavaScript
// gulp.task('site-js', function() {
//   return gulp.src([	
	  
//            // Grab your custom scripts
//   		  './js/*.js'
  		  
//   ])
//     .pipe(plumber())
//     .pipe(sourcemaps.init())
//     .pipe(jshint())
//     .pipe(jshint.reporter('jshint-stylish'))
//     .pipe(concat('scripts.js'))
//     .pipe(gulp.dest('./js'))
//     .pipe(rename({suffix: '.min'}))
//     .pipe(uglify())
//     .pipe(sourcemaps.write('.')) // Creates sourcemap for minified JS
//     .pipe(gulp.dest('./js'))
// });    

// Watch files for changes (without Browser-Sync)
gulp.task('watch', function() {
  // Watch .scss files
  gulp.watch('./sass/**/*.scss', ['styles']);
  // Watch site-js files
  // gulp.watch('./js/*.js', ['site-js']);
}); 

// Run styles, site-js and foundation-js
gulp.task('default', function() {
  gulp.start('styles');
});
