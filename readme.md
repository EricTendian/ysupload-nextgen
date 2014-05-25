## YSUpload Next Generation

[![Build
Status](https://travis-ci.org/EricTendian/ysupload-nextgen.svg?branch=master)](https://travis-ci.org/EricTendian/ysupload-nextgen)

The next generation of YSUpload, built with the Laravel PHP framework.
This application is meant to be simple, yet robust. It allows users to
download YSFlight addons.

## Server-side

Laravel is the current PHP framework supporting the server-side
components of the website. Running the website locally will
require a few things:

*  PHP >= 5.4
*  [Composer](https://getcomposer.org/)
*  PHPUnit
*  Web server (configured to run out of the /public directory of this
   project)
*  MySQL server

After you have those components, go to the root directory of the
repository and run:

    composer install

to install the necessary dependencies.

### Setup your local environment config

Create a new directory for your local environment configuration,
`/app/config/local-{first name}`

This directory can include "overriding" configuration arrays for the
core application config arrays.

Your local config should contain a `database.php` configuration file at
a minimum to connect to your local DB. **Do not update the database.php
config of any other environment other than your own.**

To configure the application to utilize your local environment, update
`/bootstrap/start.php` wherein the detectEnvironment method contains an
array index mapping 'local-{username}' => the hostname of your machine.


#### Documentation

Documentation for the entire framework can be found on the [Laravel
website](http://laravel.com/docs).
<br />[![Latest Stable
Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework)
[![Total
Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework)
[![Build
Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.png)](https://packagist.org/packages/laravel/framework)

## Client-side

All of the client-side code is located in the /public directory. This
code utilizes Bower and NPM package management, and the Grunt task runner.
Modifying the client-side code will require a few things:

*  Git
*  Ruby
*  NodeJS
*  NPM

Move into the /public directory and run `bower update` then `npm update`
to update all the local packages.

The client-side code makes use of Bootstrap and AngularJS frameworks.

## Additional info

More to be added.
