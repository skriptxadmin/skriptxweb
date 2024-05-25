## NAMO PHP Framework: Power in Simplicity ##

Discover Namo, the lightweight PHP framework designed for developers who value performance and efficiency. With its small footprint, Namo delivers the core features you need to build robust applications without the overhead. Enjoy an intuitive routing system, elegant ORM, built-in authentication, and a powerful templating engine—all while keeping your code clean and maintainable. Namo PHP Framework offers the perfect balance of simplicity and power, making it the ideal choice for modern web development.

### Download Instructions ###

`git clone https://github.com/skriptxadmin/namophp.git`


### Install Instructions ###

`composer update`

`npm install`


### Routing ###

Routing can be specified in

`app/Routes/web.php` 

and 

`app/Routes/api.php`

We use Braums Router and documentation can be found from

`https://github.com/bramus/router`


### Accessing .env variables ###

You can access the .env variables as $_ENV['key']

example you can see in app/Controllers/controller


### JS and CSS files ###

This framework uses webpack mix and hot reload is not implemented.

The files can be found in src/scripts and src/styles


#### For Development ####


`npm start` 


#### For Production ####

`npm run prod`


## Advanced ##

We use illuminate/database, from laravel framework. If you are not familiar with migrations and seeding, use some UI for easy development


### Migrations ###

uses database/database.sqlite

To create table use migrations.php and use example of users table.

If mysql is preferred then use

`$capsule->addConnection([
'driver' => 'mysql',
'host' => 'localhost',
'database' => 'database',
'username' => 'root',
'password' => 'password',
'charset' => 'utf8',
'collation' => 'utf8_unicode_ci',
'prefix' => '',
]);`

in database/migrations.php and app/Models/Model.php

### Seeding ###

Use database/seed.php and example of users seed

