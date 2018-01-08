<?php
require 'includes/common.php';
$user_id = $_SESSION['id'];
$product_id = $_GET['id'];
$iquery= "insert into user_items(user_id,item_id,status) values($user_id,$product_id,'Added To Cart') ";
$iquery_r= mysqli_query($con, $iquery);
header('location:product.php');?>