var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var image = require('gulp-image');
var livereload = require('gulp-livereload');

gulp.task('build-img', function() {
	gulp.src('assets/images/**/*.!(db)')
		.pipe(image())
		.pipe(gulp.dest('assets/images'));

});
