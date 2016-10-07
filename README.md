## Basic Content Management System [![Build Status](https://travis-ci.org/TylerConlee/BasicCMS.svg?branch=master)](https://travis-ci.org/TylerConlee/BasicCMS)

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

To install the CMS itself, clone this repo, rename the `.env.example` to `.env` and run `composer install`, followed 
by `php artisan key:generate`. This will install the necessary dependencies for
Laravel to work, as well as generate a unique application key for the app.

### Heroku Deploy
- Will look into adding One Click Deploy at some point in the future, but in
the mean time:

1) Create a free dyno at Heroku and push the repo to that dyno using 
`git push heroku master`. More information can be found at [Heroku](https://devcenter.heroku.com/articles/getting-started-with-php#deploy-the-app)

2) Add the ClearDB MySQL addon. Run `heroku config | grep CLEARDB_DATABASE_URL`
to get the ClearDB URL. This URL will serve as your connection details for 
MySQL.

For example, the ClearDB URL provided on Heroku's documenation looks like this:
`mysql://adffdadf2341:adf4234@us-cdbr-east.cleardb.com/heroku_db?reconnect=true`

In this URL, you'll need this information:

- **DB_USERNAME:**  adffdadf2341
- **DB_PASSWORD:**  adf4234
- **DB_HOST:** us-cdbr-east.cleardb.com
- **DB_DATABASE:** heroku_db

3) Configure Heroku's environment variables with these values:
`heroku config:set DB_USERNAME=adffdadf2341`
`heroku config:set DB_PASSWORD=adf4234`
`heroku config:set DB_HOST=us-cdbr-east.cleardb.com`
`heroku config:set DB_DATABASE=heroku_db`

3) Run `heroku run php artisan migrate`

4) Run `heroku run php artisan key:generate`

### Support

If you're running into any issues with this CMS, open an [issue](https://github.com/TylerConlee/BasicCMS/issues/new) or submit a [pull request](https://github.com/TylerConlee/BasicCMS/compare) and I'll look into it!