<?php
include 'config.php';


/*
$query = "SELECT * FROM user_posts";
    $results = mysqli_query($link, $query);
   $row = mysqli_fetch_assoc($results);
   var_dump($row['title']);
        
       
        if (mysqli_fetch_array($results, MYSQLI_ASSOC)) {
          // output data of each row
          while($row = mysqli_fetch_assoc($results)) {
           echo $row;
            
          }
        }
        else {
            die("ERROR: ".print_r($results));
        }*/
        $result = $link->query("SELECT * FROM user_posts ORDER BY created_at DESC"); 
        
        $sql = "SELECT users.username
        FROM users, user_posts
        WHERE users.id = user_posts.user_id";

        $results = mysqli_query($link, $sql) or die(mysqli_error($link));

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Shop</title>
    </head>
    <body>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo">
                    
                        
                    <?php while ($row = mysqli_fetch_array($result)){ 
                         $rowdata = mysqli_fetch_array($results);
                        ?>  
                        <h2><?php print_r ($rowdata['username']); ?></h2>
                         <?php echo "<br/>";?>
                    
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['content']; ?></p><?php
                   
                    echo'<img height="250px" width="250px" src=data:image;base64,'.$row['image'].'/>'?>
                    <?php
                    $postid = $row['id'];
                    
                    ?>
                       
                           
                    
                    <form method="POST">
                    <a href="request-form.php?id=<?php echo $postid?>">Request</a>
                    
                    </form>
    
                    <?php };?>

                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2>Price</h2>
                        <p>Book 10</p>
                        <a href="#" class="btn btn-default view-item"><i class="glyphicon glyphicon-eye-open"></i>view Book</a>
                    </div>
                </div>

            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to  wishlist</a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i>Add to  cart</a></li>
                </ul>
            </div>
        </div>
    </div>
    </body>
    </html>