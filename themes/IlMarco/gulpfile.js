const paths = {
  src: {
    styles: './assets/sass/main.scss',
    pages: './assets/src/views/pages/**/*.pug',
    img: './assets/public/img/*'
  },
  dest: {
    styles: './assets/css/',
    pages: './assets/public/',
    img: './assets/public/img'
  },
  watch: {
    styles: './assets/sass/**/*.s(a|c)ss',
    pages: './assets/src/views/**/*',
    public: './assets/**/*'
  }
}

const gulp = require('gulp');
const sass = require('gulp-sass');
const cssnano = require('gulp-cssnano');
const autoprefixer = require('gulp-autoprefixer');
const gulpIf = require('gulp-if');
const sourcemaps = require('gulp-sourcemaps');
const pug = require('gulp-pug');
const browserSync = require('browser-sync').create();

const isProd = process.env.NODE_ENV === 'production';

gulp.task('styles', () => {
  return gulp.src(paths.src.styles)
    .pipe(gulpIf(!isProd, sourcemaps.init()))
    .pipe(sass({ includePaths: [ 'node_modules' ] }))
    .pipe(gulpIf(isProd, cssnano({ discardUnused: false }), autoprefixer()))
    .pipe(gulpIf(!isProd, sourcemaps.write()))
    .pipe(gulp.dest(paths.dest.styles))
});

gulp.task('pages', () => {
  return gulp.src(paths.src.pages)
    .pipe(pug({
      pretty: true,
      basedir: './assets/src/views',
    }))
    .pipe(gulp.dest(paths.dest.pages))
})

gulp.task('server', () => {
  browserSync.init({
    proxy: 'http://localhost',
    online: false,
  })
});

gulp.task('watch', () => {
  gulp.watch(paths.watch.styles, gulp.parallel('styles'));
  // gulp.watch(paths.watch.pages, gulp.parallel('pages'));
  gulp.watch(paths.watch.public).on('change', browserSync.reload);
})

gulp.task('dev', gulp.series('styles', gulp.parallel('server', 'watch')));

gulp.task('build', gulp.parallel('styles', 'pages'));

gulp.task('default', gulp.parallel(isProd ? 'build' : 'dev'));
