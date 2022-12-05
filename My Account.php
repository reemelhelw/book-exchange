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

$userid = $_SESSION['id'];
$query = "SELECT * FROM user_posts WHERE user_id=$userid";
$results = mysqli_query($link, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>  <!-- meta -->
    <title>Order details|My-account|Storykeeper.</title>
    <meta name="description" content="Storykeeper is an online website where you can view profile and make orders such as book exchange with other people for free and see the order details and your gallery ">
    <meta name="keywords" content="Storykeeper Book exchange profile, view account in storykeeper website, Accept exchange book request, Reject exchange book request, Best book exchange website , orders details, track orders, delivery info">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9" />
    <link rel="stylesheet" href="css/jaidastyle.css" />
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
         <div class="logo"><a href="" class="text-decoration-none"><img src="images/logo.png" width="120rem" alt="bookexchange"></a></div>
         <div class="menu">
            <ul>
            <li><a href="index.php?id=<?php echo $_SESSION['id'] ?>">HOME</a></li>
               <li><a href="My Store.php?id=<?php echo $_SESSION['id'] ?>">STORE</a></li>
               <li><a href="bookclub.php?id=<?php echo $_SESSION['id'] ?>">BOOK CLUBS</a></li>
               <li><a href="about.php?id=<?php echo $_SESSION['id'] ?>">ABOUT US</a></li>
               <li><a href="contactus.php?id=<?php echo $_SESSION['id'] ?>">CONTACT US</a></li>
               <li><a class="btn btn-outline-success" href="My Account.php?id=<?php echo $_SESSION['id'] ?>">MY ACCOUNT</a></li>
               <li><a class="btn btn-success" href="My Account.php?logout='1'">LOGOUT</a></li>
            </ul>
         </div>
      </nav>
     
      
   </header>






        <div class="text-center bg-image-mybooks-cover"></div>

  <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 800px; background-image: url(images/8.webp); background-size: cover; background-position: center top;">
      <!-- Mask -->

      <!-- Header container -->
      <div class="container d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $_SESSION['username'];?></h1><br/>
            <p class="text-white mt-0 mb-5">The Storykeeper Book exchange profile. Storykeeper provides you to edit profile to see the books , see and track your orders  & Accept or reject exchange book request.This is the Best online website to exchange book in 2022, there is Storykeeper exchange policy you must follow. </p>
            <!--<a href="#!" class="btn btn-info">Edit profile</a>-->
          </div>
            </div>
            </div>
    </div>
    <!-- Page content -->
          

    <section class="signUpSection">
        <div class="row container mx-auto">
            <div class="col-6 ">
<br><br><br><br>
               <h2>Hello <?php echo $_SESSION['username'];?>,</h2><br/>

                <h4>My Account</h4>
                <a href="#" class="text-danger">View & Manage orders and returns</a>
                <h4>My Orders</h4>
                <a href="#" class="text-danger" >View & Manage orders and returns</a>

                <h4>Requests</h4> <!-- href extra here -->
                <a href="approval-button.php?id=<?php echo $_SESSION['id'] ?>">View Incoming Requests</a><br/>
                <a href="view-approved.php?id=<?php echo $_SESSION['id'] ?>">View Outgoing Requests</a>
                <br/> <h4>Help & Support</h4> <!-- href extra here -->
                <a href="contactus.php" >Contact Us for help and support</a>
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
<h3>Order details #fur10001</h3>
paid
Products #03
22 August, 2020 | 12:05 PM
<b>Status </b>: Delivered
<b>Rating </b>: <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
</pre>


<pre>
<h3>Order details #fur10002</h3>
paid
Products #04
19 August, 2020 | 12:00 PM
<b>Status </b>: Delivered
<b>Rating </b>: <span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked "></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>
</pre>




<br><br><br><br>

            </div><br/>
          
        </div>
    </section>
        
      <div id="bookClubCards" class="container">
          <h1 class="header"><b>My Books </b></h1>
         
            <div class="">
            <div class="row">
            <?php if (mysqli_num_rows($results) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($results)) {
            $userpost = $row['image'];?>
             <div class="bookClubCard col-md-4 mt-5 mb-4">
         
         <div class="card profile-card-5 shadow-lg bg-white rounded pt-5">
       
         <div class="card-img">
               <img class="card-img-top" src="<?php	echo $row['image'];?>" alt="Card image cap" alt="exchange">
                  <!--<img class="card-img-top"  src="images/action1.jpg" alt="Card image cap" alt="exchange">-->
               </div><br>
            <div class="card-body pt-0 ">
               <h5 class="card-title"> <?php echo $row['title']?></h5>
              
                <p class="card-text"><?php echo $row['content']?></b></p>
               
                <div class="card-footer">
                  <?php
                  $date = date('j F, Y', strtotime($row['created_at']));
                  
                  
                  ?>
        <small class="text-muted">uploaded <?php echo $date; ?></small>
      </div>
          </div>
          </div>
          
          </div>
        
          <?php
        }
        }
        else {
            
           echo "<h3> No Posts Yet </h3>";
           
        }
        
        ?>
            <!--
                <img src="images/history.jpg" height="352px" alt="history books" alt="track your orders">
                
                <img src="images/action1.jpg" height="352px" alt="action books" alt="story keeper for exchanging">
                
            </div>
            <img src="images/comic3.jpg" width="50%" alt="classic books" alt="swapping online books">
            <div class="both"></div>
            <div class="left">
                <img src="images/comic2.jpg" alt="comic books" alt="story keeper view profile">
                <img src="images/classic2.jpg" alt="classic books" alt="order details">
            </div>
            <img src="images/action3.png" width="50%" alt="action books" alt="story keeper user">
            <div class="both"></div>-->
        </div>
    </div>
      <br/>
      <br/>


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
         <a href="https://www.facebook.com/The-Story-Keeper-102474482331846/?ref=pages_you_manage" class="text-white me-4">
            <i class="bi bi-facebook"></i>
         </a>
         <a href="https://www.instagram.com/p/CYgllOiq3-e/?igshid=YmMyMTA2M2Y%3D&fbclid=IwAR3-KsSzB1wYv74KhoPIsS8PNrFyDa6Y_h5-pqvgDt1BduD9NY3ttwlsxhE" class="text-white me-4">
            <i class="bi bi-instagram"></i>
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
               <h6 class="fw-bold">Story Keeper</h6>
               <hr class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px" />
               <p class="text-light">
                  Story Keeper is the act of releasing your books for another book lover to find. We hope you to join us!
               </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
               <!-- Links -->
               <h6 class="fw-bold">Our Services</h6>
               <hr class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px" />
               <p>
                  <a href="My Store.php?id=<?php echo $_SESSION['id'] ?>" class="text-white ">Our Store</a>
               </p>
                              <!-- we added here a link for about us page instead of about story keeper -->
              <p>
               <a href="about.php?id=<?php echo $_SESSION['id'] ?>" class="text-white">About US</a>
            </p>
               <p>
                  <a href="bookclub.php?id=<?php echo $_SESSION['id'] ?>" class="text-white">Book Clubs</a>
               </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
               <!-- Links -->
               <h6 class="fw-bold">Useful links</h6>
               <hr class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px" />
               <p>
                  <a href="My Account.php?id=<?php echo $_SESSION['id'] ?>" class="text-white">My Account</a>
               </p>
               <p>
                  <a href="Registration.php" class="text-white">Register</a>
               </p>
                <!-- we added here a link for outbound link -->
              <p>
               <a href="https://www.indeed.com/career-advice/career-development/how-to-improve-reading-skills" class="text-white">Indeed.com</a>
            </p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
               <!-- Links -->
               <h6 class="fw-bold">Contact</h6>
               <hr class="mb-4 mt-0 d-inline-block mx-auto"
                  style="width: 60px; background-color: #7c4dff; height: 2px" />
               <p class="text-light"><i class="bi bi-phone mr-3"></i> +20 111567092</p>
               <p class="text-light"><i class="bi bi-printer mr-3"></i> +20 111984742</p>
            </div>
            <!-- Grid column -->
         </div>
         <!-- Grid row -->
      </div>
   </section>
   <!-- Section: Links  -->
   <!-- Copyright -->
   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2022 Copyright:
      <a class="text-white text-decoration-none">Story Keeper</a>
   </div>
   <!-- Copyright -->
</footer>

</body>

</html>