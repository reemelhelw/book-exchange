<?php
include("config.php");

if(isset($_POST['updateId'])){
    $updateId = $_POST['updateId'];
    updateStatus($link, $updateId);
}

function updateStatus($link, $updateId){

    $getStatus= getStatus($link, $updateId);
    if(!empty($getStatus)){

        if($getStatus['status']==0){
            $sql = "UPDATE requests SET status=1 WHERE id=$updateId";
            
        if ($link->query($sql) === TRUE) {
             echo 1;
          } 
        }elseif($getStatus['status']==1){
           $sql = "UPDATE requests SET status=0 WHERE id=$updateId";
           
        if ($link->query($sql) === TRUE) {
            echo 0;
          } 
        }
       

    }else{
        echo "No data is exist in database";
    }

}

function getStatus($link, $id){

    $query= "SELECT status FROM requests WHERE id=$id";
    $result = $link->query($query);
    
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
    }else{
       $row =[];
    }
    return $row;

}

function fetchData($link){
    
    $sql = "SELECT * FROM requests";
    $result = $link->query($sql);
    
    if ($result->num_rows > 0) {
    $row= $result->fetch_all(MYSQLI_ASSOC);
    return $row;  
}else{
    return $row=[];
}
}
?>