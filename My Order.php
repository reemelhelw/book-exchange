<?php 
include 'regserver.php';
require('config.php');

 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order details,delivery-story keeper</title>
    <meta name="description" content="This is for order details such delivery information">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    
</head>
<body class="bookClubBodyColor">


  <header>
      <nav class="shadow-lg">
         <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
         </div>
         <div class="logo"><a href="" class="text-decoration-none"><img src="images/logo.png" width="120rem"></a></div>
         <div class="menu">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="My Store.html">STORE</a></li>
               <li><a href="#">BOOK CLUBS</a></li>
               <li><a href="About.html">ABOUT</a></li>
               <li><a href="Contact Us.html">CONTACT US</a></li>
               <li><a class="btn btn-outline-success" href="My Account.html">My Account</a></li>
               <li><a class="btn btn-success" href="Registration.html">Register</a></li>
            </ul>
         </div>
      </nav>
     
      
   </header>






        <div class="text-center bg-image-mybooks-cover"></div>

    <section class="signUpSection">
        <div class="row container mx-auto">
            <div class="col-6 ">
<br><br><br><br>
               <h2>Hello John,</h2>
               <h6> Logged in as: someone@gmail.com</h6><br>

                <h4>My Account</h4>
                <a href="#" class="text-danger">View & Manage orders and returns</a>
                <h4>My Orders</h4>
                <a href="#" class="text-danger" >View & Manage orders and returns</a>
                <h4>Address Book</h4>
               <a href="#" class="text-danger" >View & Manage Addresses</a>
                <h4>My Profile</h4>
                <a href="#"  class="text-danger" >Change your profile details & password</a>
                <h4>Help & Support</h4>
                <a href="#" class="text-danger" >Contact Us for help and support</a>

<br><br><br><br>

            </div>


             <div class="col-6 "><br><br><br><br>

<!-- 
               <a href="#">Orders placed <span class="badge">2</span></a><br>
                <a href="#">Items in Cart  <span class="badge">10</span></a><br>
                <a href="#">Wishlist <span class="badge">5</span></a> -->

                <button type="button" class="btn btn-success" alt="story keeper delivery info">Orders placed <span class="badge" >7</span></button>
                <button type="button" class="btn btn-success">Items in Cart <span class="badge">7</span></button>
                <button type="button" class="btn btn-success">Wishlist <span class="badge">7</span></button>
            
<br><br>
            
<pre>
<b>Order #fur10001</b>
paid
Products #03
22 August, 2020 | 12:05 PM
<b>Status </b>: Delivered
<b>Rating </b>: <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
</pre>


<pre>
<b>Order #fur10002</b>
paid
Products #04
19 August, 2020 | 12:00 PM
<b>Status </b>: Delivered
<b>Rating </b>: <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked "></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
</pre>




<br><br><br><br>

            </div>
          

          
        </div>
        
    </section>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-between p-4" style="background-color: #5E3023">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="socialMedia">
                <a href="" class="text-white me-4">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="bi bi-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="footerLinks">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold">Story Keeper</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            Story Keeper is the act of releasing your books for another book lover to find. We hope you to join us!
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">our services</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white ">Our Store</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">About Story Keeper</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p>
                            <a href="#!" class="text-white">My Account</a>
                        </p>
                        <p>
                            <a href="#!" class="text-white">Register</a>
                        </p>
                        
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto"
                            style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="bi bi-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="bi bi-printer mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a href="#!" class="text-white text-decoration-none">Story Keeper</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>