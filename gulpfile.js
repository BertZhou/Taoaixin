var gulp = require('gulp'),
    less = require('gulp-less'),
    sourcemaps = require('gulp-sourcemaps'),
    minifycss = require('gulp-minify-css'),
    concat  = require('gulp-concat'),
    uglify  = require('gulp-uglify');
tmodjs = require('gulp-tmod');

gulp.task('default', function(){
    var stream = gulp.src('template/**/*.html')
        .pipe(tmodjs({
            templateBase: 'template'
        }))
        .pipe(gulp.dest('dist'));
    return stream;
});

gulp.task('mainLess', function () {
    gulp.src('web/main.less')
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(sourcemaps.write())
        .pipe(minifycss())
        .pipe(concat("main.min.css"))
        .pipe(gulp.dest('src/static'));
});
gulp.task('mainJs', function() {
    gulp.src('web/main.js')
        .pipe(uglify())
        .pipe(concat("main.min.js"))
        .pipe(gulp.dest("src/static"));
});

//Taoaixin
gulp.task('taoStyle', function () {
    gulp.src('public/assets/tao/less/*.less')
        .pipe(sourcemaps.init())
        .pipe(less())
        .pipe(sourcemaps.write())
        .pipe(minifycss())
        .pipe(concat('main.min.css'))
        .pipe(gulp.dest('public/assets/tao/css/'))
});

//任务监听
gulp.task('watch', function () {
    gulp.watch('web/main.less',['less']);
    gulp.watch('web/main.js',['js']);
    gulp.watch('public/assets/tao/less/*.less',['taoStyle']);
});

//less任务
gulp.task('less', ['mainLess']);
//js任务
gulp.task('js', ['mainJs']);
//缺省任务
gulp.task('default', ['g','mainJs',]);

