const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const srcmaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const minifyjs = require('gulp-js-minify');

gulp.task('sass', function() {
	return gulp.src('src-sass/main.sass')
		.pipe(srcmaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(rename('style.css'))
		.pipe(srcmaps.write('./'))
		.pipe(gulp.dest('./'));
})

gulp.task('js', function(){
	return gulp.src('scripts/main.src.js')
	.pipe(srcmaps.init())
	.pipe(minifyjs())
	.pipe(rename('main.js'))
	.pipe(srcmaps.write('./'))
	.pipe(gulp.dest('./scripts'));
 });

gulp.task('watch', function() {
	gulp.watch('src-sass/**/*.sass', ['sass']);
	gulp.watch('scripts/*.src.js', ['js']);
	console.log('Watching for changes...');
})

gulp.task('default', ['watch']);
