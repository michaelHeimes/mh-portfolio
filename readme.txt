=== Trailhead ===

Contributors: automattic
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.4
Requires PHP: 5.6
Stable tag: 1.0.0
License: GNU General Public License v2 or later
License URI: LICENSE

A starter theme called Trailhead.

== Description ==

Description

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

Trailhead includes support for WooCommerce and for Infinite Scroll in Jetpack.

== Changelog ==

= 1.0 - May 12 2015 =
* Initial release

== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)




# Trailhead Theme Build System

This build system is designed for the Trailhead WordPress Theme, using Foundation 6.9.0, Sass, and ES6 modules compiled via Browserify + Babel. It handles:
	•	SCSS compilation: separates vendor (slow, includes Foundation mixins) and theme (fast, main styles) builds
	•	JavaScript bundling: Browserify + Babel with source maps
	•	Live reload: via BrowserSync
	•	Versioning: outputs versioned .css and .js files and generates manifest.json
	•	Optimized watch tasks: theme SCSS builds fast; vendor partial changes rebuild vendor first, then theme

---

## Requirements

- Node.js >= 18
- npm or yarn
- Gulp CLI installed globally:  
  ```bash
  npm install -g gulp
  
  
  Directory Structure
  
  source/
  ├─ scss/
  │  ├─ style.scss          # Main theme SCSS (fast compile)
  │  ├─ vendor/
  │  │  ├─ vendor.scss      # Vendor SCSS (slow compile, includes foundation-settings)
  │  │  └─ _vendor-import.scss # Generated partial imported by style.scss
  │  └─ foundation-settings.scss # Foundation settings overrides (moved into vendor folder)
  ├─ js/
  │  └─ app.js              # Theme JS entry point
  dist/
  ├─ css/                   # Compiled CSS output
  ├─ js/                    # Compiled JS output
  
  
  # Gulp Tasks - Trailhead Theme Build System
  
  | Task Name           | Description                                                                 |
  |---------------------|-----------------------------------------------------------------------------|
  | `gulp build`        | Cleans dist/, compiles vendor SCSS, theme SCSS, bundles JS, generates manifest.json |
  | `gulp`              | Default task: runs `build`, then watches files with BrowserSync live reload |
  | `gulp stylesTheme`  | Compiles theme SCSS (fast build) with autoprefixing and minification        |
  | `gulp stylesVendor` | Compiles vendor SCSS (slow build, generates _vendor-import.scss)     |
  | `gulp scripts`      | Bundles JS using Browserify + Babel; outputs `app.js` and `app.min.js`     |
  | `gulp clean`        | Deletes the dist/ folder                                               |
  | `gulp watch`        | Watches SCSS, JS, and PHP files, triggers live reload; vendor partials trigger stylesVendor first    |


					 ┌────────────┐
					 │  clean     │
					 │ (dist/)    │
					 └─────┬──────┘
						   │
		   ┌───────────────┴────────────────┐
		   │                                │
   ┌───────────────┐                ┌───────────────┐
   │ stylesTheme   │                │ stylesVendor  │
   │ (fast SCSS)   │                │ (slow SCSS, generates _vendor-import.scss) │
   └───────────────┘                └───────────────┘
		   │                                │
		   └───────────────┬────────────────┘
						   │
					 ┌───────────────┐
					 │   scripts     │
					 │ (JS bundling) │
					 └───────────────┘
						   │
					 ┌───────────────┐
					 │ manifest.json │
					 └───────────────┘
						   │
					 ┌───────────────┐
					 │   build       │
					 │ (runs all)    │
					 └─────┬─────────┘
						   │
					 ┌───────────────┐
					 │   default     │
					 │ (build + watch)│
					 └─────┬─────────┘
						   │
				   ┌───────────────┐
				   │    watch      │
				   │ (live reload) │
				   └───────────────┘