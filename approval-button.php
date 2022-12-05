<?php
include 'update-status.php';
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

  $userID = $_SESSION['id'];
  echo $userID;
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/requeststyle.css" />
</head>
<div class="page">
  <div class="page__demo">
    <div class="main-container page__container">
      <table class="table">
        <thead class="table__thead">
          <tr class="table__head">
            <th class="table__th">Request ID</th>
            <th class="table__th">Status</th>
            <th class="table__th">From</th>
            <th class="table__th">Book Title</th>
            <th class="table__th">Exchange With</th>
            <th class="table__th">Book Condition</th>
          </tr>
        </thead>
          
          
          <?php
 $queryreq = "SELECT * FROM requests WHERE to_user=$userID";
 $queryreqres= mysqli_query($link, $queryreq) or die(mysqli_error($link));

while ($rowdata = mysqli_fetch_array($queryreqres))
{
    $toUser = $rowdata['to_user'];
?>
          
          
        <tbody class="table__tbody">
          <tr class="table__tr">
            <td class="table__td table__mobile-title">
              <span><?php echo $rowdata['id']; ?></span>
            </td>
            <td class="table__td">
              
              <span class="table__value"><button onclick="updateStatus(<?php echo $rowdata['id'];?>)" id="statusBtn<?php echo $rowdata['id'];?>" class="status-btn <?php echo $rowdata['status']==0?'approve':'disapprove'; ?>"><?php echo $rowdata['status']==0?'Approve':'Disapprove'; ?></button></span>
            </td>
            <td class="table__td">
              
                <?php

$query = "SELECT users.username FROM users, requests WHERE users.id = requests.from_user";
 $queryres= mysqli_query($link, $query) or die(mysqli_error($link));

while ($data = mysqli_fetch_array($queryres))
{
    
    $fromUser = $data['username'];?>
              <span class="table__value"><?php echo $fromUser; ?></span>
            </td>
               <?php
};

 $sql = "SELECT * FROM user_posts, requests
        WHERE user_posts.id = requests.post_id";
       
       $sqlresult = mysqli_query($link, $sql) or die(mysqli_error($sqlresult));
        while ($row = mysqli_fetch_assoc($sqlresult))
        {
            $postTitle = $row['title'];
            $exchange = $row['exchange_book'];
            $condition = $row['book_condition'];
        
        
        
        
        ?>
              
           
              <?php }?>

<td class="table__td">
              
<span class="table__value"><?php echo $postTitle; ?></span>
</td>

  
<td class="table__td">

<span class="table__value"><?php echo $exchange; ?></span>
</td>

<td class="table__td">

<span class="table__value"><?php echo $condition; ?></span>
</td></tr>
          
          <?php }?>
            
          
        </tbody>
      </table>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="custom-ajax.js"></script>
</div>
</html>