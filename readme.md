##Laravel 4 - Bootstrap Application (Stable)

This is a Laravel 4 Bootstrap Application that has Twitter Bootstrap 2.3.0 and a skeleton app on Laravel 4.

Originally a fork of a repo by [brunogaspar](https://github.com/brunogaspar) that no longer exists.

###How to install

	git clone git://github.com/andrew13/Laravel-4-Bootstrap.git laravel
	cd laravel
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

You might want to make [composer as an alias](http://andrewelkins.com/programming/php/setting-up-composer-globally-for-laravel-4/) for future ease of use.

Now that you have the Laravel 4 installed, you need to create a database for it and update the file ***app/config/database.php***

-----

###After that, run these commands to create and populate Users table:

	php artisan migrate
	php artisan db:seed

-----

### Make sure app/storage is writable by your web server.
If permissions are set correctly:

    chmod -R 775 app/storage

Should work, if not try

    chmod -R 777 app/storage

-----

Navigate to your Laravel 4 website and try to login with the default credentials:

	email : test@test.com
	password : test

Create a new user at /account/register

### License

This is open-sourced software license under the [MIT license](http://opensource.org/licenses/MIT)
