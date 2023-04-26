<?php
$sql = "SELECT c.customer_id, c.first_name, c.last_name, COUNT(o.order_id) AS num_orders\n"

. "FROM customers c\n"

. "INNER JOIN orders o\n"

. "ON c.customer_id = o.customer_id\n"

. "GROUP BY c.customer_id\n"

. "HAVING COUNT(o.order_id) > 0;";
?>