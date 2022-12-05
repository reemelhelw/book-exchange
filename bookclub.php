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

  
}?>
<!DOCTYPE html>
<html lang="en">
   <!-- updated links as js file was removed-->
   <head>
     <!-- updated all meta tags because of spelling mistakes-->
   <title>Join a book club, book influencers | Book Clubs | The Story Keeper</title>
    <meta name="description" content="Click here to join a book club for free, looking for book influencers who share their reviews?Ee do that too.">
     <meta name="keywords" content="online book clubs, book discussions, free community for book lovers, free online book clubs,
     influencers reviews for books, book clubs for online discussions, online book clubs for readers, online book club community "> 
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/ranastyle.css" />
   <link rel="icon" href="images/logo.png" />
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
         <div class="logo"><a href="" class="text-decoration-none"><img src="images/logo.png" width="120rem" alt="book club banner"></a></div>
         <div class="menu">
            <!--  i added the login page in the ul  -->
            <ul>
               <li><a href="index.php?id=<?php echo $_SESSION['id'] ?>">HOME</a></li>
               <li><a href="My Store.php?id=<?php echo $_SESSION['id'] ?>">STORE</a></li>
               <li><a href="bookclub.php?id=<?php echo $_SESSION['id'] ?>">BOOK CLUBS</a></li>
               <li><a href="about.php?id=<?php echo $_SESSION['id'] ?>">ABOUT</a></li>
               <li><a href="contactus.php?id=<?php echo $_SESSION['id'] ?>">CONTACT US</a></li>
               <li><a class="btn btn-outline-success" href="My Account.php?id=<?php echo $_SESSION['id'] ?>">MY ACCOUNT</a></li>
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
      <div class="text-center bg-image">
         <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="d-flex justify-content-center align-items-center h-100">
               <div class="mt-5 text-white">
                  <h1 class="mb-3">Welcome to our book clubs</h1>
                  <h4 class="mb-6">Creating conversations is our passion!</h4>
                   <!--  i added the search bar -->
                 <input type="text" placeholder="Search here..">
               </div>
            </div>
         </div>
      </div>
   </header>

   <section id="bookClubCards" class="container">
      <div class="row">
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img-block">
                  <img class="card-img-top" src="images/mental-club.jpg" alt="online community for mental awarenss and knowledge">
               </div>
               <div class="card-body pt-0">
                  <h5 class="card-title">Up all night</h5>
                  <p class="card-text">Up all night is a free book club for mental health awarneess, self activites and stories of others who faced the same hurdles you have. Each month the club announces its book and its
                      reading schedule. If you've never read these kind oof books, then you'll definitely want to join 
                     us as we discuss! Discover new perspectives surrounding the representation. </p>
                  <p>we are currently reading “winter girls” by Laurie Halse Anderson.</p>
                  
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/awareness-blogger.jpg" alt="">
                        <p class="profileName fw-semibold my-auto">Harper collins</p>
                     </div>
                  </div>
                  <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                  <p class="card-text">If you're looking for a free community of history lovers
                     who also love to read,
               then this is the best online book club for you. There are so many discussions 
                     Interested in history - then you have found the right group, Where history, collections, and good books meet. 
                     with other history lovers, take a close look at real museum artifacts and you'll definitely want to join us. </p>
                  <p>we are currently reading “Rebels at Sea” by Eric Jay Dolin..</p>
                
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/history-influencer.jpg" alt="">
                        <p class="profileName fw-semibold my-auto">Jennifer Robert </p>
                     </div>
                  </div>
                  <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                  <p class="card-text">The name of this online club spoils mystery. horror club blaze
                     through the latest mystery
                     reads. each month we vote for a book to read. if you'd like then hit the join button to be
                     part of our community 
                     This group was created to connect lovers of stories across the internet with their characters
                      and plotlines, dreams. 
                      Come one, come all. All you need to join is your desire to read.</p>
                  <p>we are currently reading “The Hunger” by Alma Katsu.</p>
                  
                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/mystery-blogger.jpg" alt="">
                        <p class="profileName fw-semibold my-auto">Mark Stevan</p>
                     </div>
                  </div>
                  <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
               </div>
            </div>
         </div>
      </div>
      <section id="bookClubCards" class="container">
         <div class="row">
            <div class="bookClubCard col-md-4 mt-5 mb-4">
               <div class="card profile-card-5 shadow-lg bg-white rounded">
                  <div class="card-img-block">
                     <img class="card-img-top" src="images/fiction-club.jpg" alt="online community for fiction readers">
                  </div>
                  <div class="card-body pt-0">
                     <h5 class="card-title">Sci-Fi Club</h5>
                     <p class="card-text">Sci-Fi Club is a welcoming community for book lovers to share their love of
                        speculative fiction through group reads. Discover the best science fiction, fantasy enthusiasts, graphic
                        novels. We welcome people interested in this genre, whichever your choice is - books, movies. 
                        We typically meet up each month and talk science, science fiction, and fantasy. Join Now! </p>
                     <p>we are currently reading “Frankenstein” by Mary Shelley.</p>
                     
                     <div class="profileStrip">
                        <div class="d-flex align-items-center">
                           <img class="profileAvatar me-4" src="images/science-influencer.jpg" alt="">
                           <p class="profileName fw-semibold my-auto">Charolette James</p>
                        </div>
                     </div>
                     <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                  </div>
               </div>
            </div>
            <div class="bookClubCard col-md-4 mt-5 mb-4">
               <div class="card profile-card-5 shadow-lg bg-white rounded">
                  <div class="card-img-block">
                     <img class="card-img-top" src="images/action-club.jpg" alt="free book club for action books">
                  </div>
                  <div class="card-body pt-0">
                     <h5 class="card-title">Action Club</h5>
                     <p class="card-text">if you love action then
                        this is the perfect free online book club for you as each month we vote for the book that we will read,
                        we discuss and suggest our recommendations. In a twist on the traditional book club, Action’s Book Club 
                        combines reading and community service. Participants read books on timely topics, and engage in
                         lively discussions. Feel free to join!</p>
                     <p>we are currently reading “The Terminal List” byJack Carr.</p>
                     
                  
                     <div class="profileStrip">
                        <div class="d-flex align-items-center">
                           <img class="profileAvatar me-4" src="images/blogger-action.jpg" alt="">
                           <p class="profileName fw-semibold my-auto">Sally Liam</p>
                        </div>
                     </div>
                     <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                  </div>
               </div>
            </div>
            <div class="bookClubCard col-md-4 mt-5 mb-4">
               <div class="card profile-card-5 shadow-lg bg-white rounded">
                  <div class="card-img-block">
                     <img class="card-img-top" src="images/summer-club.jpg" alt="join online community for summer books ">
                  </div>
                  <div class="card-body pt-0">
                     <h5 class="card-title">Summer Club</h5>
                     <!-- updated paragraph 198-->
                     <p class="card-text">club offers you a summer reading experience,literally the summer
                        sun takes you- we are perfect for your next meeting on the beach, by the pool, or at home with
                        margaritas.Our reading challenge is to tackle Big Books (400 pages or more) during summer days,
                         we'll compile a list of 30 books to read books for free discussions. Feel free to join!</p>
                     <p>we are currently reading “Malibu Rising” by Taylor Jenkins Reid.</p>
                     
                     <div class="profileStrip">
                        <div class="d-flex align-items-center">
                           <img class="profileAvatar me-4" src="images/summer-blogger.jpg" alt="">
                           <p class="profileName fw-semibold my-auto">Noah James</p>
                        </div>
                     </div>
                     <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                  </div>
               </div>
            </div>
            <section id="bookClubCards" class="container">
               <div class="row">
                  <div class="bookClubCard col-md-4 mt-5 mb-4">
                     <div class="card profile-card-5 shadow-lg bg-white rounded">
                        <div class="card-img-block">
                           <img class="card-img-top" src="images/romance-club.jpg" alt="join book club for romance books">
                        </div>
                        <div class="card-body pt-0">
                           <h5 class="card-title">Romantics Club</h5>
                           <p class="card-text">If you're a big fan of free online romance book clubs,
                              this book club is all about romance, We try and read as many romance books as we can,
                               sharing our thoughts and expanding our
                           reading experience. If you love to read romance books, and you like challenges, 
                              We have a variety of reading challenges, monthly book feedback discussions. come and join this group.</p>
                           <p>we are currently reading “Ugly Love” by Collen Hoover.</p>
                          
                           <div class="profileStrip">
                              <div class="d-flex align-items-center">
                                 <img class="profileAvatar me-4" src="images/romance-influencer.jpg" alt="">
                                 <p class="profileName fw-semibold my-auto">Tessa Bailey</p>
                              </div>
                           </div>
                           <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                        </div>
                     </div>
                  </div>
                  <div class="bookClubCard col-md-4 mt-5 mb-4">
                     <div class="card profile-card-5 shadow-lg bg-white rounded">
                        <div class="card-img-block">
                           <img class="card-img-top" src="images/silent-club.jpg" alt=" free book club to read in peace">
                        </div>
                        <div class="card-body pt-0">
                           <h5 class="card-title">Silent club</h5>
                           <p class="card-text">Small Talk? No Thanks Pass, Silent Book Club is
                              online free community for enjoying reading books and connecting with other book 
                              lovers without any pressure — without having to think of something smart to say.
                               Simply read a book and if you feel like it, you can share your book with the group during the discussion time at the end. Feel free to join us.</p>
                           <p>we are currently reading “The Odyssey” by Homer.</p>
                           
                                 <div class="profileStrip">
                              <div class="d-flex align-items-center">
                                 <img class="profileAvatar me-4" src="images/blogger-silent.jpg" alt="">
                                 <p class="profileName fw-semibold my-auto">emma winson</p>
                              </div>
                           </div>
                           <button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              Join club
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="bookClubCard col-md-4 mt-5 mb-4">
                     <div class="card profile-card-5 shadow-lg bg-white rounded">
                        <div class="card-img-block">
                           <img class="card-img-top" src="images/adventure-club.jpg" alt="free online influencers feedback">
                        </div>
                        <div class="card-body pt-0">
                           <h5 class="card-title">Adventure Club</h5>
                           <!-- updated paragraph 280-->
                           <p class="card-text">Adventure Book Club is a fun, social opportunity for people who love to read 
                              support each other, travel, and adventure-based fiction and nonfiction books.
                              The club is for adventurers of all ages also your Own Adventure book can be chosen. 
                              John William select a book to read each month for free discussions, and the adventurers decide which path the group should take.</p>
                           <p>we are currently reading “Quick Silver” by Dean Koontz</p>
                          
                           <div class="profileStrip">
                              <div class="d-flex align-items-center">
                                 <img class="profileAvatar me-4" src="images/adventure-influencer.jpg" alt="">
                                 <p class="profileName fw-semibold my-auto">John william</p>
                              </div>
                           </div>
                           <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                        </div>
                     </div>
                  </div>
                  <section id="bookClubCards" class="container">
                     <div class="row">
                        <div class="bookClubCard col-md-4 mt-5 mb-4">
                           <div class="card profile-card-5 shadow-lg bg-white rounded">
                              <div class="card-img-block">
                                 <img class="card-img-top" src="images/teen-club.jpg" alt="join book club for young adults">
                              </div>
                              <div class="card-body pt-0">
                                 <h5 class="card-title">Teens Club</h5>
                                 <p class="card-text">The book club is for ,Teens and young/ new adults -- ages 15 to 21. Each
                                     month we discuss a variety of books as we don't want people to miss out on the
                                      wonderful world of adult books.
                                    You are invited to join the Teens book club! we pick
                                     an excellent book to read and then We'll be discussing our thoughts, looking for book
                                      recommendations, and sharing a writing prompt! Join us</p>
                                 <p>we are currently reading “Just Listen” by Sarah Dessen.</p>
                                 
                                 <div class="profileStrip">
                                    <div class="d-flex align-items-center">
                                       <img class="profileAvatar me-4" src="images/teens-influencer.jpg" alt="">
                                       <p class="profileName fw-semibold my-auto">Mia Lucas</p>
                                    </div>
                                 </div>
                                 <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                              </div>
                           </div>
                        </div>
                        <div class="bookClubCard col-md-4 mt-5 mb-4">
                           <div class="card profile-card-5 shadow-lg bg-white rounded">
                              <div class="card-img-block">
                                 <img class="card-img-top" src="images/social-club.jpg" alt="free community for readers to socialize">
                              </div>
                              <div class="card-body pt-0">
                                 <h5 class="card-title">Social Club</h5>
                                 <!-- updated line paragraph  -->
                                 <p class="card-text">Join our literary enthusiasts across the
                                    globe at the Social Book Club.
                                    Whether you're after stimulating conversation about your favourite novels or just a
                                    means to fuel your love of books. You can combine reading with free book discussions and feedback!
                                     Hosted by Ava Elijah, the Social Book Club reads a book each month and then discuss it with club members. Come and join this group.</p>
                                 <p>we are currently reading “Out Liers” by Malcolm Glad Well.</p>
                                 
                                 <div class="profileStrip">
                                    <div class="d-flex align-items-center">
                                       <img class="profileAvatar me-4" src="images/social-blogger.jpg" alt="">
                                       <p class="profileName fw-semibold my-auto">Ava Elijah</p>
                                    </div>
                                 </div>
                                 <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                              </div>
                           </div>
                        </div>
                        <div class="bookClubCard col-md-4 mt-5 mb-4">
                           <div class="card profile-card-5 shadow-lg bg-white rounded">
                              <div class="card-img-block">
                                 <img class="card-img-top" src="images/friend-club.jpeg" alt="a community for readers to communicate">
                              </div>
                              <div class="card-body pt-0">
                                 <h5 class="card-title">Bestie Club</h5>
                                 <p class="card-text">Welcome to our Bestie Book Club — a free online community to read books, socialize,
                                     suggest recommendations,share stories,and of course build relationships. If you're 
                                    new here, then Here's how this works: each month we host virtual book club 
                                    sessions where we read and discuss books. 
                                    We are a community ready to read great books. What are you waiting for? Hurry up and join us.</p>
                                 <p>we are currently reading “Grown” by Tiffany D. Jackson.</p>
                                 
                                 <div class="profileStrip">
                                    <div class="d-flex align-items-center">
                                       <img class="profileAvatar me-4" src="images/friends-blogger.jpg" alt="">
                                       <p class="profileName fw-semibold my-auto">Sophia william</p>
                                    </div>
                                 </div>
                                 <a style="text-decoration:none;" href="Group_chat.php"><button class="joinBtns d-block mx-auto btn btn-outline-success px-5 mt-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                     Join club
                  </button></a>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
         </div>
         </div>
      </section>
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