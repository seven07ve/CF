const gulp = require('gulp');
const sass = require('gulp-ruby-sass');

gulp.task('sass', function () {
	return sass('scss/**/*.scss', {
		style: 'compact'
	})
		.on('error', sass.logError)
		.pipe(gulp.dest('css/'));
});

//Watch task
//Watches scss
gulp.task('watch', function(){
	gulp.watch('scss/**/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);