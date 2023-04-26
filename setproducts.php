<?php

include_once 'conn.php';
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$descr=$_POST['descr'];

$html="";


$html .= $name ? "product_name = '$name', " : "";
$html .= $price ? "price = $price, " : "";
$html.=$descr?"descr='$descr'":"";
$sql = "UPDATE Products SET $html WHERE product_id = $id;"
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>