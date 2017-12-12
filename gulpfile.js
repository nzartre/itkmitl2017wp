const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const srcmaps = require('gulp-sourcemaps');

gulp.task('sass', function() {
	return gulp.src('src-sass/main.sass')
		.pipe(srcmaps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(rename('style.css'))
		.pipe(srcmaps.write('./'))
		.pipe(gulp.dest('./'))
})

gulp.task('default', ['sass']);
