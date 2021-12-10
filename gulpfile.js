const gulp = require('gulp');
const sass = require('gulp-sass')((require('node-sass')));
const rename = require('gulp-rename');
const srcmaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const minifyjs = require('gulp-js-minify');

function _sass() {
	return gulp.src('src-sass/main.sass')
		.pipe(srcmaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer({
			overrideBrowserslist: ['last 2 versions'],
			cascade: false
		}))
		.pipe(rename('style.css'))
		.pipe(srcmaps.write('./'))
		.pipe(gulp.dest('./'));
};

function _js() {
	return gulp.src('scripts/main.src.js')
	.pipe(srcmaps.init())
	.pipe(minifyjs())
	.pipe(rename('main.js'))
	.pipe(srcmaps.write('./'))
	.pipe(gulp.dest('./scripts'));
 };

function watch() {
	gulp.watch('src-sass/**/*.sass', _sass);
	gulp.watch('scripts/*.src.js', _js);
	console.log('Watching for changes...');
};

const build = gulp.parallel(_sass, _js);

exports.sass = _sass;
exports.js = _js;
exports.watch = watch;

gulp.task('default', build);
