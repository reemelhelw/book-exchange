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

$result = $link->query("SELECT * FROM user_posts ORDER BY created_at DESC"); 
  $sql = "SELECT users.username
  FROM users, user_posts
  WHERE users.id = user_posts.user_id";

  $results = mysqli_query($link, $sql) or die(mysqli_error($link));
?>
<!DOCTYPE html>
<html lang="en">
<head>   <!-- meta changed -->
    <title>Find books, Exchange book store|story keeper</title>
    <meta name="description" content="Find your favorite book genres and start exchanging books online on StoryKeeper and you can upload a book">
    <meta name="keywords" content="exchange books online, book exchange online, online book exchange in Egypt, exchange a book, virtual book exchange, book swaps online, used book exchange online, books and comics exchange, classic books, adventure books.">
          
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/jaidastyle.css" />
   <link rel="icon" href="" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>


<!-- bg-image-mybooks -->
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
      <div class="text-center bg-image-mybooks">
         <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="d-flex justify-content-center align-items-center h-100">
               <div class="mt-5 text-white">
                  <h1 class="mt-5 mb-3">Upload a Book</h1>


                     <div class="mb-3">
                     
                     </div>
                                      

                  <a class="btn btn-outline-light btn-sm " href="createpost.php?id=<?php echo $_SESSION['id'] ?>" role="button">Upload</a>
                 <br/><br/><input class ="mb-3" type="text" placeholder="Search..">
               </div>
            </div>
         </div>
      </div>
   </header>


   <!-- section1 -->
   <section id="bookClubCards" class="container">
      <br>

      <!--<h1 class="text-white">Action and Adventure</h1>-->
      <div class="row">
      <?php while ($row = mysqli_fetch_array($result)){ 
                         $rowdata = mysqli_fetch_array($results);
                        ?>  
         <div class="bookClubCard col-md-4 mt-5 mb-4">
         
            <div class="card profile-card-5 shadow-lg bg-white rounded">
            
               <div class="card-img">
               <img class="card-img-top" src="<?php	echo $row['image'];?>" alt="Card image cap" alt="exchange" width="300px">
                  <!--<img class="card-img-top"  src="images/action1.jpg" alt="Card image cap" alt="exchange">-->
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title"><?php echo $row['title']?></h5>
                 
                   <p class="card-text"><?php echo $row['content']?></b></p>
                   
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
               
                    </form>
    
                    
                  
                  
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
         
         <!--
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/action2.jpg" alt="Card image cap" alt="exchange online">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">The Lioness: A Novel</h5>
                  <p class="card-text"><b>The Best to be swapped</b> A luxurious African safari turns deadly for a Hollywood starlet and her entourage in this riveting historical thriller from the New York Times bestselling A luxurious African safari turns deadly for a Hollywood starlet and her entourage in this riveting historical thriller from the New York Times bestselling author of The Flight Attendant, exhange the adventures.<br> </p>
                  <p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                  </p>

  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author2.jpg" alt="online swapping">
                        <p class="profileName fw-semibold my-auto">Chris Bohjalian</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 2 days ago</small>
      </div>
               </div>
            </div>
         </div>
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/action3.png" alt="Card image cap" alt="exchange book">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">Dream Town: Let The Exchange Begin</h5>
                   <p class="card-text">USED BOOK EXCHANGE: Dream Town is the third book in the Archer series.Private investigator and World War II veteran Aloysius Archer heads to Los Angeles, the city where dreams are made and shattered, and is ensnared in a lethal case in this latest thriller in #1 New York Times bestselling author David Baldacci’s Nero Award-winning series,<b> exhange the adventures and the action books.</b></p>
<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                  </p>

  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author3.jpg" alt="swapping">
                        <p class="profileName fw-semibold my-auto">David Baldacci</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 3 days ago</small>
      </div>
               </div>
            </div>

      </div>
      </div>

      
   </section>















-->

    <!-- section2 -->
    <!--
   <section id="bookClubCards" class="container">
      <br>

      <h1 class="text-white">Classic</h1>
      <div class="row">
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/classic1.jpg" alt="Card image cap" alt="the story keeper">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">To Kill a Mockingbirdl</h5>
                  <p class="card-text"><b>Be The First To Exchange It:</b> To Kill a Mockingbird is a novel by the American author Harper Lee. It was published in 1960 and was instantly successful. In the United States, it is widely read in high schools and middle schools. To Kill a Mockingbird has become a classic of modern American literature, winning the Pulitzer Prize, let the virtual exchange begin. </p>

                  <p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star  checked"></span>
                  </p>

  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author4.jpg">
                        <p class="profileName fw-semibold my-auto">Harper Lee</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 4 days ago</small>
      </div>
               </div>
            </div>
         </div>
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/classic2.jpg" alt="Card image cap" alt="swapping">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">The Great Gatsby: Worth The Exchange</h5>
                  <p class="card-text"><b>Swap</b> The Great Gatsby is a 1925 novel by American writer F. Scott Fitzgerald. Set in the Jazz Age on Long Island, near New York City, the novel depicts first-person narrator Nick Carraway's interactions with mysterious millionaire Jay Gatsby and Gatsby's obsession to reunite with his former lover, Daisy Buchanan,let the virtual exchange begin. <br> </p>
                  <p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                  </p>

  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author5.jpg" alt="exchanging">
                        <p class="profileName fw-semibold my-auto">F. Scott Fitzgerald</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 6 days ago</small>
      </div>
               </div>
            </div>
         </div>
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/classic3.jpg" alt="Card image cap">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">Little Women</h5>
                  <p class="card-text"><b>Classic Exchange:</b> The story follows the lives of the four March sisters—Meg, Jo, Beth, and Amy—and details their passage from childhood to womanhood. Little Women is a coming-of-age novel  Originally published in two volumes in 1868 and 1869, Alcott wrote the book over several months at the request of her publisher, let the virtual exchange begin</p>
                      <p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </p>

  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author6.jpg" alt="swap it">
                        <p class="profileName fw-semibold my-auto">Louisa May Alcott</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 8 days ago</small>
      </div>
               </div>
            </div>

      </div>
      </div>

      
   </section>-->












   <!-- section 3 -->
<!-- Comic Book or Graphic Novel -->
<!--
   <section id="bookClubCards" class="container">
      <br>

      <h1 class="text-white">Comic Book or Graphic Novel</h1>
      <div class="row">
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/comic1.jpg" alt="Card image cap">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">Fun Home: A Family Tragicomic</h5>
                  <p class="card-text">Fun Home: A Family Tragicomic is a 2006 graphic memoir by the American cartoonist Alison Bechdel, author of the comic strip Dykes to Watch Out For. It chronicles the author's childhood and youth in rural Pennsylvania, United States, focusing on her complex relationship with her father, This is based on comic exchange books. </p>
<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star"></span>
                  </p>


  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author7.jpg" alt="exchange">
                        <p class="profileName fw-semibold my-auto">Alison Bechdel</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 3 mins ago</small>
      </div>
               </div>
            </div>
         </div>
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/comic2.jpg" alt="Card image cap" alt="swap">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">Dog Man: From the Creator of Captain Underpants</h5>
                  <p class="card-text">comic books are fun to be exchanged Dav was so disruptive in class that his teachers made him sit out in the hallway every day. Luckily, Dav loved to draw and make up stories. He spent his time in the hallway creating his own original comic books - the very first adventures of Dog Man and Captain, This is based on comic exchange books.</p>
<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                  </p>

  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author8.jpg" alt="exchanging website">
                        <p class="profileName fw-semibold my-auto">Dav Pilkey</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 1 day ago</small>
      </div>
               </div>
            </div>
         </div>
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/comic3.jpg" alt="Card image cap">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">Nimona: Comic Swap</h5>
                  <p class="card-text">Nimona is a fantasy graphic novel by ND Stevenson, an American cartoonist to be exchanged. The story follows Nimona, a shapeshifter who joins the villain Ballister Blackheart in his plans to destroy the over-controlling Institute. Blackheart tries to operate under his code of ethics, while Nimona has no problem with killing,This is based on comic exchange books. </p>
<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </p>


  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author9.jpg" alt="the story keeper">
                        <p class="profileName fw-semibold my-auto">ND Stevenson</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 3 days ago</small>
      </div>
               </div>
            </div>

      </div>
      </div>

      </div>
   </section>-->




<!-- section 4 -->
<!-- Detective and Mystery -->
<!--
   <section id="bookClubCards" class="container">
      <br>

      <h1 class="text-white">Detective and Mystery</h1>
      <div class="row">
         <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/mystery1.jpg" alt="Card image cap" alt="book swap">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">The Murder of Roger Ackroyd</h5>
                   <p class="card-text">No regret in Detective novels to be <b>exchanged</b>. The Murder of Roger Ackroyd is a work of detective fiction by British writer Agatha Christie, first published in June 1926 in the United Kingdom by William Collins, Sons and in the United States by Dodd, Mead and Company. It is the third novel to feature Hercule Poirot as the lead detective, swap the mystery online</p>
<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </p>


  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author10.jpg" alt="online swap">
                        <p class="profileName fw-semibold my-auto">Agatha Christie</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 30 mins ago</small>
      </div>
               </div>
            </div>
         </div>
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/mystery2.jpg" alt="Card image cap">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">Evil Under the Sun</h5>
                  <p class="card-text">You May overcome your boredom by exchanging detective books for example. Evil Under the Sun is a work of detective fiction by British writer Agatha Christie, first published in the UK by the Collins Crime Club in June 1941 and in the US by Dodd, Mead and Company in October of the same year. The UK edition retailed at seven shillings and sixpence and the US edition at $2.00.swap it online. </p>
<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                  </p>


  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author11.jpg" alt="books exchange">
                        <p class="profileName fw-semibold my-auto">Agatha Christie</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 4 days ago</small>
      </div>
               </div>
            </div>
         </div>
          <div class="bookClubCard col-md-4 mt-5 mb-4">
            <div class="card profile-card-5 shadow-lg bg-white rounded">
               <div class="card-img">
                  <img class="card-img-top"  src="images/mystery3.jpg" alt="Card image cap" alt="exchanging">
               </div><br>
               <div class="card-body pt-0 ">
                  <h5 class="card-title">Real Tigers</h5>
                   <p class="card-text">Virtual <b>Exchange</b> save your time: Slough House is the MI5 branch where disgraced operatives are reassigned after they've messed up too badly to be trusted with real intelligence work.Slough House is the MI5 branch where disgraced operatives are reassigned after they've messed up too badly to be trusted with real intelligence work, swap it online.</p>
<p>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star checked"></span>
                     <span class="fa fa-star "></span>
                  </p>


  

                  <div class="profileStrip">
                     <div class="d-flex align-items-center">
                        <img class="profileAvatar me-4" src="images/author12.jpg">
                        <p class="profileName fw-semibold my-auto">Mick Herron</p>
                     

                     </div>
                  </div>
                  <button class="d-block mx-auto btn btn-outline-success px-5 mt-4">
                     Exchange Now
                  </button><br>
                  <div class="card-footer">
        <small class="text-muted">uploaded 1 week ago</small>
      </div>
               </div>
            </div>

      </div>
      </div>-->

      <!--
   </section>-->

 




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