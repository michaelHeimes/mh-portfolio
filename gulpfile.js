const gulp = require('gulp');
const path = require('path');
const del = require('del');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const rename = require('gulp-rename');
const gulpif = require('gulp-if');
const named = require('vinyl-named');
const webpackStream = require('webpack-stream');
const webpack = require('webpack');
const browserSync = require('browser-sync').create();
const fs = require('fs');
const argv = require('yargs').argv;

const pkg = require('./package.json');
const version = pkg.version;
const isProduction = argv.mode === 'production';

// Paths
const paths = {
  scss: 'source/scss',
  vendor: 'source/scss/vendor',
  js: 'source/js',
  dist: 'dist',
};

// PostCSS plugins
const postCssPlugins = [autoprefixer()];

// -------------------
// Clean
// -------------------
function clean() {
  return del([`${paths.dist}/**/*`]);
}

// -------------------
// Vendor SCSS → _vendor-import.scss
// -------------------
function stylesVendor() {
  return gulp
    .src(`${paths.vendor}/vendor.scss`)
    .pipe(
      sass({
        includePaths: [
          'node_modules',
          'node_modules/foundation-sites/scss', // Add this!
          `${paths.scss}` // optional, your local SCSS
        ],
        outputStyle: 'expanded'
      }).on('error', sass.logError)
    )
    .pipe(postcss(postCssPlugins))
    .pipe(rename('_vendor-import.scss'))
    .pipe(gulp.dest(paths.vendor));
}

// -------------------
// Main styles (depends on vendor partial)
// -------------------
function styles() {
  return gulp
    .src(`${paths.scss}/style.scss`)
    .pipe(gulpif(!isProduction, sourcemaps.init()))
    .pipe(
      sass({
        includePaths: [
          'node_modules',
          'node_modules/foundation-sites/scss'
        ]
      }).on('error', sass.logError)
    )
    .pipe(postcss(postCssPlugins))
    .pipe(rename({ basename: `bundle.${version}` }))
    .pipe(gulpif(!isProduction, sourcemaps.write('.')))
    .pipe(gulp.dest(`${paths.dist}/css`))
    .pipe(browserSync.stream());
}

// -------------------
// JS with Webpack
// -------------------
function scripts() {
  return gulp
    .src(`${paths.js}/app.js`)
    .pipe(named())
    .pipe(
      webpackStream(
        {
          mode: isProduction ? 'production' : 'development',
          devtool: !isProduction ? 'source-map' : false,
          output: {
            filename: `bundle.${version}.js`,
          },
          module: {
            rules: [
              {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                  loader: 'babel-loader',
                  options: { presets: ['@babel/preset-env'] },
                },
              },
            ],
          },
          resolve: {
            modules: [path.resolve('./source/js'), 'node_modules'],
          },
        },
        webpack
      )
    )
    .pipe(gulp.dest(`${paths.dist}/js`))
    .pipe(browserSync.stream());
}

// -------------------
// Manifest
// -------------------
function manifest(cb) {
  const data = {
    css: `bundle.${version}.css`,
    js: `bundle.${version}.js`,
  };
  fs.writeFileSync(`${paths.dist}/manifest.json`, JSON.stringify(data, null, 2));
  cb();
}

// -------------------
// BrowserSync
// -------------------
function serve(cb) {
  browserSync.init({
    proxy: 'http://michael-heimes.local', // change to your local URL
    open: false,
    injectChanges: true,
  });
  cb();
}

// -------------------
// Watch
// -------------------
function watchFiles() {
  // 1️⃣ Watch vendor SCSS (excluding generated partial)
  gulp.watch(
    [
      `${paths.vendor}/vendor.scss`,       // main vendor entry
      `${paths.vendor}/**/_*.scss`,        // other vendor partials
      `!${paths.vendor}/_vendor-import.scss` // ignore the generated file
    ],
    gulp.series(stylesVendor, styles)
  );

  // 2️⃣ Watch theme SCSS excluding vendor folder
  gulp.watch(
    [
      `${paths.scss}/**/*.scss`,
      `!${paths.vendor}/**/*`
    ],
    styles
  );

  // 3️⃣ Watch JS
  gulp.watch(`${paths.js}/**/*.js`, gulp.series(scripts, manifest));

  // 4️⃣ Watch PHP
  gulp.watch(['**/*.php']).on('change', browserSync.reload);
}

// -------------------
// Build & Default
// -------------------
const build = gulp.series(clean, stylesVendor, styles, scripts, manifest);
const dev = gulp.series(build, serve, watchFiles);

exports.clean = clean;
exports.stylesVendor = stylesVendor;
exports.styles = styles;
exports.scripts = scripts;
exports.manifest = manifest;
exports.build = build;
exports.default = dev;