# Laravel Post Manager

A professional-grade Laravel CRUD application for managing posts. Includes features like filtering, pagination, validation, and clean architecture — all containerized using Docker.

---

## 🚀 Features

- Create, Read, Update, Delete Posts
- Filter by status and due date
- Sort by title and due date
- Pagination with query persistence
- Form validation via FormRequest
- Seed sample Posts using Laravel Seeder
- Responsive UI with Bootstrap 5
- Dockerized with separate containers for PHP, MySQL, and Nginx

---
### 1. Clone the Repo

 - git clone https://github.com/subhamkumar18/laravel-post-crud-application
 - cd laravel-post-crud-application

## 🐳 Docker Setup Instructions

- docker-compose build
- docker-compose up 

##  Run Project Locally
 - cd laravel-app
 - php artisan migrate:fresh --seed && php artisan serve
