# Modern MVC Architecture with PHP and PostgreSQL


## 🚀 Project Overview
A clean, modular MVC architecture using PHP and PostgreSQL, focused on separation of concerns, security, and extensibility. The project includes a Back Office for admins and a Front Office for public access, following best development practices.

## 🛠 Technologies Used

PHP
PostgreSQL
Git
JSON
Composer


## ✅ Features

Custom Router for advanced route management
Secure PostgreSQL Connection via PDO
Authentication System with sessions 
Role & Permission Management (ACL)
Twig Template Engine
SQL Injection & XSS Protection
Dependency Injection & Service Management


## 📁 Project Structure

public/: Entry point, assets, .htaccess
app/: Main application logic
core/: Core classes (Router, Controller, Model)
controllers/: Front and Back Office controllers
models/: Models for database interaction
views/: Twig templates for views
config/: Application configuration (database, routes)
logs/: Logs
vendor/: Composer dependencies
.env: Environment variables
composer.json: Composer dependencies
.gitignore: Git ignore configuration


## 🔒 Best Practices

Separation of Responsibilities: Public and admin-facing sections.
Security: CSRF, SQL Injection, XSS protection.
Modular Architecture: Easy to extend and maintain.
Template Engine: Using Twig for clear separation of views and logic.
Session Management: Handled by Session.php and Auth.php.


## 💡 Optimization & Best Practices

Optimize SQL queries to reduce execution time.
Use clear class/method names, following PSR-1 & PSR-12 standards.
Document code with clear comments.


### 📄 License
MIT License