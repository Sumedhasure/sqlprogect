CREATE TABLE Customers (
    customer_id INT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE,
    phone_number VARCHAR(20),
    addr VARCHAR(100)
);
CREATE TABLE Orders (
    order_id INT PRIMARY KEY,
    customer_id INT,
    order_date DATE,
    total_price DECIMAL(10,2),
    payment_method VARCHAR(50),
    FOREIGN KEY (customer_id) REFERENCES Customers(customer_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
CREATE TABLE Order_Items (
    order_item_id INT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT,
    FOREIGN KEY (order_id) REFERENCES Orders(order_id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES Products(product_id) ON UPDATE CASCADE ON DELETE RESTRICT
);
CREATE TABLE Products (
    product_id INT PRIMARY KEY,
    product_name VARCHAR(50),
    price DECIMAL(10,2),
    descr VARCHAR(100)
);
