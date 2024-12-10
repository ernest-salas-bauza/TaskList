# **Task List - Laravel Beginner Project**

This is a simple **Task List** application built as part of the [Laravel Beginner Fundamentals](https://www.udemy.com/course/laravel-beginner-fundamentals/) course on Udemy. The goal of this project is to solidify my understanding of Laravel fundamentals by applying concepts like routing, controllers, Blade templates, and Eloquent ORM in a real-world scenario.

## **Features**
- Add tasks to a list with form validation.
- View a list of tasks stored in the database.
- Update existing tasks (e.g., mark as completed or edit details).
- Delete tasks from the list.
- Simple and user-friendly UI with Blade templates and Tailwind.

## **What I Learned**
- Setting up a Laravel project and configuring the environment.
- Building CRUD (Create, Read, Update, Delete) functionality with Laravel.
- Using migrations and Eloquent ORM to manage database interactions.
- Structuring an MVC-based application in Laravel.
- Enhancing UX with Blade templates and Tailwind for styling.

## **Technologies Used**
- **Laravel:** Version 11.31
- **PHP:** Version 8.2.12
- **Database:** MySQL 
- **Frontend:** Blade templates and Tailwind
- **Tooling:** Composer, Artisan CLI

## **Setup Instructions**
1. Clone the repository:
   ```bash
   git clone https://github.com/ernest-salas-bauza/TaskList.git
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Set up the `.env` file for database configuration and generate the application key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Run migrations to create database tables:
   ```bash
   php artisan migrate
   ```
5. Serve the application locally:
   ```bash
   php artisan serve
   ```
6. Access the application in your browser at `http://localhost:8000`.

## **Acknowledgements**
This project was built as part of the [Laravel Beginner Fundamentals](https://www.udemy.com/course/laravel-beginner-fundamentals/). It serves as a stepping stone to enhance my foundational skills in Laravel development.
