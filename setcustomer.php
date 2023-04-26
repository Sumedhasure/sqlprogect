<?php
include_once 'conn.php';
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$number=$_POST['number'];
$addr=$_POST['address'];
$html="";
$html .= $email ? "email = '$email', " : "";
$html .= $fname ? "first_name = '$fname', " : "";
$html .= $lname ? "last_name = '$lname', " : "";
$html.=$number?"phone_number='$number', ":"";
$html .= $addr ? "addr = '$addr' " : "";
$html = rtrim($html, ', ');
$sql = "UPDATE customers SET $html WHERE customer_id = $id;";
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>