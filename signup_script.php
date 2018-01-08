<?php

require 'includes/common.php';
$email = $_POST['email'];
$tel= intval($_POST['tele']);
$name=$_POST['fname'];
$password = $_POST['pass'];
if(strlen($password) <6){ echo "WEAK PASSWORD";
    header("location:signup.php");}
$query = "select * from users where email='$email'";
$query_r = mysqli_query($con, $query);
if((mysqli_num_rows($query_r))!=0){
    
    header("location:signup.php");
    echo "email already registered";
}
else{$password = md5($_POST['pass']);
    $inq="insert into users (name,email,Password_user,contact) values ('$name','$email','$password','$tel')";
$a= mysqli_query($con, $inq);
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
    header("location:product.php");
}
?>

