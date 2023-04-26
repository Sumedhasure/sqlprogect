<?php

include_once 'conn.php';
$id=$_POST['id'];
$oid=$_POST['oid'];
$pid=$_POST['pid'];
$quan=$_POST['quan'];

$html="";


$html .= $oid ? "order_id = $oid, " : "";
$html .= $pid ? "product_id = $pid, " : "";
$html.=$quan?"quantity=$quan":"";
$sql = "UPDATE Order_Items SET $html WHERE order_item_id = $id;"
$result=mysqli_query($conn,$sql);
header("Location:../index.php?signup=success");
?>