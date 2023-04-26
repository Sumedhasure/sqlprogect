<?php

include_once 'conn.php';
$id=$_POST['id'];
$cid=$_POST['cid'];
$date=$_POST['date'];
$price=$_POST['price'];
$pay=$_POST['pay'];
$sql = "INSERT INTO orders (order_id, customer_id, order_date, total_price, payment_method)\n". "VALUES ($id, $cid, '$date', $price, '$pay');";
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>