# PHP CRUD with Navigation Menu

This is a simple PHP CRUD (Create, Read, Update, Delete) application using **PDO** and **MySQL**. It features a navigation menu to switch between CRUD functions easily.

## Features
- Uses **PDO** for secure database interaction.
- Implements **Create, Read, Update, and Delete (CRUD)** operations.
- Simple UI with an easy-to-use navigation menu.
- Database connection handled via `db.php`.

## Requirements
- PHP 7.4+ or PHP 8+
- MySQL Database
- Web server (Apache, Nginx, or built-in PHP server)

## Installation & Setup

### 1. Clone the Repository
```sh
git clone https://github.com/kader0100/Basic-CRUD3.git
cd Basic-CRUD3
```

### 2. Setup Database
- Create a MySQL database and import the provided SQL file:
```sql
CREATE DATABASE test_db;
USE test_db;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO products (product_name, price) VALUES
('Laptop', 1200.50),
('Smartphone', 699.99),
('Tablet', 399.99);
```

### 3. Configure Database Connection
- Open `db.php` and modify the database credentials if needed:
```php
$dsn = 'mysql:host=localhost;dbname=test_db;charset=utf8mb4';
$username = 'root';
$password = '';
```

### 4. Run the Application
#### Using PHP Built-in Server
- Start a PHP built-in server:
```sh
php -S localhost:8000
```
- Open your browser and go to:
```
http://localhost:8000/index.php
```

#### Using Laragon or LAMP Server
- **Laragon**:
  1. Place the project folder inside `C:\laragon\www\`
  2. Start Laragon and click **Start All**
  3. Open a browser and go to:
     ```
     http://localhost/Basic-CRUD3/index.php
     ```

- **LAMP (Linux, Apache, MySQL, PHP)**:
  1. Move the project folder to `/var/www/html/`
  2. Restart Apache:
     ```sh
     sudo systemctl restart apache2
     ```
  3. Open a browser and go to:
     ```
     http://localhost/Basic-CRUD3/index.php
     ```

## File Structure
```
php-crud-menu/
│── db.php         # Database connection
│── menu.php       # Navigation menu
│── index.php      # List all products
│── create.php     # Add a new product
│── update.php     # Edit product details
│── delete.php     # Delete a product
│── README.md      # Project Documentation
```

## Usage
- **Add Product**: Click "Add Product", enter details, and submit.
- **Edit Product**: Click "Edit" next to a product, modify details, and update.
- **Delete Product**: Click "Delete" to remove a product (confirmation required).

## License
This project is open-source and available under the MIT License.

---
Happy coding! 🚀


