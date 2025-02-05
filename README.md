# Modern MVC Architecture with PHP and PostgreSQL


## 🚀 Project Overview
A clean, modular MVC architecture using PHP and PostgreSQL, focused on separation of concerns, security, and extensibility. The project includes a Back Office for admins and a Front Office for public access, following best development practices.

## 🛠 Technologies Used
PHP
PostgreSQL
Git
JSON
Composer
UML
✅ Features
Custom Router for advanced route management
Secure PostgreSQL Connection via PDO
Authentication System with sessions 
Role & Permission Management (ACL)
Twig Template Engine
SQL Injection & XSS Protection
Dependency Injection & Service Management


## 📁 Project Structure
bash
Copy
Edit
/projet-mvc-php
│── public/                  # Entry point, assets, .htaccess
│── app/                     # Main app logic
│   ├── core/                # Core classes: Router, Controller, Model
│   ├── controllers/         # Controllers: Front and Back Office
│   ├── models/              # Models: Database interaction
│   ├── views/               # Views: Twig templates
│── config/                  # App configuration: database, routes
│── logs/                    # Logs
│── vendor/                  # Composer dependencies
│── .env                     # Environment variables
│── composer.json            # Composer dependencies
│── .gitignore               # Git ignores
🔒 Best Practices
Separation of Responsibilities: Public and admin-facing sections.
Security: CSRF, SQL Injection, XSS protection.
Modular Architecture: Easy to extend and maintain.
Template Engine: Using Twig for clear separation of views and logic.
Session Management: Handled by Session.php and Auth.php.


## ⚙️ Setup Instructions
Clone the repository:
bash
Copy
Edit
git clone https://github.com/yourusername/projet-mvc-php.git
Install dependencies:
bash
Copy
Edit
composer install
Configure .env for PostgreSQL credentials.
Set up the database and run migrations.
Access the app at public/index.php.


## 💡 Optimization & Best Practices
Optimize SQL queries to reduce execution time.
Use clear class/method names, following PSR-1 & PSR-12 standards.
Document code with clear comments.


### 📄 License
MIT License