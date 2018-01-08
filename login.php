 <?php require 'includes/common.php'; ?>
<?php if(isset($_SESSION['emial'])){
            header("location:products.php");
        }?> 

<html>
    <head>
        <title>LifeStyle Store-LOGIN</title>
        <link href="cssstyle.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src ="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body style="background: rgb(0,0,0);">
        <center
         <?php include 'includes/header.php';?>
   
            <div class="panel panel-primary ">
                <div class="panel-heading">LOG-IN</div>
                <div class="panel-body" style="background-color: rgb(0,0,0);color:wheat"><p class="text-warning"><h3>Log-In to make a purchase</h3></p>
                    <div class="row">
                        <div class="col-xs-12">
                            <form style="background-color: rgb(0,0,0);color:wheat" method="post" action="login_submit.php">
                                <label for="m">EMAIL ADDRESS</label>
                                
                             <div class="form-group">
                                 <input type="email" placeholder="EMAIL" class="form-control" id="email" name="email"></div>
                    <br>
                    <div class="form-group">
                        <label for="p">PASSWORD</label><input type="password" placeholder="PASSWORD" class="form-control" id="password" name="password">
                    </div> 
                    
                    <div class="form-group"><input type="submit" class="btn btn-primary" ></div>
                            </form>
                        </div>
                        <br><br><br><br><br><br><br>
                    </div></div>
                <div class="panel-footer" style="background-color: rgb(0,0,0);color:wheat"><a href="signup.php">Don't have an account? Register</a></div>
           
            
        </div>
        <?php include "includes/footer.php";?>
        
    </body>
</html>
