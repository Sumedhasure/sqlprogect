INSERT INTO Customers (customer_id, first_name, last_name, email, phone_number, addr)
VALUES (6, 'Emily', 'Davis', 'emilydavis@gmail.com', '555-555-5555', '789 Walnut St');

INSERT INTO Orders (order_id, customer_id, order_date, total_price, payment_method)
VALUES (6, 1, '2023-04-26', 75.00, 'Credit Card');


INSERT INTO Products (product_id, product_name, price, descr)
VALUES (6, 'Tablet', 500.00, 'iPad Air');

INSERT INTO Order_Items (order_item_id, order_id, product_id, quantity)
VALUES (6, 2, 3, 2);

SELECT * FROM Customers;

SELECT * FROM Customers WHERE customer_id = 1;
SELECT * FROM Orders;

SELECT * FROM Orders WHERE customer_id = 1;
SELECT * FROM Products;

SELECT * FROM Products WHERE product_id = 1;

SELECT * FROM Order_Items;
UPDATE Products SET price = 600.00 WHERE product_id = 1;
UPDATE Order_Items SET quantity = 3 WHERE order_item_id = 1;

DELETE FROM Order_Items WHERE order_item_id = 6;
