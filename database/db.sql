-- Create Database
CREATE DATABASE FootprintDB;

-- Use the created database
USE FootprintDB;

-- Create Users Table (for Login/Signup)
CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    phone_number VARCHAR(15),
    address TEXT,
    date_joined TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
vbnul
-- Create Categories Table (for storing product categories like Men, Women, Kids)
CREATE TABLE Categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(50) NOT NULL
);

-- Create Products Table (for storing product details)
CREATE TABLE Products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock_quantity INT DEFAULT 0,
    image_url VARCHAR(255),
    category_id INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
);

-- Insert default categories into Categories Table
INSERT INTO Categories (category_name)
VALUES ('Men'), ('Women'), ('Kids');

-- Create Cart Table (to store items added to the cart)
CREATE TABLE Cart (
    cart_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    quantity INT DEFAULT 1,
    added_on TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
);

-- Create Orders Table (to store orders placed by users)
CREATE TABLE Orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_amount DECIMAL(10, 2) NOT NULL,
    shipping_address TEXT,
    order_status VARCHAR(50) DEFAULT 'Pending',
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Create Order_Items Table (to store items within each order)
CREATE TABLE Order_Items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    price DECIMAL(10, 2),
    FOREIGN KEY (order_id) REFERENCES Orders(order_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
);

-- Create Reviews Table (for users to leave reviews for products)
CREATE TABLE Reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    user_id INT,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    review_text TEXT,
    review_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES Products(product_id),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
);

-- Example query to add a new user (Signup)
-- INSERT INTO Users (username, email, password_hash, first_name, last_name, phone_number, address)
-- VALUES ('john_doe', 'john@example.com', 'hashed_password', 'John', 'Doe', '1234567890', '123 Main St');

-- Example query to add a new product
INSERT INTO Products (name, description, price, stock_quantity, image_url, category_id)
VALUES ('Classic Sneakers', 'Comfortable sneakers for everyday use', 49.99, 100, 'https://link_to_image.com', 1);

-- Example query to add an item to cart
INSERT INTO Cart (user_id, product_id, quantity)
VALUES (1, 1, 2);  -- user_id 1 adds 2 items of product_id 1 to the cart

-- Example query to place an order
INSERT INTO Orders (user_id, total_amount, shipping_address)
VALUES (1, 99.98, '123 Main St, Springfield, IL');

-- Example query to add items to an order
INSERT INTO Order_Items (order_id, product_id, quantity, price)
VALUES (1, 1, 2, 49.99);  -- Order 1, 2 units of product_id 1 at $49.99 each

-- mysql -h 127.0.0.0 -P 3306 -u root -p