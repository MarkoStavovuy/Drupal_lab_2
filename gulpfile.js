const gulp = require('gulp');
const sass = require('gulp-sass');

function start()
{
	return gulp.src('./sass/style.scss')
		   .pipe(sass())
		   .pipe(gulp.dest('./css'));
	
}


gulp.task('sass', start);