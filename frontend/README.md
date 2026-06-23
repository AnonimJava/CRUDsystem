# Logistics Tracking System

A logistics tracking application built with Laravel and Blade.

## Features

- Dashboard
- Shipment Management
- Create Shipments
- SQLite Database
- Eloquent ORM

## Tech Stack

- Laravel 13
- Blade
- SQLite
- Bootstrap 5

## Installation

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


---

# About security
# Про безапастность

Для публичного GitHub проекта главное правило:
For public GitHub Project first rule:

**Never do commits for:**
**Никогда не коммить:**

```text
.env
API Keys
Passwords
Tokens
SSH Keys
Private Certificates
