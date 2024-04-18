<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['sendsend']))
    {
      
   
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "book_library";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $eil =$_SESSION["User"] ;
        $title = $_POST['Name'];
        $subb = $_POST['Subject'];
        $meme = $_POST['body'];
        $nodo="unseen";
        
        
        if(isset($eil)){
        $sql = "INSERT INTO messages (user_email	,title,subject,	messages,done)
        VALUES ( '$eil','$title','$subb','$meme','$nodo')";
      
        
        }
        if ($conn->query($sql) === TRUE) {
         
           header("location:home.php");
           
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    
    }
 
?>