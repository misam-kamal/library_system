<?php
include_once 'connection.php';

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
	
        /*
         * Insert image data into database
         */
        
         //Create connection and select DB
        $db =  new mysqli('localhost', 'root', '','book_library');
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
       
        // //Insert image content into database
        // $insert = $db->query("INSERT into images (image, created,type,name) VALUES ('$imgContent', '$dataTime',$_POST['type'], $_POST['name'])");
        
        $type=$_POST['type'];
        $name = $_POST['name'];
        $link=$_POST['link'];
      $insert= $db->query("INSERT INTO images (image,created,type,name,link)
                    VALUES ('$imgContent', '$dataTime','$type','$name','$link')");
        
        if($insert){
            echo "File uploaded successfully. <a href='upload.php'>Upload More</a>";
        }else{
            echo "File upload failed, <a href='upload.php'>please try again</a>.";
        } 
    }else{
        echo "You have not selected any image. <a href='upload.php'>please try again</a>.";
    }
}
?>