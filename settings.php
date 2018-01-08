<?php require 'includes/common.php'; ?>
<?php if(!isset($_SESSION['email'])){
            header("location:index.php");
        }?> 
<html>
    <head>
        <title>Lifestyle Store</title>
        <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src ="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="cssstyle.css" type="text/css">
    </head>
    <body style="background:rgba(0,0,0,0.8);color:wheat;">
          <?php include 'includes/header.php';?>
    <div>
        <br><br><br><br>
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
                <center> 
                    <h1>CHANGE PASSWORD</h1>
                    <form method='post' action='settings_script.php'>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder=" Old Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder=" New Password" name="newpassword" >
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm New Password" name="confirmpassword">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Change</button>
                    </form> 
                </center>
            </div>
        </div>
        <br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br>
    </div>
        <?php include "includes/footer.php";?>
    </body>
</html>