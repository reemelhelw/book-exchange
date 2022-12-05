<?php
require('config.php');
include 'regserver.php';



if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
};


//$to_user =;
if(isset($_POST['new_request']))
{
    header("location: view-approved.php?id=".$_SESSION['id']);
    $from_user = $_SESSION['id'];
$query = 'SELECT users.id
FROM users, user_posts
WHERE users.id = user_posts.user_id';

$res = mysqli_query($link, $query) or die(mysqli_error());


 $row = mysqli_fetch_array($res);
 $toUser = $row['id'];
  echo "<br/>";
    $result = $link->query("SELECT * FROM user_posts"); 
    while ($data = mysqli_fetch_assoc($result))
{
    $postid = $data['id'];
   
}

$exchange = $_POST['exchange'];
$condition = $_POST['bookcondition'];

$sql = "INSERT INTO requests (from_user, to_user, book_condition, exchange_book, post_id, created_at, updated_at) VALUES ('$from_user' , '$toUser','$condition','$exchange','$postid', NOW(), NOW())";
mysqli_query($link, $sql);
}
?>





<!DOCTYPE html>
<html>
<head>
    <title>Request Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <link rel="stylesheet" href="css/stylee.css"/>
<body>
    <!--Div for Background-->
<div class="bg text-center">

  <!--Div for Centered Text & Input--> 
  <div class="centered">
      
     


   
     <p class="firstLine"> E &nbsp; X &nbsp; C &nbsp; H &nbsp; A &nbsp; &nbsp; N &nbsp; G &nbsp; E  </p><br/>
   
    <form method="POST">

    <p> <input class="InputStyle" name="exchange" placeholder="Book title        
                          &#xf0e0; " style="font-family:Arial, FontAwesome" type="text"> 
        
        <input class="InputStyle" name="bookcondition" placeholder="Book description        
                          &#xf0e0; " style="font-family:Arial, FontAwesome" type="text"><br/><br/><br/><br/>
                          <input type="hidden" name="to" value="<?php echo $toUser;?>">
        <input class="InputStyle" name="new_request" style="font-family:Arial, FontAwesome" type="submit">
        
          
          </p>

        </form>
    
    
   
  </div>


    </div>
</body>
</html>





