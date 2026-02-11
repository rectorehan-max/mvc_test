# MVC Website

Simle Full Stack Website using MVC Framework

## Features
- User list
- Add New Users
- Update a User
- View a User
- Tailwind CSS UI

---

## Technologies Used
- PHP
- MYSQL
- Tailwind Css
- Apache XAMPP

## How to run/test?

- Clone the repository and place it inside your XAMPP `htdocs` folder  

- Start **Apache** and **MySQL** using the XAMPP Control Panel

- Create your own config file:

- Inside `config/config.php`, return an array containing your database credentials  
Example:

```php
<?php
return [
    'db_host' => 'localhost',
    'db_name' => 'user_db',
    'db_username' => 'admin',
    'db_password' => 'adminpass',
];
```

- Open the project in your browser 
