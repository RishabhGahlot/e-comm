<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5(mysqli_real_escape_string($con,$_POST['password']));
$quer = "select id,email from users where Password_user = '$password' and email = '$email' ";
$quer_r = mysqli_query($con, $quer);
$n=mysqli_num_rows($quer_r);
if($n===0){
    header('location:login.php');
}
else{
   $use = mysqli_fetch_array($quer_r);
   $_SESSION['email'] =$use['email'];
   $_SESSION['id']=$use['id'];
   header('location:product.php');
}?>
