<?php
 require 'includes/common.php'; 
 if(!isset($_SESSION['email'])){
            header("location:index.php");
        }
  $old=$_POST['password'];
   $new=$_POST['newpassword'];
    $newc=$_POST['confirmpassword'];
if(strlen($new)=== strlen($newc)){
    $qr="select * from user where Password_user='$old'";
    $qrr=mysqli_query($con,$qr);
    if(mysqli_num_rows($qrr)>0){
        header('location:settings.php');
        echo 'wrong password';
    }
    else{$set= md5($new);
    $i=$_SESSION[id];
        $qr="update users set Password_user='$set' where id='$i'";
    $qrr=mysqli_query($con,$qr);
    header('location:product.php');
        
    }
}
else{header('location:settings.php');}