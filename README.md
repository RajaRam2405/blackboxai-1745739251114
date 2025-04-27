# MyShop Ecommerce Website

This is a full-stack ecommerce website built with:

- Frontend: HTML, CSS, JavaScript, Bootstrap
- Backend: PHP
- Database: MySQL

## Features

- User authentication (signup, login, logout)
- Product catalog with categories
- Responsive design with Bootstrap
- Secure password hashing and session management
- API endpoint to fetch product data in JSON format

## Setup Instructions

1. Clone the repository or copy the files to your PHP server directory.
2. Create a MySQL database named `myshop`.
3. Import the provided SQL schema (see `database/schema.sql`) to create tables and sample data.
4. Update `config.php` with your MySQL credentials.
5. Run the PHP server (e.g., using XAMPP, MAMP, or built-in PHP server).
6. Access the site via `http://localhost/index.php`.

## Database Schema

- `users` table for user accounts
- `products` table for product information
- `categories` table for product categories

## Future Enhancements

- Shopping cart and checkout system
- Payment gateway integration
- Order tracking and history
- Product reviews and ratings
- Wishlist functionality

## License

MIT License
