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
  }?>
<html>
  <head>
  <link rel="stylesheet" href="css/requeststyle.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<div class="page">
  <div class="page__demo">
    <div class="main-container page__container">
      <table class="table">
        <thead class="table__thead">
          <tr class="table__head">
            <th class="table__th">Request ID</th>
            <th class="table__th">Status</th>
            <th class="table__th">Payment</th>
            <!--<th class="table__th">To</th>-->
            <th class="table__th">Book Title</th>
            <th class="table__th">Exchange With</th>
            <th class="table__th">Book Condition</th>
          </tr>
        </thead>
          <?php
          $user_ID = $_SESSION['id'];
 $query = "SELECT *
 FROM users, requests, user_posts
 WHERE user_posts.user_id = requests.to_user AND requests.from_user = $user_ID "; //recheck this
 $res = mysqli_query($link, $query) or die(mysqli_error($link));

$fetchData = fetchData($link);
if(count($fetchData)>0){
$i=1;
foreach($fetchData as $data){
   
$data = mysqli_fetch_array($res);
 $FromUser = $data['username'];
}};
          $user_ID = $_SESSION['id'];
 $query = "SELECT *
 FROM users, requests, user_posts
 WHERE requests.from_user = $user_ID AND requests.to_user = user_posts.user_id ";
 $res = mysqli_query($link, $query) or die(mysqli_error($link));

$fetchData = fetchData($link);
if(count($fetchData)>0){
$i=1;
foreach($fetchData as $data){
   
$data = mysqli_fetch_array($res);
 $FromUser = $data['to_user'];?>
          
        <tbody class="table__tbody">
          <tr class="table__tr">
            <td class="table__td table__mobile-title">
              <span><?php echo $data['id'];?></span>
            </td>
            <td class="table__td">
                 
                <span class="table__value"><?php
if($data['status'] == 1){
echo 'approved';
 $i++; }

 elseif ($data['status'] == NULL) {
  echo "Pending";
  $i++;
}


 else{
  echo 'rejected';
 $i++;
 }
?></span>

<td class="table__td">
                 
                <span class="table__value"><?php
if($data['status'] == 1){?>
  <a href="https://www.paypal.com/eg/signin"><button class="btn btn-success"><?php echo 'Pay';?></button></a>
<?php
 $i++; }
?></span>
            <!--<td class="table__td">
              
              <span class="table__value"><?php// echo $FromUser;?></span>
            </td>-->

                <?php
        
    } 

$sql = "SELECT * FROM user_posts, requests
        WHERE user_posts.id = requests.post_id
        AND user_posts.user_id = requests.to_user";
      
       $sqlresult = mysqli_query($link, $sql) or die(mysqli_error($sqlresult));
        while ($row = mysqli_fetch_assoc($sqlresult))
        {
            $postTitle = $row['title'];
            $exchange = $row['exchange_book'];
            $condition = $row['book_condition'];?>
            
        
        
        <td class="table__td">
              
              <span class="table__value"><?php echo $postTitle;?></span>
            </td>
        
              <td class="table__td">
              
              <span class="table__value"><?php echo $exchange;?></span>
            </td>
        
              <td class="table__td">
              
              <span class="table__value"><?php echo $condition;?></span>
            </td>
        
        
              <?php
        } }?>
             
           
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</html>