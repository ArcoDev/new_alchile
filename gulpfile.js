const {series, src, dest, watch} = require('gulp');
const sass = require('gulp-sass');
const notify = require('gulp-notify');
const concat = require('gulp-concat');

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
}

//compilar sass y madarlo a carpeta de produccion
function css() {
    return src(paths.scss)
        .pipe(sass())
        .pipe(dest('./build/css'));
        //.pipe(notify({message: 'Tansformando sass en css'}));
}
//mandar js a carpeta de produccion
function js() {
    return src(paths.js)
        .pipe(concat('app.js'))
        .pipe(dest('./build/js'));
}
//compilar automaticamente al guardar los cambios 
function watchArchivos() {
    watch(paths.scss, css);
    watch(paths.js, js);
}

exports.css = css;
exports.watch = watch;
exports.default = series(css, js, watchArchivos);