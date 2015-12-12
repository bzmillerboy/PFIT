var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');
var svgSprite   = require('gulp-svg-sprite');

// create svg sprite
gulp.task('svg-sprite', function () {
    var config = {
		log: "info",
        mode                : {
            symbol          : {
                dest: '../../includes/'
            }
        }
	};
    return gulp.src('assets/icons/*.svg')
    .pipe(svgSprite(config))
    .pipe(gulp.dest('assets/icons/'));
});

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    './style.css',
    './*.php'
    ];

    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "pfit:8888",
    notify: false
    });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src('scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('./'))
        .pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['svg-sprite', 'sass', 'browser-sync'], function () {
    gulp.watch("scss/**/*.scss", ['sass']);
});
