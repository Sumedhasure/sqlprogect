<?php

include_once 'conn.php';
$id=$_POST['id'];
$cid=$_POST['cid'];
$date=$_POST['date'];
$price=$_POST['price'];
$pay=$_POST['pay'];


$html="";
$html .= $cid ? "customer_id = $cid, " : "";
$html .= $date ? "order_date = '$date', " : "";
$html.=$price?"total_price=$price, ":"";
$html.=$pay?"payment_method='$pay'":"";
$sql = "UPDATE orders SET $html WHERE order_id = $id;"
$result=mysqli_query($conn,$sql);

header("Location:../index.php?signup=success");
?>