<h1>Source code of website</h1>
<p>This is the source code of http://tabb.la</p>

<p>To run this project follow this command on terminal</p>
<p>You have to install LAMP or MAMP on your computer.</p>
<p>-PHP version > 7.0</p>
<p>-Using Mysql</p>
<br>
<p>Create Database on your local Mysql server.</p>
<br>
Edit _.env_ file.
<br><br>
```
composer install
php artisan migrate
php artisan db:seed
php artisan key:generate
php artisan serve
```
<br>
And then then the local server will run on 8000 port.
<br>
