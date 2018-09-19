<h1>Source code of website</h1>
<p>This is the source code of http://tabb.la</p>

To run this project follow this command on terminal
You have to install LAMP or MAMP on your computer.
PHP version > 7.0
Using Mysql

Create Database on your local Mysql server.

Edit _.env_ file.


_composer install_
_php artisan migrate_
_php artisan db:seed_
_php artisan key:generate_
_php artisan serve_

And then then the local server will run on 8000 port.
