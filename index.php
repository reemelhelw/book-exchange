<?php include 'regserver.php';
require('config.php');



if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}

$result = $link->query("SELECT * FROM user_posts ORDER BY created_at DESC LIMIT 0,3"); 
  $sql = "SELECT users.username
  FROM users, user_posts
  WHERE users.id = user_posts.user_id";

  $results = mysqli_query($link, $sql) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=Ddevice-width, initial-scale=1.0">
     <title>The Story Keeper</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="css/indexstyle.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/
libs/font-awesome/5.15.1/css/all.min.css">
</head>


<body class="bookClubBodyColor">
<header>
     <nav class="shadow-lg">
         <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
         </div>
         <div class="logo"><a href="" class="text-decoration-none"><img src="images/logo.png" width="120rem" alt="bookexchange"></a></div>
         <div class="menu">
            <ul style="margin-right: 10px;">
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
      </header><!--<br/><br/><br/><br/>-->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  

  
      <section class="carousel">
          <div id="demo" class="carousel-slide" data-bs-ride="carousel">
    
            
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            
         
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/exchange-carousel-picture.png" alt="exchange now picture" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <a href="My Store.php?id=<?php echo $_SESSION['id'] ?>" class='ctn'>Exchange Now</a>
                  </div>
               </div>
              <div class="carousel-item">
                <img src="images/Forest.jpg" alt="picture of a forest to inspire people to join fanstasy book clubs" class="d-block" style="width: 100%">
                <div class="carousel-caption">
                    <a href="bookclub.php?id=<?php echo $_SESSION['id'] ?>" class='ctn'>Try Joining a Fantasy Book Club Now</a>
                  </div>
               </div>
              <div class="carousel-item">
                <img src="images/post-now-carousel.jpg" alt="start posting now" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <a href="createpost.php?id=<?php echo $_SESSION['id'] ?>" class='ctn'>Post Your Own Books Now</a>
                  </div>
               </div>
            </div>
          <br/>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="margin-left:90px ;">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
          
        </section>
      <section class="exchnage-now">
          <div class="title mt-5">
             <a href="My Store.php?id=<?php echo $_SESSION['id'] ?>"><h1>Exchange Now</h1></a>
             <div class="line"></div>
          </div>
          <section id="bookClubCards" class="container">
      <br>

      <!--<h1 class="text-white">Action and Adventure</h1>-->
      <div class="row">
      <?php while ($row = mysqli_fetch_array($result)){ 
                         $rowdata = mysqli_fetch_array($results);
                        ?>  
         <div class="bookClubCard col-md-4 mb-4">
         
            <div class="card profile-card-5 shadow-lg bg-white rounded">
            
               <div class="card-img">
               <img class="card-img-top" src="<?php	echo $row['image'];?>" alt="Card image cap" alt="exchange" width="300px">
                  <!--<img class="card-img-top"  src="images/action1.jpg" alt="Card image cap" alt="exchange">-->
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title"><?php echo $row['title']?></h5>
                 
                   <p class="card-text text-dark"><?php echo $row['content']?></b></p>
                  
                   <br/><br/>

                  <!--<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </p>-->

  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/action1-author.jpg" alt="swap it online">
                        <p class="profileName fw-semibold my-auto"><?php print_r ($rowdata['username']); ?></p>
                     

                     </div>
                  </div>
                  
                    <form method="POST">
                    <?php
                    $postid = $row['id'];
                    ?>
               
               <a href="request-form.php?id=<?php echo $postid?>" class="d-block mx-auto btn btn-outline-success px-5 mt-4">Exchange Now</a>
               
                    </form><br/>
    
                    
                  
                  
                  <div class="card-footer">
                  <?php
                  $date = date('j F, Y', strtotime($row['created_at']));
                  
                  
                  ?>
        <small class="text-muted">uploaded <?php echo $date; ?></small>
      </div>
               </div>
            </div>
         </div>
         <?php };?>
      <section>
           <div>
           <img class="mt-5" src="images/book-club-banner.png" alt="exchange now picture" class="d-block" style="width:100%">
              
           </div>
     </section>
     <section id="bookClubCards" class="container">
     <a href="bookclub.php?id=<?php echo $_SESSION['id'] ?>"><h1 class="text-center mt-5">Check Out Book Clubs</h1></a>
      <div class="row">

         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img-block">
                  <img class="card-img-top" src="images/mental-club.jpg" alt="online community for mental awarenss and knowledge">
               </div>
               <div class="card-body pt-0">
                  <h5 class="card-title">Up all night</h5>
                  <p class="card-text text-dark">Up all night is a free book club for mental health awarneess, self activites and stories of others who faced the same hurdles you have. Each month the club announces its book and its
                      reading schedule. If you've never read these kind oof books, then you'll definitely want to join 
                     us as we discuss! Discover new perspectives surrounding the representation. </p>
                  <p class="text-dark">we are currently reading “winter girls” by Laurie Halse Anderson.</p>
                 
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/awareness-blogger.jpg" alt="">
                        <p class="profileName fw-semibold my-auto text-dark">Harper collins</p>
                     </div>
                  </div>
                  <a href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
               </div>
            </div>
         </div>
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img-block">
                  <img class="card-img-top" src="images/history-club.jpg" alt="free book club for history lovers">
               </div>
               <div class="card-body pt-0">
                  <h5 class="card-title">History Club</h5>
                  <p class="card-text text-dark">If you're looking for a free community of history lovers
                     who also love to read,
               then this is the best online book club for you. There are so many discussions 
                     Interested in history - then you have found the right group, Where history, collections, and good books meet. 
                     with other history lovers, take a close look at real museum artifacts and you'll definitely want to join us. </p>
                  <p class="text-dark">we are currently reading “Rebels at Sea” by Eric Jay Dolin..</p>
                 
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/history-influencer.jpg" alt="">
                        <p class="profileName fw-semibold my-auto text-dark">Jennifer Robert </p>
                     </div>
                  </div>
                  <a href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
               </div>
            </div>
         </div>
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img-block">
                  <img class="card-img-top" src="images/horror-club.jpg" alt="free discussions for horror books">
               </div>
               <div class="card-body pt-0">
                  <h5 class="card-title">Horror Club</h5>
                  <p class="card-text text-dark">The name of this online club spoils mystery. horror club blaze
                     through the latest mystery
                     reads. each month we vote for a book to read. if you'd like then hit the join button to be
                     part of our community 
                     This group was created to connect lovers of stories across the internet with their characters
                      and plotlines, dreams. 
                      Come one, come all. All you need to join is your desire to read.</p>
                  <p class="text-dark">we are currently reading “The Hunger” by Alma Katsu.</p>
                 
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/mystery-blogger.jpg" alt="">
                        <p class="profileName fw-semibold my-auto text-dark">Mark Stevan</p>
                     </div>
                  </div>
                  <a href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
               </div>
            </div>
         </div>
      </div>
     
         <!-- updated footer-->
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