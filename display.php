<?php
include_once 'connection.php';

if(!empty($_GET['id'])){
   
    
    //Create connection and select DB
    $db = new mysqli('localhost', 'root', '','book_library');
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
    $result = $db->query("SELECT image FROM images WHERE id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        // Do Nothing
    }
}
?>