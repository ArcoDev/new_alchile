//Variables
const {series, src, dest, watch} = require('gulp');
const sass = require('gulp-sass');
const notify = require('gulp-notify');
const imagenMin = require('gulp-imagemin');
const imgWebp = require('gulp-webp');
const concat = require('gulp-concat');

//Rutas genericas de los archivos para despues ser compilados
const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

//Compilar sass y madarlo a carpeta de produccion
function css() {
    return src(paths.scss)
        .pipe(sass())
        .pipe(dest('./build/css'))
        .pipe(notify({message: 'Tansformando sass en css'}));
}

//Mandar js a carpeta de produccion
function js() {
    return src(paths.js)
        .pipe(concat('app.js'))
        .pipe(dest('./build/js'));
}
//Minificar el peso de la imagen 
function minificarImg() {
    return src(paths.imagenes)
        .pipe(imagenMin())
        .pipe(dest('./build/img'))
        .pipe(notify({message: 'Minificando peso de imagenes'}));
}
//Cambiar el formto de la imagen sin perder calidad, al formato usado por la (web) webp.
function versionWebp() {
    return src(paths.imagenes)
        .pipe(imgWebp())
        .pipe(dest('./build/img'))
        .pipe(notify({message: 'Version Webp lista'}));
}

//compilar automaticamente al guardar los cambios 
function watchArchivos() {
    watch(paths.scss, css);
    watch(paths.js, js);
}

//Utilizar la funciones desde la terminal
exports.css = css;
exports.watch = watch;
exports.default = series(css, js, minificarImg, versionWebp, watchArchivos);