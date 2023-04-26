INSERT INTO Customers (customer_id, first_name, last_name, email, phone_number, addr)
VALUES 
(1, 'John', 'Doe', 'johndoe@gmail.com', '123-456-7890', '123 Main St'),
(2, 'Jane', 'Smith', 'janesmith@gmail.com', '555-555-5555', '456 Elm St'),
(3, 'Bob', 'Johnson', 'bobjohnson@gmail.com', '888-888-8888', '789 Oak Ave'),
(4, 'Samantha', 'Lee', 'samanthalee@gmail.com', '555-123-4567', '321 Maple St'),
(5, 'Michael', 'Nguyen', 'michaelnguyen@gmail.com', '555-987-6543', '654 Pine St');

INSERT INTO Orders (order_id, customer_id, order_date, total_price, payment_method)
VALUES 
(1, 1, '2023-04-22', 100.00, 'Credit Card'),
(2, 2, '2023-04-23', 200.00, 'PayPal'),
(3, 1, '2023-04-24', 50.00, 'Debit Card'),
(4, 4, '2023-04-25', 75.00, 'Cash'),
(5, 3, '2023-04-25', 125.00, 'Credit Card');

INSERT INTO Products (product_id, product_name, price, descr)
VALUES 
(1, 'Laptop', 800.00, '13-inch MacBook Pro'),
(2, 'Headphones', 50.00, 'Bose QuietComfort 35 II'),
(3, 'Smartphone', 1000.00, 'Samsung Galaxy S21 Ultra'),
(4, 'Keyboard', 50.00, 'Logitech K380'),
(5, 'Mouse', 25.00, 'Logitech M185');

INSERT INTO Order_Items (order_item_id, order_id, product_id, quantity)
VALUES 
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 2, 3, 1),
(4, 3, 4, 1),
(5, 4, 4,1)
