const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const runSequence = require('run-sequence');
/* Gulp plugins */
const csscomb = require('gulp-csscomb'); // Réodonner les propriété
const cssbeautify = require('gulp-cssbeautify'); // Améliorer le code (formatage)
const csso = require('gulp-csso'); // Minifier le code css
const rename = require('gulp-rename'); // Renomme les fichiers
const imagemin = require('gulp-imagemin'); // Optimisation des images
const cache = require('gulp-cache'); // Evite la réoptimisation des images déjà otpimisées
/* Options */
const source = './src';
const destination = './dist';

/* Tasks Dedicated to Bootstrap */

/* Here we populate source folder */

/* Task: Bootstrap style */

/* Get bootstrap scss files */
gulp.task('get-bootstrap-css', function(){
  return gulp.src(['./node_modules/bootstrap/scss/*'])
  .pipe(gulp.dest(source + '/custom-bs'))
  .pipe(browserSync.stream());
});

/* --------------------------------------- */

/* compile scss file to css */
gulp.task('bs-sass', function(){
  return gulp.src([source + '/custom-bs/scss/bootstrap.scss', source + '/scss/*.scss'])
  .pipe(sass())
  .pipe(csscomb())
  .pipe(cssbeautify({
      indent: '  ',
      openbrace: 'separate-line',
      autosemicolon: true
  }))
  .pipe(gulp.dest(destination + '/css'))
  .pipe(browserSync.stream());
});

/* Task: Bootstrap scripts */
gulp.task('bs-js', function() {
  return gulp.src(['./node_modules/bootstrap/dist/js/bootstrap.min.js', './node_modules/jquery/dist/jquery.min.js', './node_modules/popper.js/dist/umd/popper.min.js'])
  .pipe(gulp.dest(destination + '/js'))
  .pipe(browserSync.stream());
})

/* Task: FontAwesome fonts*/
gulp.task('fa-fonts', function() {
  return gulp.src(['./node_modules/font-awesome/fonts/*'])
  .pipe(gulp.dest(destination + '/fonts'))
  .pipe(browserSync.stream());
})

/* Task: FontAwesome style*/
gulp.task('fa-css', function() {
  return gulp.src(['./node_modules/font-awesome/css/font-awesome.min.css'])
  .pipe(gulp.dest(destination + '/css'))
  .pipe(browserSync.stream());
})


/* Task: HTML */
gulp.task('html', function() {
  return gulp.src([source + '/*.html'])
  .pipe(gulp.dest(destination + '/'))
  .pipe(browserSync.stream());
})


/* Task: Serve and sass */
gulp.task('serve-root', ['bs-sass', 'html'], function() {
  browserSync.init({
    server: {
      baseDir: destination
    },
  })

  gulp.watch(source + '/scss/*.scss', ['bs-sass']);
  gulp.watch(source + '/*.html', ['html']);
  gulp.watch(source + '/*.html').on('change', browserSync.reload);

})

gulp.task('build', ['bs-js', 'fa-fonts', 'fa-css', 'serve-root'])





















