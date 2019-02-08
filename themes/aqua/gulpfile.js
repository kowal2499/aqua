var gulp = require('gulp');
var rev = require('gulp-rev');
var clean = require('gulp-clean');
var fs = require('fs');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var distFolder = 'assets/build';
var sassAsset = 'assets/styles/scss/*.scss';
var compiledSassFolder = 'assets/styles/css';
var cssAssets = [
    'node_modules/bootstrap3/dist/css/bootstrap.min.css',
    'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
    'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css',
    'node_modules/simplelightbox/dist/simplelightbox.min.css',
    'assets/styles/css/main.css',
];


function compileSass() {
    return gulp
        .src(sassAsset)
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest(compiledSassFolder));
}

function bundleCSS() {
    return gulp
        .src(cssAssets)
        .pipe(concat('style.css'))
        .pipe(gulp.dest(distFolder));
}

function concatJS() {
    return gulp
        .src(jsAssets)
        .pipe(concat('app.js', {newLine: ';'}))
        .pipe(uglify())
        .pipe(gulp.dest(distFolder));
}

function hashAssets() {
    return gulp
        .src([
            distFolder + '/app.css',
            distFolder + '/app.js'
        ], {allowEmpty: true})
        .pipe(rev())
        .pipe(gulp.dest(distFolder))
        .pipe(rev.manifest())
        .pipe(gulp.dest(distFolder));
}

function tidyUp() {
    var json = JSON.parse(fs.readFileSync(distFolder + '/rev-manifest.json'));
    return gulp.src([
        distFolder + '/*.css',
        distFolder + '/*.js',
        '!' + distFolder + '/' + json['app.css'],
        '!' + distFolder + '/' + json['app.js'],
        '!' + distFolder + '/app.css',
        '!' + distFolder + '/app.js',
    ], {allowEmpty: true})
        .pipe(clean());
}

function watchFiles() {
    gulp.watch('assets/styles/scss/*.scss', gulp.series(compileSass, bundleCSS));
}

gulp.task('watch', watchFiles);