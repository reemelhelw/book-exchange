<?php

include 'regserver.php';
include 'config.php';

if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  };

  $title = "";
  $content = "";
  $image = "";


if(isset($_POST['submit']))
{
 
$title = $_POST['title'];
$content = mysqli_real_escape_string($link, $_POST['content']);
$userid = $_POST['id'];
echo $userid;
header("location: My Store.php?id=".$_SESSION['id']);

if(isset($_FILES['image']['name'])){
    move_uploaded_file($_FILES['image']['tmp_name'], "image/".$_FILES['image']['name']);
    $img="image/".$_FILES['image']['name'];

     // Insert image content into database 
 $sql = "INSERT INTO user_posts (title, content, image, user_id) VALUES ('$title', '$content', '$img', '$userid')";
 //echo $sql;
 $result=mysqli_query($link, $sql);
 if(!$result){
     die("ERROR: " .mysqli_error($link));
 }
}


};
//





//var_dump($result);
?>