/*---------------------------------

Gulp-Packages

---------------------------------*/
const gulp = require("gulp");
const sass = require("gulp-sass");
const stylus = require('gulp-stylus');
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const plumber = require("gulp-plumber");

/*---------------------------------

Gulp-Tasks

---------------------------------*/

/**
 * sass -> cssにコンパイル
 */
gulp.task('sass', function(done){
  gulp.src("./assets/sass/**/*.scss")
  .pipe(plumber())
  .pipe(sass({outputStyle: 'expanded'}))
  .pipe(postcss([autoprefixer()]))
  .pipe(gulp.dest("./assets/css"));
  done();
});

/**
 * stylus -> cssにコンパイル
 */
var paths = {
  stylus: ['./stylus/**/*.styl','!./stylus/**/_*.styl']
};
gulp.task('stylus', function(done){
  gulp.src(paths.stylus)
  .pipe(stylus({outputStyle: 'expanded'}))
  .pipe(postcss([autoprefixer()]))
  .pipe(gulp.dest("./css"));
  done();
});

/**
 * ファイルの変更・保存を監視
 */
gulp.task('watch', function(done){
  gulp.watch('./assets/sass/**/*.scss', gulp.series('sass'));
  done();
});

/**
 * Gulpタスクをデフォルトのコマンドで起動
 * $ npx gulp
 */
gulp.task('default', gulp.series('sass', 'watch', function(done) {
  done();
}));