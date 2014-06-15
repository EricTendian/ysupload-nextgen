## YSUpload Next Generation

[![Build
Status](https://travis-ci.org/EricTendian/ysupload-nextgen.svg?branch=master)](https://travis-ci.org/EricTendian/ysupload-nextgen)

The next generation of YSUpload, built with the Laravel PHP framework.
This application is meant to be simple, yet robust. It allows users to
download YSFlight addons.

## Getting started

### Local Laravel environment setup

By default, you will be in `production` environment. You probably want to be in `development` when working locally. To switch:

  1. `php artisan key:generate`. Copy key to `app.key` in `.env.php` and `.env.development.php`
  2. Set an ENV variable for `APP_ENV` to `development`. You can do this in `php-fpm.conf`, `httpd.conf`, or your local shell ENV in `.bash_profile`.
  3. Edit settings in `.env.development.php` or which ever `.env.*.php` you want to use

### Build project
  4. `composer install`
  5. `npm install`
  6. `bower update`
  7. `gulp` (Ignore `jshint` warnings)
  8. `php artisan serve` (starts a temporary webserver on port 8000)

### View in browser

  9. In browser go to: `http://localhost:8000`

## Server-side

Laravel is the current PHP framework supporting the server-side
components of the website. Running the website will
require a few things:

*  PHP >= 5.4
*  [Composer](https://getcomposer.org/)
*  PHPUnit
*  Web server (configured to run out of the /public directory of this
   project)
*  MySQL server

### Site settings CONSTANTs

While sensitive settings should go in the `.env.*.php` files, site wide settings such as __admin email address__, __phone number__, and other global data typically go in a CONSTANTs file or Site Settings file. If you would like to use a similar setup, add as many entries as you need to the file `app/config/setting.php`.

In your `views` or any other Laravel file, your data will be available via `Config::get('setting.key');`.

## Client-side

All of the client-side code is located in the /public directory. This
code utilizes Bower and NPM package management, and the Gulp task runner.
Modifying the client-side code will require a few things:

*  Git
*  Ruby
*  NodeJS
*  NPM

Move into the /public directory and run `npm update` then `bower update`
to update all the local packages.

The client-side code makes use of Bootstrap and AngularJS frameworks.
Running `gulp` builds all client-side assets.

### Editing client-side assets

  1. Edit `app/assets/less/app-styles.less` as needed
  2. Run `gulp css:pub` to regenerate Less to CSS
  3. Refresh in browser to see changes
  4. Edit `app/assets/js/app.js` as needed
  5. Run `gulp js:pub` to regenerate JS
  6. Refresh in browser to see changes
  7. Rinse & Repeat :-)

## Additional info

More to be added. Refer to [the laravel-bootstrap-bower-gulp README](https://github.com/jhauraw/laravel-bootstrap-bower-gulp/blob/master/README.md) for more information on changes not documented in this README.

## Documentation

Documentation for the entire framework can be found on the [Laravel
website](http://laravel.com/docs).
<br />[![Latest Stable
Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework)
[![Total
Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework)
[![Build
Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.png)](https://packagist.org/packages/laravel/framework)