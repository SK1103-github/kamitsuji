/*---------------------------------

Gulp-Packages

---------------------------------*/
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const stylus = require('gulp-stylus');
const plumber = require('gulp-plumber');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
/*---------------------------------

Gulp-Tasks

---------------------------------*/

/**
 * sass -> cssにコンパイル
 */
gulp.task('sass', function (done) {
  gulp.src("./assets/sass/**/*.scss") // Sassファイルを対象
    .pipe(plumber()) // エラー防止
    .pipe(sass({ outputStyle: 'expanded', sourceMap: false })) // Dart Sass コンパイル設定
    .pipe(postcss([autoprefixer()])) // CSSに自動プレフィックス付加
    .pipe(gulp.dest("./assets/css")); // 出力先を assets/css に指定
  done();
});

/**
 * stylus -> cssにコンパイル
 */
//var paths = {
//  stylus: ['./stylus/**/*.styl','!./stylus/**/_*.styl']
//};
//gulp.task('stylus', function(done){
//  gulp.src(paths.stylus)
//  .pipe(stylus({outputStyle: 'expanded'}))
//  .pipe(postcss([autoprefixer()]))
//  .pipe(gulp.dest("./css"));
//  done();
//});

/**
 * ファイルの変更・保存を監視
 */
gulp.task('watch', function() {
  gulp.watch('./assets/sass/**/*.scss', gulp.series('sass')); // Sassだけを監視
});

/**
 * Gulpタスクをデフォルトのコマンドで起動
 * $ npx gulp
 */
gulp.task('default', gulp.series('watch'));