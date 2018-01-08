<?php

require 'includes/common.php';
$itemid=$_GET['id'];
$userid=$_SESSION['id'];
$q="delete from user_items where user_id='$userid' and item_id='$itemid'";
$qr=mysqli_query($con,$q);
header("location:cart.php"); ?>