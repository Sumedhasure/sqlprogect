<?php
include_once 'conn.php';
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$number=$_POST['number'];
$addr=$_POST['address'];
$sql = "INSERT INTO Customers (customer_id, first_name, last_name, email, phone_number, addr)\n". "VALUES ($id, '$fname', '$lname', '$email', '$number', '$addr');";
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>