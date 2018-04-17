/*
|--------------------------------------------------------------------------
| Gulp Imports
|--------------------------------------------------------------------------
|
| Importing gulp variables so we can use both later
| for configuration settings
|
*/

var gulp                = require('gulp');
var $                   = require('gulp-load-plugins')();
var runSequence         = require('run-sequence');
var mainBowerFiles      = require('main-bower-files');
var browserSync         = require("browser-sync").create();

/*
|--------------------------------------------------------------------------
| Sass Task
|--------------------------------------------------------------------------
|
| Compile SCSS into assets/scss - Autoprefix it - Minify it
| Push it into nikis-resort/css
|
*/

gulp.task('sass', function () {
  return gulp.src('wp-content/themes/nikis-resort/assets/scss/**/*.scss')
  .pipe($.sass().on('error', $.sass.logError))
  .pipe($.autoprefixer({
    browsers: ['last 2 versions'],
    cascade: true
  }))
  .pipe($.cleanCss({compatibility: 'ie8'}))
  .pipe(gulp.dest('wp-content/themes/nikis-resort/css/'))
  .pipe(browserSync.stream());
});

/*
|--------------------------------------------------------------------------
| Php Task
|--------------------------------------------------------------------------
|
| Compile php
|
*/

gulp.task('php', function() {
  return gulp.src('wp-content/themes/nikis-resort/**/*.php')
  .pipe(browserSync.stream());
})

/*
|--------------------------------------------------------------------------
| JS Task
|--------------------------------------------------------------------------
|
| Minify JS 
| Push it into nikis-resort/js
|
*/

gulp.task('js', function() {
  return gulp.src('wp-content/themes/nikis-resort/assets/js/**/*.js')
  .pipe($.uglify())
  .pipe(gulp.dest('wp-content/themes/nikis-resort/js'))
  .pipe(browserSync.stream());
});

/*
|--------------------------------------------------------------------------
| Bower Task
|--------------------------------------------------------------------------
|
| Take main files from bower-components - Push them into vendor
|
*/

gulp.task('bower', function() {
    return gulp.src(mainBowerFiles(), {base: 'bower_components'})
        .pipe(gulp.dest('wp-content/themes/nikis-resort/vendor'));
});

/*
|--------------------------------------------------------------------------
| Vendor JS Task
|--------------------------------------------------------------------------
|
| Take .js files into vendor - Minify them - Push them into nikis-resort/js
|
*/

gulp.task('vendor-js', () => {
  return gulp.src(['wp-content/themes/nikis-resort/vendor/jquery/**/*.js', 'wp-content/themes/nikis-resort/vendor/**/*.js'])
      .pipe($.concat('vendor.js'))
      .pipe($.uglify())
      .pipe(gulp.dest('wp-content/themes/nikis-resort/js'))
});

/*
|--------------------------------------------------------------------------
| Vendor CSS Task
|--------------------------------------------------------------------------
|
| Take .css files into vendor - Minify them - Push them into nikis-resort/css
|
*/

gulp.task('vendor-css', () => {
  return gulp.src('wp-content/themes/nikis-resort/vendor/**/*.css')
      .pipe($.concat('vendor.css'))
      .pipe($.cleanCss({compatibility: 'ie8'}))
      .pipe(gulp.dest('wp-content/themes/nikis-resort/css'))
});

/*
|--------------------------------------------------------------------------
| Inject Task
|--------------------------------------------------------------------------
|
| Do bower task, then run vendor-css and vendor-js
|
*/

gulp.task('inject', () => {
     runSequence('bower', ['vendor-css', 'vendor-js']);
});

/*
|--------------------------------------------------------------------------
| Fonts Task
|--------------------------------------------------------------------------
|
| Take Fonts from bower components and push them into nikis-resort/fonts
|
*/

gulp.task('font', () => {
  return gulp.src(['bower_components/**/fonts/*.eot','bower_components/**/fonts/*.woff','bower_components/**/fonts/*.svg','bower_components/**/fonts/*.ttf',])
  .pipe($.flatten())
  .pipe(gulp.dest('wp-content/themes/nikis-resort/fonts'))
});

/*
|--------------------------------------------------------------------------
| Server Task
|--------------------------------------------------------------------------
|
| Static Server + watching scss/php files
|
*/
gulp.task('serve', function() {
  browserSync.init({
    // Your local server name
    proxy: "https://nikis.app"
  })
  gulp.watch("wp-content/themes/nikis-resort/assets/scss/**/*.scss", ['sass'])
  gulp.watch("wp-content/themes/nikis-resort/assets/js/**/*.js", ['js'])
  gulp.watch("wp-content/themes/nikis-resort/**/*.php", ['php'])
});