[![Latest Version on Packagist](https://img.shields.io/packagist/v/mushahedur/contact.svg)](https://packagist.org/packages/mushahedur/contact)
[![Total Downloads](https://img.shields.io/packagist/dt/mushahedur/contact.svg)](https://packagist.org/packages/mushahedur/contact)
[![License](https://img.shields.io/packagist/l/mushahedur/contact.svg)](LICENSE)

# Laravel Contact Us Package

A simple, clean, and lightweight Laravel package that helps you easily add a **Contact Us** form to your application.

This package allows visitors to submit contact queries which are:

- **Stored securely in the database**
- **Sent to the administrator via email notification**

It is designed to be easy to install, configurable, and compatible with modern Laravel versions.

## ✨ Features

- Ready-to-use Contact Us form
- Automatically stores contact messages in the database
- Sends email notifications to the admin
- Configurable admin email and mail subject
- Clean and minimal UI
- Easy installation and setup
- Supports **Laravel 9, 10, and 11**

## 📦 Installation

Install the package via Composer:

```bash
composer require mushahedur/contact

```

## ✨ Migration

run the terminal 

```bash
php artisan migrate

```


## 🧩 go to url

when install then add `/contact`

```bash
http://127.0.0.1:8000/contact

or

http://loclhost/contact

```


## ✨ If You may modify your from email

config/contact.php

```bash

    'send_email_to' => 'mrk@gmail.com'

```