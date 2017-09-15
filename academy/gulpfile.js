var gulp = require('gulp');
var watch = require('gulp-watch');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');

gulp.task('js', function() {
  	gulp.src('static/javascripts/*.js')
	    .pipe(uglify())
	    .pipe(gulp.dest('public/javascripts'));
});

gulp.task('css', function() {
  	gulp.src('static/stylesheets/*.scss')
  		.pipe(sass().on('error', sass.logError))
    	.pipe(gulp.dest('public/stylesheets'));
});

gulp.task('default', function(){
	gulp.watch('static/javascripts/*.js', ['js']);
	gulp.watch('static/stylesheets/*.scss', ['css']);
})