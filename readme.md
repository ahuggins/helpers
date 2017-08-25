# Laravel Helpers

A simple way to add a customizable helpers.php file to your Laravel application.

1. Simply run this composer require command:

`composer require ahuggins/helpers`

2. Then if your application is >= Laravel 5.5, you would be done. Otherwise you will need to add the following service provider to your `config/app.php` file.

`AHuggins\Helpers\Providers\HelpersServiceProvider::class,`

3. Publish the helpers file.

`php artisan vendor:publish --tag=helpers`
