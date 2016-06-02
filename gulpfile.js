var gulp = require('gulp');
livereload = require('gulp-livereload');

gulp.task('default', function() {
	console.log('hola');
});

gulp.task('watch', function() {
	gulp.watch('**')
});