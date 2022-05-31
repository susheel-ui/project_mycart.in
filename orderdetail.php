<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

</head>
<?php
include('config.php');

?>
<body>
    <div class="header">
        <nav class="navbar  navbar-fixed-top" style="background-color: white;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar" style="background-color: black;"></span>
                        <span class="icon-bar" style="background-color: black;"></span>
                        <span class="icon-bar" style="background-color: black;"></span>
                    </button>
                    <a href="#" class="navbar-brand">Mycart.in</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="Products.php">Products</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">Stores</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="cart-list"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
   
<div class="container " style="margin-top:80px; ">
        <?php
        $sql="SELECT * FROM `products`;";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        ?>
 
   
 <div class ="" style="margin:200px,auto ;color:red;">
                    <h1>tracsaction succesfull</h1>
                    <button class="btn btn-primary" onclick="backtohome()"> Home</button>
            </div>

</div>  

<div >

</div>
<div class="modal" id="cart" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title "> Your Cart List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="cart-body">

       </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary checkout-btn" onclick="goTocheckout()">Checkout</button>
        
      </div>
    </div>
  </div>
</div>
<!-- </div> -->

</body>
<script>
   function  backtohome(){
       window.location="index.php";
   }
</script>

</html>
