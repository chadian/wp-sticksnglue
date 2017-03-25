'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var cleanCSS = require('gulp-clean-css');

gulp.task('styles', function() {
  return gulp.src('./style/theme.scss')
    .pipe(sass({
      includePaths: require('node-normalize-scss').includePaths
    }).on('error', sass.logError))
    .pipe(postcss())
    .pipe(cleanCSS())
    .pipe(gulp.dest('.'));
});

gulp.task('watch', function() {
  gulp.watch('./style/**/*.scss', ['styles']);
});

gulp.task('default', ['watch', 'styles']);
gulp.task('build', ['styles']);
