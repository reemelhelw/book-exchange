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
  }



function fetchData($link){
    $sqlselect = "SELECT * FROM requests, user_posts WHERE requests.to_user = $userid AND user_posts.user_id = $userid";
    $selectresult = $link->query($sqlselect);
    
    if ($selectresult->num_rows > 0) {
    $row= $selectresult->fetch_all(MYSQLI_ASSOC);
    echo $row;  
}else{
    echo 'No new requests';
}
}

?>