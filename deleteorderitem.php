<?php

include_once 'conn.php';

$sql = "DELETE FROM Order_Items WHERE order_item_id = 1";
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>