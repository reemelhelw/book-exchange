<?php
include 'update-status.php';
include 'regserver.php';

session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>
    .status-btn{
       border:none; 
       color:white; 
       padding:5px 10px;
       width:100px;
       cursor: pointer;
       box-shadow:0px 0px 15px gray
    }
    .approve{
        background-color:green;
    }
    .disapprove{
        background-color:red;
    }
    </style>
</head>
<body>

<!-- ===== displaying data with approval button ===== -->
<table border="1" cellspacing="0" cellpadding="10" width="50%">
    <tr>
        <th>Request ID</th>
        <!--
        <th>Heading</th>
        <th>Content</th>-->
        <th>Status</th>
        <th>From</th>
        <th>Book Title</th>
        <th>Exhange With</th>
        <th>Book Condition</th>
   </tr>
<?php


$fetchData = fetchData($link);
if(count($fetchData)>0){
$i=1;
foreach($fetchData as $data){

$userid = $_SESSION['id'];
$query = "SELECT * FROM requests WHERE to_user=$userid";
$res = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_array($res);
 $FromUser = $data['username'];
?>
   <tr>
       <?php if($query == true) {?>
   <td><?php echo $data['id']; ?></td>
   
       
       <td><button onclick="updateStatus(<?php echo $data['id'];?>)" id="statusBtn<?php echo $data['id'];?>" class="status-btn <?php echo $data['status']==0?'approve':'disapprove'; ?>"><?php echo $data['status']==0?'Approve':'Disapprove'; ?></button></td>
    <td><?php echo $FromUser; ?></td>
    <tr>
        <?php  $i++; } }
        $sql = "SELECT * FROM user_posts, requests
        WHERE user_posts.id = requests.post_id";
       
       $sqlresult = mysqli_query($link, $sql) or die(mysqli_error($sqlresult));
        while ($row = mysqli_fetch_assoc($sqlresult))
        {
            $postTitle = $row['title'];
            $exchange = $row['exchange_book'];
            $condition = $row['book_condition'];
        
        
        
        
        ?> <td><?php echo $postTitle; ?></td>
        <td><?php echo $exchange; ?></td>
        <td><?php echo $condition; ?></td>
        <?php }
     
    } else{
        echo "no requests";
    }?></tr>
</table>
<!-- ============displaying data with approval button========== -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="custom-ajax.js"></script>

</body>
</html>