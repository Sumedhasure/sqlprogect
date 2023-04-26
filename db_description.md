Table 1: Customers
Fields:

customer_id (primary key)
first_name
last_name
email
phone_number
address
Functional Dependencies:

customer_id -> first_name, last_name, email, phone_number, address
Foreign Key Policies:

ON DELETE CASCADE: If a customer is deleted, all their orders will also be deleted.
Table 2: Orders
Fields:

order_id (primary key)
customer_id (foreign key)
order_date
total_price
payment_method
Functional Dependencies:

order_id -> customer_id, order_date, total_price, payment_method
customer_id -> order_id
Foreign Key Policies:

ON DELETE RESTRICT: An order cannot be deleted if there are still items in the order.
ON UPDATE CASCADE: If a customer ID is updated, all orders associated with that customer will also be updated.
Table 3: Products
Fields:

product_id (primary key)
product_name
price
description
Functional Dependencies:

product_id -> product_name, price, description
Foreign Key Policies:

ON DELETE RESTRICT: A product cannot be deleted if there are still orders containing that product.
ON UPDATE CASCADE: If a product name is updated, all orders containing that product will also be updated.
Table 4: Order_Items
Fields:

order_item_id (primary key)
order_id (foreign key)
product_id (foreign key)
quantity
Functional Dependencies:

order_item_id -> order_id, product_id, quantity
order_id, product_id -> order_item_id
Foreign Key Policies:

ON DELETE CASCADE: If an order is deleted, all the order items associated with that order will also be deleted.
ON UPDATE CASCADE: If an order ID or product ID is updated, all order items associated with that order will also be updated.
