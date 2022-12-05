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
if (isset ($_POST['submit']))
{
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- title , description , keywords update -->
    <title> Customers inquiry|Contact us|the story keeper</title>
    <meta name="description" content="for customer complains to fill the form, write their problems and customer support  for any book inquiry or questions">
    <meta name="keywords" content="story keeper complains, story keeper problems,questions about story keeper, story keeper support">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
               <li><a href="about.php?id=<?php echo $_SESSION['id'] ?>">ABOUT</a></li>
               <li><a href="contactus.php??id=<?php echo $_SESSION['id'] ?>">CONTACT US</a></li>
               
               <li><a class="btn btn-outline-success" href="My Account.php?id=<?php echo $_SESSION['id'] ?>">My ACCOUNT</a></li>
               <a class="btn btn-outline-success" href="contactus.php?logout='1'">Logout</a>
            </ul>
         </div>
      </nav>
     
      
   </header>







    <section class="signUpSection">
        <div class="row g-0">
            <div class="col-6 d-none d-md-block">
                <div class="text-center bg-image-contactus"></div>
            </div>
            <div class="col-md-6 col-12 d-flex align-items-center">
                <div class="container col-8 justify-content-center">
                    <form method="POST" action="contactus.php" class="signUpForm mb-5">
                        <div class="mb-3">
                            <h1>Contact us</h1>
                            <p>Fill the form</p> <!-- alt changed -->  <!-- for changed -->
                            <label for="name" class="form-label" alt="questions about story keeper">Your name here</label><br>
                            <input type="text" class="form-control" placeholder="Your name.." id="name" aria-describedby="emailHelp" required>
                        </div>

                        <div class="mb-3"><!-- for changed -->
                            <label for="phone" class="form-label" alt="story keeper support">Your phone here</label><br>
                            <input type="tel" class="form-control" id="phone" placeholder="Your phone.." required>
                          </div>


                        <div class="mb-3">
                            <label for="mail" class="form-label" alt="story keeper problems">Your Email here</label><br><!-- for changed -->
                          <input type="email" class="form-control" id="mail" placeholder="Your email.."aria-describedby="emailHelp" required>
                        </div>

                        <div class="mb-3"><!-- for changed -->
                            <label for="subject" class="form-label" alt="story keeper problems">Your subject here</label><br>
                          <input type="text" class="form-control" id="subject" placeholder="Subject"aria-describedby="emailHelp" required>
                        </div>
                        <!-- alt changed -->
                        <div class="mb-5">
                          <label for="message" class="form-label" alt="story keeper support">Your message here</label><br>
                           <textarea class="form-control" id="message" rows="3" placeholder="Tell us if there is any issue with storykeeper exchanging books"></textarea>
                        </div>
                      
                        <input type="submit" name="submit" class="btn btn-success" alt="story keeper complains">
                        <button type="reset" class="right btn btn-danger">Reset</button>
                      </form> <!-- new line -->
                <h4 class="mb-4 text-center">More Information?<a class="ms-2 text-secondary" href="about.php">click here.</a></h4>
                </div>
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