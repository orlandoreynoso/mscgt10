var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './css/estilo.css',
    './*.php',
    './template/*.php',
    './inc/*.php',
    'libs/*.php',
    './*.js'
    ];

    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "localhost/mscgt/",
    notify: false
    });
});

gulp.task('sass', function () {
    return gulp.src('sasst/*.sass')
        .pipe(sass())
        .pipe(gulp.dest('./'))
        .pipe(reload({stream:true}));
});

gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("sasst/**/*.sass", ['sass']);
});
