// list dependencies
const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const prefix = require('gulp-autoprefixer');
const cleancss = require('gulp-clean-css');
const terser = require('gulp-terser');
const minify = require("gulp-minify");


// create funtions

//scss
function compilescss() {
    return src('src/scss/*.scss')
        .pipe(sass())
        .pipe(prefix('last 2 versions'))
        .pipe(minify())
        .pipe(cleancss())
        .pipe(dest('dist/css'))
}

//js
function jsmin() {
    return src('src/js/*.js')
        .pipe(terser())
        .pipe(dest('dist/js'))
}

function minifyjs() {

    return src('dist/js/main.js', { allowEmpty: true }) 
        .pipe(minify({noSource: true}))
        .pipe(dest('dist/js'))
}

// create watch task
function watchTask(){
    watch('src/scss/**/*.scss', compilescss); 
    watch('src/js/*.js', jsmin); 
}

// default gulp
exports.default = series(
    compilescss,
    jsmin,
    watchTask,
    minifyjs,
    cleancss
  );