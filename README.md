## Basic Content Management System

This is a basic content management system written in PHP using the Laravel 
framework. Currently, the CMS uses Laravel 5.1.

### Installation

To install, ensure that your system has all of the prerequisites for installing 
Laravel. 
Laravel's minimum requirements are:
- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

Most virtual machines *should* have these extensions installed already. You 
must also have [Composer](http://getcomposer.org/) installed as well.

To install the CMS itself, clone this repo and run `composer install`, followed 
by `php artisan key:generate`. This will install the necessary dependencies for
Laravel to work, as well as generate a unique application key for the app.

### Support

If you're running into any issues with this CMS, open an [issue](https://github.com/TylerConlee/BasicCMS/issues/new) or submit a [pull request](https://github.com/TylerConlee/BasicCMS/compare) and I'll look into it!