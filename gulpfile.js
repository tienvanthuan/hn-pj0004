const gulp = require('gulp');
const fs = require("fs");
const del = require('del');
const postcss = require('gulp-postcss');
const notify = require('gulp-notify');
const plumber = require('gulp-plumber');
// const htmlhint = require('gulp-htmlhint');
const dartSass = require('gulp-dart-sass');
const cleanCSS = require("gulp-clean-css");
const gulpIf = require('gulp-if');
const sourcemaps = require('gulp-sourcemaps');
const webpackStream = require('webpack-stream');
const webpack = require('webpack');
const webpackConfig = require('./webpack.config');
const browserSync = require('browser-sync');
const imagemin = require('gulp-imagemin');
const mozjpeg = require('imagemin-mozjpeg');
const pngquant = require('imagemin-pngquant');
const mode = require("gulp-mode")({
  modes: ["production", "development"],
  default: "development",
  verbose: false,
});
const config = require("./config");
const settings = config.settings;
// const env = require('node-env-file');
// env('.env');

const root = './root' + settings.root;
// const isProduction = process.env.NODE_ENV === "production";

// ファイルパス：コンパイル前
const srcPHPFiles = root + '**/*.php';
const srcScssFiles = './assets/scss/**/*.scss';
const srcTsFiles = './assets/ts/**/*.ts';
const srcJsFiles = './assets/js/**/*.js';
const srcImgFiles = './assets/images/**/*'
const srcImgFileType = '{jpg,jpeg,png,gif,svg,ico,pdf}';


// ファイルパス：コンパイル後
const destFiles = root + 'assets/**/*';
const destCssDir = root + 'assets/css';
const destCssFiles = root + 'assets/css/**/*.css';
const destJsDir = root + 'assets/js';
const destJSFiles = root + 'assets/js/**/*.js';
const destImtDir = root + 'assets/images';
const destImgFiles = root + 'assets/images/**/*';


// scssのパス
try{
  fs.writeFileSync("assets/scss/settings/_path.scss", `$path: '${settings.root}assets/';`);
}
catch(e){
  console.log(e.message);
}


// const htmlHint = (done) => {
//   gulp.src(destHtmlFiles)
//   .pipe(plumber({
//     errorHandler: notify.onError('Error: <%= error.message %>')
//   }))
//   .pipe(htmlhint(".htmlhintrc"))
//   .pipe(htmlhint.failReporter())
//   done();
// }

// sassコンパイル
const compileSass = (done) => {
  gulp.src(srcScssFiles)
    .pipe(plumber({
      errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    // .pipe(mode.development(sourcemaps.init()))
    .pipe(dartSass({
      outputStyle: 'expanded'
    }))
    // .pipe(mode.development(sourcemaps.write()))
    .pipe(postcss([
      require('tailwindcss'),
      require('autoprefixer'),
    ]))
    .pipe(mode.production(
      gulpIf(settings.css.minify, cleanCSS())
    ))
    .pipe(gulp.dest(destCssDir))
    .pipe(browserSync.stream());
  done();
};


// TypeScript(JS)をwebpackでバンドル
const bundleWebpack = (done) => {
  webpackStream(webpackConfig, webpack)
  .pipe(gulp.dest(destJsDir));
  done();
};


// browserSync設定
const serve = (done) => {
  browserSync.init({
    proxy : settings.server.localUrl,
    open: "external",
  });
  done();
};


// リロード設定
const reloadBrowser = (done) => {
  browserSync.reload();
  done();
};


// 画像圧縮
const minifyImage = (done) => {
  gulp.src(srcImgFiles + srcImgFileType)
    .pipe(imagemin(
    [
      pngquant({ quality: settings.minifyImage.png, speed: 1 }),
      mozjpeg({ quality: settings.minifyImage.jpg }),
      // imagemin.svgo(),
      imagemin.gifsicle()
    ]
    ))
    .pipe(gulp.dest(destImtDir));
  done();
};

// root/wp-content/themes/wp/assets配下の削除
const clean = (done) => {
  del([destFiles]);
  done();
};

// タスク化
exports.compileSass = compileSass;
exports.bundleWebpack = bundleWebpack;
exports.serve = serve;
exports.reloadBrowser = reloadBrowser;
exports.minifyImage = minifyImage;
exports.clean = clean;


// 監視ファイル
const watchFiles = (done) => {
  gulp.watch(srcPHPFiles, reloadBrowser);
  gulp.watch([srcScssFiles, srcPHPFiles], compileSass);
  // gulp.watch(destCssFiles, reloadBrowser);
  gulp.watch([srcTsFiles, srcJsFiles], bundleWebpack);
  gulp.watch(destJSFiles, reloadBrowser);
  gulp.watch(srcImgFiles, minifyImage);
  gulp.watch(destImgFiles, reloadBrowser);
  done();
};

exports.watchFiles = watchFiles;

const build = gulp.series(clean, gulp.parallel(minifyImage, bundleWebpack), compileSass);
const start = gulp.series(gulp.parallel(minifyImage, bundleWebpack), compileSass, serve, watchFiles);

exports.build = build;
exports.default = start;
