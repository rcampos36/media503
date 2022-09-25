'use strict';

var gulp = require('gulp');
// var sass = require('gulp-sass');
var livereload = require('gulp-livereload');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var sassGlob = require('gulp-sass-glob');
var sassLint = require('gulp-sass-lint');
var cssComb = require('gulp-csscomb');

const sass = require('gulp-sass')(require('sass'));

var sassDest = 'sass/';
var cssDest = './';
var sassMain = sassDest +'style.scss';

// get all sass files but exclude any vendor sass inside of sass/
var sassSrc = [sassDest +'**/*.s+(a|c)ss', '!'+ sassDest +'/vendor/**'];

// same as above, but also exclude main.scss and _settings.scss so
// comb doesn't insert hard imports for every scss file.
var sassSrcComb = [sassDest +'**/*.s+(a|c)ss', '!'+ sassMain, '!'+ sassDest +'_settings.scss', '!'+ sassDest +'/vendor/**'];


// gulp.task('default', ('css'));


gulp.task('css', gulp.series( function () {
    return gulp.src( sassMain )
    .pipe( sassGlob() )
        .pipe( sourcemaps.init() )
        .pipe( sass({outputStyle: 'expanded'}).on('error', sass.logError) )
        .pipe( autoprefixer({
            overrideBrowserslist: ["defaults"],
            cascade: false }) )
        .pipe( sourcemaps.write('./sourcemaps') )
        .pipe( gulp.dest(cssDest) );
}));


gulp.task('lint', function () {
    return gulp.src( sassSrc )
        .pipe( sassGlob() )
        .pipe( sassLint({
                maxBuffer: 1228800,
        configFile: './.sass-lint.yml'
        }) )
        .pipe( sassLint.format() )
        .pipe( sassLint.failOnError() )
        .pipe( sourcemaps.init() )
        .pipe( sass({outputStyle: 'expanded'}).on('error', sass.logError) )
        .pipe( autoprefixer({
            overrideBrowserslist: ["defaults"],
            cascade: false }) )
        .pipe( sourcemaps.write('./sourcemaps') )
        .pipe( gulp.dest(cssDest) );
});


gulp.task('comb', function() {
  return gulp.src( sassSrcComb )
    .pipe( sassGlob() )
    .pipe( cssComb() )
    .pipe( gulp.dest( sassDest ) );
});

var jsInput = { js: 'js/dev/**/*.js' }
var jsOutput = 'js/dist/';

gulp.task('js', function(){
  return gulp.src(jsInput.js)
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/dist/'))
});


gulp.task('compile', gulp.series('comb', 'lint', 'js'));

gulp.task('css-reload', function () {
    gulp.src(sassMain)
        .pipe( sassGlob() )
        .pipe( sourcemaps.init() )
        .pipe( sass({outputStyle: 'expanded'}).on('error', sass.logError) )
        .pipe( autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false }) )
        .pipe( sourcemaps.write('./sourcemaps') )
        .pipe( gulp.dest(cssDest) )
        .pipe( livereload() );
});

// gulp.task('livereload', gulp.series('watch-reload'));
// gulp.task('reload', gulp.parallel('watch-reload'));


gulp.task('watch', function() {
    gulp.watch(sassSrc, { interval: 10 }, gulp.series('css'));
});


gulp.task('watch-reload', function() {
    livereload.listen();
    gulp.watch(sassSrc, { interval: 10 }, ['css-reload']);
});
