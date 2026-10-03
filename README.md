# Gaming E-Commerce Platform

A full-stack, database-driven e-commerce platform developed as part of my MSc Computing coursework at the University of Sunderland. Customers can browse and search for products, manage a shopping cart and place orders, while administrators manage products and orders through a dedicated dashboard.

## Features

- **User registration and login** with securely hashed passwords
- **Product search** to find items quickly
- **Shopping cart** with add, update and remove actions
- **Checkout and order placement**
- **Admin dashboard** for managing products and orders
- **Responsive design** for desktop and mobile

## Technologies Used

- **Back end:** PHP
- **Database:** MySQL
- **Front end:** JavaScript, HTML5, CSS3

## Database Design

A six-table relational MySQL database:

| Table         | Purpose                     |
| ------------- | --------------------------- |
| `users`       | Customer accounts           |
| `admins`      | Administrator accounts      |
| `products`    | Product catalogue           |
| `cart`        | Items in each user's basket |
| `orders`      | Order records               |
| `order_items` | Products within each order  |

## Security

- Passwords stored as secure hashes, never as plain text
- **Prepared statements** used for database queries to protect against SQL injection
- Session-based authentication for users and administrators

## Getting Started

### Prerequisites

- A local server with PHP and MySQL, such as **XAMPP** or **WAMP**

### Installation

1. Clone the repository:
   `git clone https://github.com/ifeanyiukiwe/msc-ecommerce.git`
2. Move the project folder into your server's web directory (for example `htdocs` in XAMPP).
3. Create a MySQL database and import the SQL file from the `database` folder using phpMyAdmin.
4. Copy `config.example.php` to `config.php` and add your own database details.
5. Start Apache and MySQL, then open `http://localhost/ojoukiweifeanyi_website` in your browser.

## What I Learned

- Designing and normalising a relational database for a real-world application
- Applying secure coding practices, including password hashing and prepared statements
- Structuring a full-stack PHP application with separate customer and admin areas

## Future Improvements

- Online payment integration
- Deployment to a live hosting environment
- Automated tests for key features

## Author

**Ojo Ifeanyi Ukiwe**
[GitHub](https://github.com/ifeanyiukiwe) · [LinkedIn](https://linkedin.com/in/ifeanyiukiwe)
