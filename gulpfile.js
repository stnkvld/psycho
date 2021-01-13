const gulp = require('gulp');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const minify = require('gulp-minify');
const del = require('del');

const cssFiles = [
    'node_modules/animate.css/animate.min.css',
    'wp-content/themes/psycho/style.css'
];

const customFiles = [
    'wp-content/themes/psycho/js/modernizr.js',
    'wp-content/themes/psycho/js/jq.js',
    'node_modules/wowjs/dist/wow.min.js',
    'wp-content/themes/psycho/js/index.js',
];

const mainFiles = [
    'wp-content/themes/psycho/js/main.js',
];

const mainCss = [
    'wp-content/themes/psycho/css/main.css'
];

const aboutFiles = [
    'node_modules/simplelightbox/dist/simple-lightbox.jquery.min.js',
    'wp-content/themes/psycho/js/about.js',
];

const aboutCss = [
    'node_modules/simplelightbox/dist/simple-lightbox.min.css',
    'wp-content/themes/psycho/css/about.css',
];

const contactsCss = [
    'wp-content/themes/psycho/css/contacts.css',
];

const servicesCss = [
    'wp-content/themes/psycho/css/services.css',
];

// const portfolioFiles = [
//     'wp-content/themes/psycho/js/portfolio.js',
// ];

// const blogFiles = [
//     'wp-content/themes/psycho/js/blog.js',
// ];

function minifyStyles() {
    return gulp.src(cssFiles)
        .pipe(concat('style.min.css'))
        .pipe(autoprefixer({
            browsers: ['> 0.1%'],
            cascade: false
        }))
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('wp-content/themes/psycho'));
}

function minifyMainCss() {
    return gulp.src(mainCss)
        .pipe(concat('main.min.css'))
        .pipe(autoprefixer({
            browsers: ['> 0.1%'],
            cascade: false
        }))
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('wp-content/themes/psycho/css'));
}

function minifyAboutCss() {
    return gulp.src(aboutCss)
        .pipe(concat('about.min.css'))
        .pipe(autoprefixer({
            browsers: ['> 0.1%'],
            cascade: false
        }))
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('wp-content/themes/psycho/css'));
}

function minifyContactsCss() {
    return gulp.src(contactsCss)
        .pipe(concat('contacts.min.css'))
        .pipe(autoprefixer({
            browsers: ['> 0.1%'],
            cascade: false
        }))
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('wp-content/themes/psycho/css'));
}

function minifyServicesCss() {
    return gulp.src(servicesCss)
        .pipe(concat('services.min.css'))
        .pipe(autoprefixer({
            browsers: ['> 0.1%'],
            cascade: false
        }))
        .pipe(cleanCSS({
            level: 2
        }))
        .pipe(gulp.dest('wp-content/themes/psycho/css'));
}

function minifyCustomScript() {
    return gulp.src(customFiles)
        .pipe(concat('custom.js'))
        .pipe(minify({
            ext: {
                min: '.min.js'
            },
            noSource: true,
            mangle: false,
            compress: false
        }))
        .pipe(gulp.dest('wp-content/themes/psycho/js'));
}

function minifyMainScript() {
    return gulp.src(mainFiles)
        .pipe(concat('main.js'))
        .pipe(minify({
            ext: {
                min: '.min.js'
            },
            noSource: true,
            mangle: false,
            compress: false
        }))
        .pipe(gulp.dest('wp-content/themes/psycho/js'));
}

function minifyAboutScript() {
    return gulp.src(aboutFiles)
        .pipe(concat('about.js'))
        .pipe(minify({
            ext: {
                min: '.min.js'
            },
            noSource: true,
            mangle: false,
            compress: false
        }))
        .pipe(gulp.dest('wp-content/themes/psycho/js'));
}

function clean() {
    return del(['dest/*']);
}

function watch() {
    gulp.watch(cssFiles, minifyStyles);
    gulp.watch(mainCss, minifyMainCss);
    gulp.watch(aboutCss, minifyAboutCss);
    gulp.watch(contactsCss, minifyContactsCss);
    gulp.watch(servicesCss, minifyServicesCss);
    gulp.watch(customFiles, minifyCustomScript);
    gulp.watch(mainFiles, minifyMainScript);
    gulp.watch(aboutFiles, minifyAboutScript);
}

gulp.task('minifyStyles', minifyStyles);
gulp.task('minifyMainCss', minifyMainCss);
gulp.task('minifyAboutCss', minifyAboutCss);
gulp.task('minifyContactsCss', minifyContactsCss);
gulp.task('minifyServicesCss', minifyServicesCss);
gulp.task('minifyCustomScript', minifyCustomScript);
gulp.task('minifyMainScript', minifyMainScript);
gulp.task('minifyAboutScript', minifyAboutScript);
gulp.task('clean', clean);
gulp.task('watch', watch);

gulp.task('build', gulp.series('clean',
    gulp.parallel('minifyStyles', 'minifyMainCss', 'minifyAboutCss', 'minifyContactsCss', 'minifyServicesCss', 'minifyCustomScript', 'minifyMainScript', 'minifyAboutScript'),
));
gulp.task('dev', gulp.series('build', 'watch'));