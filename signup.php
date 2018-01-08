  <?php require 'includes/common.php'; ?>
<?php if(isset($_SESSION['emial'])){
            header("location:products.php");
        }?> 
<html>
    <head>
        <title>Lifestyle Store-SIGNUP</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src ="bootstrap/js/bootstrap.min.js"></script>
        <style>.jumbotron {
                padding-top: 0px; 
                padding-bottom: 0px; 
                margin-bottom: 0px; 
                color: inherit; 
                background-color: #171919;opacity: 0.8;
            }</style>
    </head>
    <body style="background-color: rgb(0,0,0);color:wheat">
    <center
         <?php include 'includes/header.php';?>
        <div class="row jumbotron">
            <div class="col-xs-4">
                <div class="form-group" style="padding-bottom: 0px;"><h5>FIRST NAME</h5></div><br>
                <div class="form-group"><h5>LAST NAME</h5></div><br>
                <div class="form-group"><h5>E-MAIL</h5></div>
                <br>
                <div class="form-group"><h5>PASSWORD</h5></div>
                <br>
                <div class="form-group"><h5>MOBILE-NO.</h5></div>
                <br><br><br>
                <div class="form-group"><h5>GENDER</h5></div>
            </div>
            <div class="col-xs-8 col-md-4">
                <form method="post" action="signup_script.">

                    <div class="form-group"><input type="text" placeholder="FIRST NAME" class="form-control" name="fname"></div>
                    <br>
                    <div class="form-group"><input type="text" placeholder="LAST NAME" class="form-control" name="lname"></div> <br>
                    <div class="form-group"><input type="email" placeholder="E-MAIL" class="form-control" name="email"></div> <br>


                    <div class="form-group"><input type="password" placeholder="PASSWORD" class="form-control" name="pass" pattern=".{6,}"></div> <br>
                    <div class="form-group"><input type="tel" placeholder="MOBILE-NO." class="form-control" name="tele" pattern=".{10,}"></div> <br>
                    <div class="radio form-group">MALE <label><input type="radio" name="gen" value="male"></label>FEMALE <label><input type="radio" name="gen" value="female"></label>
                        OTHERS <label><input type="radio" name="gen" value="others"></label></div>
                    <div class="form-group"><input type="submit" class="btn btn-block btn-primary" name="sub"></div> <br>
                </form> 

            </div>
            <div class="col-xs-4"><br><br>
                <br><br>
                <br><br>
                 <img src="images/ladies multiple shopping.png" class="img-thumbnail img-responsive hidden-xs">
                 

            </div>

        </div>
         <?php include "includes/footer.php";?>

    

</body>
</html>
