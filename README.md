# UPVIBLIOTECA

Upviblioteca is a library management system capable of be used by librarians and users in general. It has the power to have reservations, loans, modify the books, etc.

Upviblioteca is powered by laravel, so... If you know how to work with laravel 11, you'll know how to maintain this application

## About Laravel

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

# Installation and setup

To setup this project, you'll need first have to download the source code from github, and then, clone the repo.

```powershell
 git clone https://github.com/RichardKobay/library-dashboard.git
```

## Installing requirements

After you cloned the repo, you'll need to install all the necessary dependencies, you can do it with this two commands.

```powershell
npm install && composer install
```

> [!WARNING]  
> You have to install [Node](https://nodejs.org/) and [Composer](https://getcomposer.org/) before try to install the dependencies

# Initial project setup

## Setup `.env`

First, you'll need to create your `.env` file, you'll have an example at `/.env.example` please use this template.

Change the app name if you require it, but most important, to the database and mailing setup. Use Mysql and change your user, password and the database name of your preference

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name-goes-here
DB_USERNAME=database-username
DB_PASSWORD=database-password
```

Now, you can change the mailing configuration.

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=your-username-goes-here
MAIL_PASSWORD=mail-password-goes-here
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="your-email-please"
MAIL_FROM_NAME="${APP_NAME}"
```

Keep the `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, and `AIL_ENCRYPTION` in the same way, at least that you need another configuration

## Making migrations

Once you've cloned the project, you'll need to make the migrations (if you want the project to work)

```powershell
php artisan migrate
```

> [!NOTE]
> If you do not have a schema with the name of your `DB_NAME` variable in your database system, laravel will ask if you want to create it.
> 
> If you don't have any schema with that name, say yes, if don't please change your database name or create manually your schema; after that run `php artisan migrate`

And now the project is ready to go, but, what if i need sample data?

## Seeding the database

This project comes with sample data, all you have to do is run

```powershell
php arisan db:seed
```

And your database schema will fill with a little sample data, like users, books, loans, etc; all the necessary stuff to keep going on the project

## Run the project

You've finished the initial setup, now let's start by seeing if our project works, you'll need two command lines and run this two commands:

```powershell
npm run dev
```

And

```powershell
php artisan serve
```

This will automatically start a dev server on `localhost:8000` and you can see your changes there.

---

# Read the docs

Congratulations, you've successfully had done with the setup. If you need more info about the project you can always read the docs.

Our docs are allocated in `resources/markdown/docs` if you need more info about the project
