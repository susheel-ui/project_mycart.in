<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src='https://libs.na.bambora.com/customcheckout/1/customcheckout.js'></script>

<script>
    var customCheckout = customcheckout();
    let cart = localStorage.getItem("cart");

</script>

</head>
<?php
include('config.php');

?>

   

 <script>
 

</script>

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
</div>
<div class="container " style="margin-top:80px;" >
    
    <div class="row mt-5">
    
        <div class="col-md-6">
        <h1 class="text-center">Your selected products</h1>
            <div class="card">
                <div class="card-body">
                    <div class="cart-body">

                    </div>
                </div>
            </div>

        </div>
    
    <div class="col-md-6">
        <!-- your checkout details are come here -->
        <div class="card">
                <div class="card-body">
                   <h1>
                       Address
                   </h1>
                   <form action="payment.php" method="post" class="form">
                   <div class="form-group">
                       
                                <label for="username" class="text-info">Name:</label><br>
                                <!-- <span class="glyphicon glyphicon-user"></span> -->
                               <input type="text" name="name" id="Addressname"class="form-control"><br>
                            </div> 
                            <div class="form-group">
                                <label for="username" class="text-info">Address:</label><br>
                                <!-- <span class="glyphicon glyphicon-user"></span> -->
                                <input type="text" name="Add1" id="Address1" class="form-control"><br>
                            </div> 
                            <div class="form-group">
                                <label for="username" class="text-info">mobileNo:</label><br>
                                <!-- <span class="glyphicon glyphicon-user"></span> -->
                                <input type="mobile" name="mobile" id="mobileNo" class="form-control"><br>
                            </div> 
                        <div>
                            <button type="submit" class="btn btn-primary" onclick="savedata()">Payment</button>
                            <button  type="button" class="btn btn-default" onclick="refertoproduct();"> countiue shoping</button>    
                        </div>
                   </form>
                </div>
            </div>
    </div>
    </div>

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

</html>