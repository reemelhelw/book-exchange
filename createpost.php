
<?php include 'regserver.php';
$userID = $_SESSION['id'];
?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="css/stylee.css"/>
    
    
        <link href='http://fonts.googleapis.com/css?family=Questrial|Droid+Sans|Alice' rel='stylesheet' type='text/css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div></div>
                
                <div id="content" >
                    <h1> post </h1>

                    <form method="POST" action="insertpost.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Title" class="iconic user" > Title <span class="required">*</span></label>
                            <input type="text" class="form-control text-dark" name="title" id="title"  required="required">
                        </div>
                        <div class="form-group">
                            <label for="usermail" class="iconic mail-alt"> book description <span class="required">*</span></label> 
                            <input type="text" class="form-control" name="content" id="book condition"  required="required"> <br/>
                            <input type="file" class="form-control" name="image" id="book condition"  required="required">
                            <input type="hidden" name="id" value="<?php echo $userID ?>">
                        </div>
                        
                        
                       <br/><br/> <input type="submit" name="submit" value=" ★  submit!" />    	
                    </form>
                </div>
            </div>
            
        </div>
    </body>
</html>    

  




