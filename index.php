<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Mycart.in</title>
  <!-- <link rel="stylesheet" href="css/global.css" type="text/css"> -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro"> -->


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <style>
    .header {
      height: 54px;

    }

    #myCarousel img {
      width: 100%;
      height: 500px;

    }

    .cart-btn {
      color: red;
      text-decoration: none;

    }

    .cart-btn:hover {
      text-decoration: none;
    }
    .info-box{
      padding: 40px;
      display: flex;
      flex-direction: row;
      /* background-color: rgb(45, 227, 240); */
      background: linear-gradient(rgb(12, 240, 221),rgb(68, 98, 233));
      border-top-left-radius: 50px;
      border-bottom-right-radius: 50px;
      margin: 10px 10px 10px 10px;
 
    }
    .info-box img{
      height: 300px;
      width: 40%;
      /* flex-direction: column; */

    }
    .info-box p{
      text-align: center;
      margin-top: 70px;
      /* color: aqua; */
      font-size: medium;
      padding: 30px;

    }
    #template2{
       flex-direction: row-reverse;
    }
  </style>

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
            <li><a href="#" data-toggle="modal" data-target="#MyAccount"><span class="glyphicon glyphicon-user"></span>
                Your Account</a></li>
                <li><a href="#" data-toggle="modal" data-target="#cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="cart-list"></span></a></li>

          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- Modal -->

  <div id="mylogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Log In</h4>
        </div>
        <div class="modal-body">
          <form action="login.php" method="get">
            <div class="form-group">
              <label for="email" >Email</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" class="form-control" name="password">

            </div>
        </div>
        <div class="modal-footer">
          <button type="sumbit" class="btn btn-success">Login</button>
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>

    </div>
  </div>
 
  <!-- Resitration model-->
  <div id="resistation" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Resistation</h4>
        </div>
        <div class="modal-body">
          <form action="resistor.php" method="POST">
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id ="email" name ="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="mobile no">Mobile no</label>
              <input type="text" id="mobile" name="mobile" class="form-control">
            </div>
            <div class="form-group">
              <label for="Password">Password</label>
              <input type="password" id ="password" name="password" class="form-control">

            </div>
            <div class="form-group">
              <label for="CPassword"> Confirm Password</label>
              <input type="password" class="form-control">

            </div>


        </div>
        <div class="modal-footer">
          <button class="btn btn-primary">Resistor</button>
          </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>

    </div>
  </div>
  <div id="MyAccount" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Your Account</h4>

        </div>
        <div class="modal-body">
          <button class="btn btn-success" data-toggle="modal" data-target="#mylogin" data-dismiss="modal">LogIn</button>
          <button class="btn btn-primary" data-toggle="modal" data-target="#resistation" data-dismiss="modal">Create
            Account</button>
        </div>
        <div class="list-group">
          <a href="#" class="list-group-item">Orders</a>
          <a href="#" class="list-group-item">Payment Method</a>
          <a href="#" class="list-group-item">Wishlist</a>
          <a href="#" class="list-group-item">Rewards</a>
        </div>
        <div class="modal-footer">
          <span></span>
          <span></span>
        </div>

      </div>
    </div>
  </div>



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="pics/slide1.jpg" alt="Chania">

        <div class="carousel-caption">
          <h3>Top wear collection</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="pics/slide2.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Jeans Denim</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>

      <div class="item">
        <img src="pics/slide3.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>Winter Wear</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
  <!--category-->
  <div class="container-fluid bg-3 text-center">
    <h3 class="margin"> Hope you Will shop something From us</h3>
  </div>
  <div class="info-box" id="template1">
    <img src="pics/categories/bruno.jpg" alt="" class="img-rounded">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere sunt asperiores natus alias cupiditate! Ex ad
      fuga veritatis possimus, temporibus voluptatem!</p>
  </div>
  <div class="info-box" id="template2">
    <img src="pics/categories/tamanna.jpg" alt="" class="img-rounded">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere sunt asperiores natus alias cupiditate! Ex ad
      fuga veritatis possimus, temporibus voluptatem!</p>
  </div>
  <div class="info-box" id="template3">
    <img src="pics/slide1.jpg" alt="" class="img-rounded">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere sunt asperiores natus alias cupiditate! Ex ad
      fuga veritatis possimus, temporibus voluptatem!</p>
  </div>
<!-- models for cart -->
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
  <!--footer -->
  <footer class="page-footer font-small footer-bottom" style="height:40px; ">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="margin-top: 15px;">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Amma.in</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

</body>

</html>