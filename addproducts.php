<?php

include_once 'conn.php';
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$descr=$_POST['descr'];
$sql = "INSERT INTO products (product_id, product_name, price, descr)\n". "VALUES ($id, '$name', $price, '$descr');";
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>