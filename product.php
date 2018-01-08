<?php require 'includes/common.php'; ?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src ="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssstyle.css" type="text/css">
    </head>
    <body style="background: rgba(0,0,0,0.9);color:wheat;">
       <?php include 'includes/header.php';?>
        <?php include 'includes/check-if-added.php';?>
        <div>
    <div id="cam-image">
        <div class="container">
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Lifestyle Store!</h1>
                    <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
                </div>
            </div>
            <center>
            <div class="container">
                <div class="row text-center">
                     <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/camera1.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">SONY DSLR</h2>  
                            <p style="color:wheat">PRICE: Rs. 30,000</p>
                 <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(1)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=1" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                       
                        </div>
                        </div>   
                    </div>  
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/camera2.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">SONY DSLR300</h2>  
                            <p style="color:wheat">PRICE: Rs. 45,000</p>
                          <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(2)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=2" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/camera3.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">CANNON  SX500</h2>  
                            <p style="color:wheat">PRICE: Rs. 35,000</p>
                           <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(3)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=3" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/camera4.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">CANNON Di.SLR</h2>  
                            <p style="color:wheat">PRICE: Rs. 48,070</p>
                           <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(4)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=4" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    
                  <div class="">
                <a href="product.php#cameras" >
                    <H1>Cameras <h6> MORE PRODUCTS >></h6></h1>
                </div>
                </a>
            </div>
          </div>
        </div>
    </div>
    <div id="wat-image">
        <div class="container">
            <center>
            <div class="container">
                <div class="row text-center">
                     <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/watch1.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">FOSSIL</h2>  
                            <p style="color:wheat">PRICE: Rs. 30,000</p>
                            <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(5)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=5" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>  
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/watch2.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">ROLEX</h2>  
                            <p style="color:wheat">PRICE: Rs. 45,000</p>
                           <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(6)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=6" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/watch3.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">OMEGA</h2>  
                            <p style="color:wheat">PRICE: Rs. 30,000</p>
                          <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(7)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=7" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/watch4.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">PULSAR</h2>  
                            <p style="color:wheat">PRICE: Rs. 4,070</p>
                          <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(8)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=8" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    
                  <div class="">
                <a href="product.php#watches" >
                    <H1>WATCHES <h6> MORE PRODUCTS >></h6></h1>
                </div>
                </a>
            </div>
          </div>
        </div>
    </div>
    <div id="shi-image">
        <div class="container">
            <center>
            <div class="container">
                <div class="row text-center">
                     <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/shirt1.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">M J K</h2>  
                            <p style="color:wheat">PRICE: Rs. 3,000</p>
                           <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(9)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=9" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>  
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/shirt2.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">PARK AVENUE</h2>  
                            <p style="color:wheat">PRICE: Rs. 4,000</p>
                          <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(10)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=10" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/shirt3.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">FOREVER21</h2>  
                            <p style="color:wheat">PRICE: Rs. 3,500</p>
                          <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(11)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=11" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    <div class="col-md-3 col-sm-6 ">
                        <div class= "thumbnail">
                        <img src="images/shirt4.jpg" alt="Responsive image"> 
                        <div class="caption cd">
                            <h2 style="color:wheat">BENATTON</h2>  
                            <p style="color:wheat">PRICE: Rs. 4,070</p>
                           <?php
                        if(!isset($_SESSION['email'])){?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php } else{ 
                            if(check_if_added_to_cart(12)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled> Added To cart</a>';}
                            else{
                                ?>
                            <a href="cart-add.php?id=1" name=["add" value="add" class="btn btn-block btn-primary">
                                Add to cart
                            </a><?php
                                
                                
                            }
                            }?>
                        </div>
                        </div>   
                    </div>
                    
                  <div class="">
                <a href="product.php#shirts" >
                    <h1>SHIRTS</h1><h6> MORE PRODUCTS </h6>
                </div>
                </a>
            </div>
          </div>
        </div>
    </div>
        
 
              
                </div>
            
        
       
       <?php include "includes/footer.php";?>
    </body>
</html>