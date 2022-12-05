<?php include 'regserver.php';
require('config.php');

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <!-- updated all meta tags because of spelling mistakes-->
    <title>Free Community, Bloggers, Book Clubs | The Story Keeper</title>
    <meta name="description" content="The story keeper is a free community where people can exchange
     their books, also have variety of book clubs to join, bloggers to give you feedback for your next read">
     <meta name="keywords" content="dust off old books, online community, book bloggers, how does a book exchange works, 
     can i exchange books online, online book clubs, book exchange online"> 
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/ranastyle.css"/>
    <link rel="icon" href="images/logo.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>

<body class="bookClubBodyColor">
<header>
     <nav class="shadow-lg">
         <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
         </div>
         <div class="logo"><a href="" class="text-decoration-none"><img src="images/logo.png" width="120rem" alt="bookexchange"></a></div>
         <div class="menu bg-dark">
            <ul>
            <?php  if (isset($_SESSION['username'])) { ?>
                
               <li><a href="index.php?id=<?php echo $_SESSION['id'] ?>">HOME</a></li>
               <li><a href="My Store.php?id=<?php echo $_SESSION['id'] ?>">STORE</a></li>
               <li><a href="bookclub.php?id=<?php echo $_SESSION['id'] ?>">BOOK CLUBS</a></li>
               <li><a href="about.php?id=<?php echo $_SESSION['id'] ?>">ABOUT</a></li>
               <li><a href="contactus.php?id=<?php echo $_SESSION['id'] ?>">CONTACT US</a></li>
    	<li><strong><a class="btn btn-outline-success" href="My Account.php?id=<?php echo $_SESSION['id'] ?>">MY ACCOUNT</strong></li></a>
        <?php } ?>
        <?php  if (!isset($_SESSION['username'])) { ?>
                     
         <li><a href="index.php">HOME</a></li>
               <li><a href="My Store.php">STORE</a></li>
               <li><a href="bookclub.php">BOOK CLUBS</a></li>
               <li><a href="about.php">ABOUT</a></li>
               <li><a href="contactus.php">CONTACT US</a></li>
                <?php } ?>
               
               
               
               <?php  if (isset($_SESSION['username'])) { ?>
                
                <a class="btn btn-outline-success" href="index.php?logout='1'">LOGOUT</a>
    	<li><strong><a class="btn btn-outline-success" href="My Account.php?id=<?php echo $_SESSION['id'] ?>"><?php echo $_SESSION['username']; ?></strong></li></a>
        <?php } ?>
        <?php  if (!isset($_SESSION['username'])) { ?>
      
                <li><a class="btn btn-outline-success" href="login.php">SIGN IN</a></li>
                <li><a class="btn btn-success" href="Registration.php">REGISTER</a></li>
                <?php } ?>
            </ul>
         </div>
      </nav>
      </header><br/><br/><br/><br/>
    <section id="#" class="container">
        <div class="intro">
            <h1 class="display-6 my-5 w-75 mx-auto text-center">Welcome To Story Keeper</h1>
            <h4 class="display-6 my-5 w-75 mx-auto text-center"> Story Keeper is an online free community that connects book owners together, 
                Do you have a ton of books sitting on your shelves? Would you like to dust them off and make space for new books?  then Story Keeper
                is the ideal choice.</h4>
            <div class="items-list">
                <div class="container col-xxl-8 px-4 ">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-12 col-sm-8 col-lg-6">
                            <img src="images/our-mission.png" class="d-block mx-lg-auto img-fluid" alt="choose your desired book club"
                                width="350rem" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <p class="lead">
                            <h4>Our Mission</h4>
                            We aim to help book owners who are interested in exchanging
                            their old books online with other book owners'. It is a win-win because everyone gets to enjoy 
                            a new book without needing to spend the extra cash making more space at home to store old books.            
                            </p>
                        </div>
                    </div>
                </div>
                <h3 class="display-4 text-center py-4">
                Our Services 
            </h3>
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-lg-6">
                            <p class="lead">
                            <h4>Our Vision</h4>
                           We aim to build a community in which reading, learning,
                            and access to information are considered rights, not privileges, so that all children thrive.
                            </p>
                        </div>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <img src="images/our-vision.png" class="d-block mx-lg-auto img-fluid" alt=" build an
                             online community for books" width="350rem" loading="lazy">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourTeam py-5">
        <div class="container">
            <h4 class="display-3 text-center py-5">
                Our Services 
            </h4>
            <div class="items-list">
                <div class="container col-xxl-8 px-4 ">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-12 col-sm-8 col-lg-6">
                            <img src="images/value1.png" class="d-block mx-lg-auto img-fluid" alt="online book exchange community"
                                width="350rem" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <p class="lead">
                            <h4>Exchange</h4>
                            Story Keeper is the act of releasing your old books for a stranger to find.
                            Browse our selection of over 60,000 used Books of different genres, find your desired book, then hit the exchange 
                            button to see the available book owners who are willing to exchange that book. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container col-xxl-8 px-4">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-lg-6">
                            <p class="lead">
                            <h4>Connection</h4>
                            Story Keeper make it easy for book owners to collaborate, stimulate fun ways to really connect with
                            other book owners and faciltate their process of exchanging books. Through book clubs bloggers can give you
                        feedback and comments for the next book that you will read.</p>
                        </div>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <img src="images/value2.png" class="d-block mx-lg-auto img-fluid" alt="join book clubs"
                                width="350rem" loading="lazy">
                        </div>
    
                    </div>
                </div>
                <div class="container col-xxl-8 px-4 ">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-12 col-sm-8 col-lg-6">
                            <img src="images/value3.png" class="d-block mx-lg-auto img-fluid" alt="get inspired from influencers book reviews"
                                width="350rem" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <p class="lead">
                            <h4>Book Clubs</h4>
                            <p>Readers love sharing their passion for books. Book clubs give you the opportunity to hear another person's perspective about a shared reading assignment and make new friends!
                                Explore and Find the book club that's right for you - for free! Discover over 100 clubs. Reading is better together.</p>
                        </div>
                    </div>
                </div>
            </div>
           
    </section>
    <section id="#" class="container">
        <div class="intro">
        <div class="container">
            <div class="donate py-4"><img class="w-100 mx-auto d-block py-5" src="images/patreon.png" alt="connect with others in the Bookclubs community">
                <h1 class="display-4 text-center">Enjoying Story Keeper?</h1>
                <p class="text-center fs-4">We believe in the power of books and we are here to bring communities together  is to help you connect your children 
                    and your community with fantastic books and share inspiring conversations with the people who make that magic happen.</p>
                <a class="text-decoration-none" href="bookclub.php"><button class="btn btn-outline-dark btn-lg mx-auto d-block">Book Clubs</button></a>
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