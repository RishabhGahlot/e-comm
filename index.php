  <?php require 'includes/common.php'; ?>
<?php if(isset($_SESSION['email'])){
            header("location:product.php");
        }?> 
<html>
    <head>
        <title>LifeStyle Store</title>
<link href="cssstyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src ="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
      
         <?php include 'includes/header.php';?>
        
        <div class="banner_image">
            <div class="container">
                <div class="banner_content center-block">
                    <h3>WE SELL LIFESTYLE</h3>Shop Premium Brand At Attractive Price<br><br>
                    <a href='login.php' class ="btn btn-danger btn-lg active">SHOP NOW</a>
                </div>
            </div>
        </div>
        <?php include "includes/footer.php";?>
    </body>
</html>
