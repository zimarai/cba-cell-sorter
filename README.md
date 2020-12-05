# CBA Cell Sorter Appoinment System

Website destinated to allow users who do not belong to CBA-USACH, to use modern scientific equipment called "Cell Sorter".

## Installation

This project requires [Composer] and [npm] to run, as well as [Nginx] web server, [MySQL] database and [PHP] >= 7. 

### Development environment 

Clone this repository in your computer and install dependencies.

```bash
$ cd cba-cell-sorter
$ npm install
$ composer install
```

Create the .env file using the .env.example file template, and complete it with your own machine configuration. (For security, your .env file must be ignored by git). Then Generate the appplication key.

```bash
$ cp .env.example .env
$ php artisan key:generate
```

Create a MySQL Database for this project, and connect it to the app. Then generate the schema running:

```bash
$ php artisan migrate
```

Build CSS and JS assets, and run the app in a web browser:

```bash
$ npm run dev
$ php artisan serve
```

Keep the `php artisan serve` window open, and type http://127.0.0.1:8000 on your favourite browser.

*If you want to use another port, like 9090, type `php artisan serve --port=9090`.*
