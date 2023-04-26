<?php

include_once 'conn.php';
$id=$_POST['id'];
$oid=$_POST['oid'];
$pid=$_POST['pid'];
$quan=$_POST['quan'];
$sql = "INSERT INTO order_items (order_item_id, order_id, product_id, quantity)\n". "VALUES ($id, $oid, $pid, $quan);";
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>