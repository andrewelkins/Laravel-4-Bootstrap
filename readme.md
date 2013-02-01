##Laravel 4 - Bootstrap Application

This is a Laravel 4 Bootstrap Application, and like the name, it has Twitter Bootstrap 2.2.2 and it comes as an example application to help you get started on using Laravel 4 :)

###How to install

	git clone git://github.com/andrew13/Laravel-4-Bootstrap.git laravel
	cd laravel
	curl -s http://getcomposer.org/installer | php
	php composer.phar install

Now that you have the Laravel 4 installed, you need to create a database for it and update the file ***app/config/database.php***

-----

###After that, run these commands to create and populate Users table:

	php artisan migrate:install
	php artisan migrate
	php artisan db:seed

-----

Navigate to your Laravel 4 website and try to login with the default credentials:

	email : test@test.com
	password : test

Create a new user at /account/register

Based on a previous version of a Laravel 4 Bootstrap by brunogaspar

## Laravel 4.x - Pulled Develop commit 7e81f9de94d5adec10bca55bda9d28dca005879b

### A Framework For Web Artisans

[Official Documentation](http://four.laravel.com) (Under Active Development)

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software license under the [MIT license](http://opensource.org/licenses/MIT)