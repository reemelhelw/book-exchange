<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=Ddevice-width, initial-scale=1.0">
     <title>Landing</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/
libs/font-awesome/5.15.1/css/all.min.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body, html {
  height: 100%;
  margin: 0;
}
.showcase{
  position: absolute;
  right: 0;
  width: 100%;
  min-height: 100vh;
  padding: 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 2;
}
.showcase header{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 0px 100px;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.toggle.active{
  background: url(../Website/img/close.png);
  background-repeat: no-repeat;
  background-size: 25px;
  background-position: center;
  
}

.toggle{
  position: relative;
  width: 60px;
  height: 60px;
  background: url(../Website/img/toggle.png);
  background-repeat: no-repeat;
  background-size: 30px;
  background-position: center;
  cursor: pointer;
}
.content
{
 position: absolute;
 right: 0;
  width: 100%;
 min-height: 100vh;
 padding: 100px;
  display: flex;
 justify-content: space-between;
  align-items: center;
  transition: 0.5s;
  z-index: 10;
}

p{
  color: burlywood;
  padding: 0px 40px;
}

.showcase video{

  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;

}

.bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("images/Landingphoto.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  justify-content: center;
  object-fit: cover;
  opacity: 0.8;

}
.textBox{
position: relative;
z-index: 20;
margin-top:200px;

}

.register > a:hover{

}



.textBox > p{
  margin-left: 60px;
  
  color: black;

}
.textBox > h2{
  font-size: 4em;
  font-weight: 800;
  line-height: 1em;
  text-transform: uppercase;
  color: #d4b483;
  margin-left: 410px;
  padding: 30px;
  background: #5e3023;
  border-radius: 30px;
}
.textBox > ul{
margin-left: 540px;
  padding: 10px 10px;
  background: #568259;
  border-radius: 30px;
   color:#568259;
  float: left;
  text-decoration: none;
  display: flex; 
  font-size:x-large;
  
}
.signin{
  padding: 10px;
}







  a {
      text-decoration: none;
      padding-bottom: 10px;
      color: burlywood
      ;
  }

  a:hover{
      text-decoration: none;
      padding-bottom: 10px;
      color: #895737
      ;
  }
  
  ul {
    list-style: none;
  }
  .active {
    color:indianred;
    text-decoration: underline;
    font-weight: bold;
}
body, html {
  overflow-x: hidden;
}
.navbar {
    position: absolute;
    align-items: center;
    top: 0;
    left: 0;
    display: flex;
    width: 100%;
    justify-content: space-between;
    padding: 20px;
    color:burlywood;
}
.logo{
  max-width: 150px;
}
.nav-links {
    display: none;
    align-items: center;
}
.nav-links li {
  margin: 0 30px;
}
header {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .header-content{
                  margin-bottom: 70px;
                  color: lavenderblush;
                  text-align: center;

  }
  .header-content h2{
                      font-size: 4vmin;
                      text-align: center;
                      margin-top: 50px;
  }
  .line{
        width: 150px;
        height: 4px;
        background: burlywood;
        margin: 10px auto;
        border-radius: 5px;
  }
  .header-content h1 {
    font-size: 7vmin;
    margin-top: 50px;
    margin-bottom: 30px;
 }
 .ctn {
    padding: 8px 15px;
    background:indianred;
    border-radius: 30px;
     color:burlywood;
 }
 section {
  width: 80%;
  margin: 80px auto;
 }
.title {
   text-align: center;
   font-size: 4vmin;
   color: indianred;
}
.row {
  display: flex;
  align-items: center;
  width: 100%;
  justify-content: space-between;
 
}
.row .col {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.bestsellers .row{
  margin-top: 5epx;
}
h4 {
  font-size: 3vmin;
  color: burlywood;
  margin: 20px auto;
}

.events .ctn{
margin-top: 30px;
}
.explore {
  width: 100%;
  height: 80vh;
  background-image: url('./img/authors.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
  opacity: 75%;
}
.explore-content {
  width: 60%;
  padding: 50px;
   color: lavenderblush;
   display: flex;
   align-items: center;
   flex-direction: column;
}
.explore-content h1 {
  font-size: 7vmin;
  }
.explore-content line{
  margin-bottom: 50px;
}
.explore-content p {
  color: whitesmoke;
  background: indianred;
  border-radius: 10px;
  padding: 8px 15px;
}
.explore-content .ctn {
  margin-top: 40px;
}
.content-col {
  width: 40%;
}
.image-col {
  width: 60;
}
.home .image-gallery{
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  align-items: center;
}
.image-gallery img {
  max-width: 100px;
  margin: 10px;
}
.content-col h1{
  font-size: 7vmin;
   color: burlywood;
}
.content-col .line {
  margin-left: -1px;
}
.content-col p{
  padding: 0;
  margin: 30px auto;
}
.content-col .ctn{
  margin-left: -230px;
}
img {
  transition: transform .3s ease;
}
img:hover {
  transform: scale(1.1);
}
.ctn:hover {
  background: burlywood;
  color:indianred;
  box-shadow: 2px 2px 5px #00000056;

}
#searchbar{
  padding:20px;
  color:indianred;
  background:burlywood;
  margin-top: 150px;
}
#searchbar form{
  float:right;
  margin-top:-50px;}
  
#searchbar input[type="email"]{
  padding:4px;
  height:25px;
  width:250px;
}
.searchbar-container{
  padding: 2vmin;
}
.button_1{
  height:38px;
  background:indianred;
  border:none;
  padding-left: 20px;
  padding-right:20px;
  color:burlywood;
  border-radius: 10px;
}

.shop .image-gallery{
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  align-items: center;
}
.shop .image-gallery img {
  max-width: 300px;
  margin: 10px;
}
.shop-content{
            flex:none;
}
.pagination{
   margin-left: 300px;
}
.form{
  margin-top: 150px;
  align-items: center;
}
.explore1{
  margin-top: 100px;
  background-image: url('./img/authors.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center;
  opacity: 75%;
}
.explore2 .image-gallery{
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  align-items: center;
}
.explore2 .image-gallery img {
  max-width: 50px;
  margin: 10px;
}
.explore2-content{
            flex:none;
}
.carousel{
  margin-top: 150px;
}
.about{ 
    margin-top: 150px;
    background-image: url('./img/about.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    opacity: 75%;
  
}
.about-content{
  margin-bottom: 70px;
  color: lavenderblush;
  text-align: center;
}

.about-content p{
  background-color: indianred;
  border-radius: 20px;
  padding: 8px 15px;
}
.sec-footer {
  
  padding:0;
  box-sizing: border-box;
}
.footer{
  background-color: indianred;
  padding: 70px;
  display: none;
}

.container{
  max-width: 1170px;
  background-color: lavenderblush;
  margin:auto;
}
.social-links{
  list-style: none;
  flex:flex ;
}
.footer-row{
  display: flex;
  flex-wrap: wrap;
}
.footer-col{
  width: 25%;
  padding: 0 15px;
}
.footer-col h4{
   font-size: 18px;
      color: burlywood;
      text-transform: capitalize;
      margin-bottom: 30px;
      margin-left: 30px;
}

    </style>
</head>
<body >
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <section class="showcase">
       <header>
      <img class="logo" src="images/logo.png" alt="logo">        
    </header>
   <!--<video src="" muted loop autoplay></video> --> 
      <div class="bg"></div>
      <div class="content">
        <div class="textBox">
          <h2>Join Us Now</h2>
          <ul class="register">
            <li><a href="Registration.php">Sign Up</a></li>
            <li><a href="login.php" class="signin">Sign In</a></li>
          </ul>
        </div>
      </div>
</section>
      <section class="sec-footer">
        <footer class="footer">
             <div class="container">
                <div class="footer-row">
                     <div class="footer-col">
                       <h4>Homepage</h4>
                       <ul>
                           <li><a href="index.html">Homepage</a></li>
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="explore.html">More About the Authors</a></li>
                       </ul>
                     </div>
                     <div class="footer-col">
                       <h4>Get Help</h4>
                       <ul>
                           <li><a href="contactus.html">Contact Us</a></li>
                       </ul>
                     </div>
                     <div class="footer-col">
                       <h4>Shop</h4>
                       <ul>
                           <li><a href="shop.html">Shop</a></li>
                       </ul>
                     </div>
                     <div class="footer-col">
                       <h4>Follow Us</h4>
                       <div class="social-links">
                           <li><a href="facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="instagram.com"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="twitter.com"><i class="fab fa-twitter"></i></a></li>
                       </div>
                     </div>
                </div>
             </div>
          </footer>
        </section>
      
</body>
</html>