<?php require 'includes/common.php'; ?>
<?php if(!isset($_SESSION['email'])){
            header("location:index.php");
        }?> 
<html>
    <head>
        <title>Lifestyle Store</title>
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src ="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssstyle.css" type="text/css">
    </head>
    <body style="background: rgb(0,0,0);color:wheat;">
       <?php include 'includes/header.php';?>
        <?php
        $user_id = $_SESSION['id'];
        $qr="select item_id from user_items ui join users u on u.id=ui.user_id where u.id='$user_id' ";
        $qrr=mysqli_query($con,$qr);
        $total=0;
        ?> 
    <div>
        <br><br><br><br>
    <div class="container">
      <div class="table-responsive">
       <div class="column_style">
           <center>
                <h3> ITEM IN THE CART</h3>
           </center>
       </div>
        <table class="table table-striped table-hover" >
            <tbody>
                <tr><th>ITEM NAME</th> <th>PRICE </th><th> </th></tr>
               <?php 
               $ck=mysqli_num_rows($qrr);
               if($ck===0) {?>
               <tr><td>ADD ITEMS TO CART FIRST</td></tr> <?php }
               else { while($rw=mysqli_fetch_array($qrr)){
                   $z=$rw['item_id'];
                   $a="select name,price from items where id='$z'";
                   $ar=mysqli_query($con,$a);
                   $fir=mysqli_fetch_array($ar);
                   ?>
               
               <tr><td> </td> <td><?php echo $fir['name'];?> </td> <td> <?php echo $fir['price'];?></td><td>
                   <?php   $z= $rw['item_id']?>
                       <a href="cart-remove.php?id={'$z'}" class='remove_item_link'> Remove</a></td> </tr>
               <?php $total = $total + $fir['price'];}?>
                   
                   <tr><td> </td> <td>TOTAL </td> <td> Rs <?php echo $total;?>/- </td> <td><a href="success.php">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Confirm Order</button>
               </a> </td></tr><?php }?>
               
                
            </tbody>
        </table>
        </div>
        </div>   
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>><?php include "includes/footer.php";?></body>