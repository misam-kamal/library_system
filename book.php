
<?php
    session_start();
    if(!isset($_SESSION["User"]))
	header("location:indexlogin.php");
?>
<style>
<?php include 'assest/css/index.css'?>
</style>


 <?php 
     
     require_once('connection.php');
     $queryidd="select user_id  from user where user_email='".$_SESSION["User"]."'";
              $resultidd= mysqli_query($con,$queryidd);
              $rowq = mysqli_fetch_assoc($resultidd);
   $v11=$rowq['user_id']; #the user id
   
   
   ?> 

<!DOCTYPE HTML>
<html>
<head>
    <title>
        bootstrap
    </title>
        <!-- the bootstrap for css -->
    <link rel="stylesheet" href="assest/css/bootstrap.min.css">
        <!-- the bootstrap for js -->
    <script src="assest/js/bootstrap.bundle.js"></script>
    <!-- the link for font -->
    <link rel="stylesheet" href="assest/css/all.min.css">
    <link rel="stylesheet" href="assest/css/index.css">
  <!-- font header -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Indie+Flower&display=swap" rel="stylesheet">
  <!-- font MisAaya -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
  <!-- font list-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">

  <!-- ----- -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
  
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/jq.js">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/po.js">
  <link rel="stylesheet" href="assets/css/bo.js">

    <!--  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
<!--  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">
<!--  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Fleur+De+Leah&display=swap" rel="stylesheet">
<!--  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&family=Quintessential&display=swap" rel="stylesheet">
<!--  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bowlby+One+SC&display=swap" rel="stylesheet">
<!--  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Combo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <style media="screen">
  .carousel-cell {
    width:20%;
  
   
    }

    /* cell number */
    .carousel-cell:before {
      display: block;
    }
    .carousel{
      width:90%;
      
      padding-left:120px
    }
    body{
        height: 1000px;
    }
    .dis-book i{
      font-size:23px;
      color:#47C607;
    }
  </style>
    </head>
     <body>
<!-- ********start the header******** -->
<nav class="navbar navbar-expand-md  fixed-top ">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto navbar-list ">
                <li class="nav-item active">
                    <a class="nav-link text-black" href="#">Home<i class="fa-solid fa-angle-down "></i></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link text-black" href="#">Services<i class="fa-solid fa-angle-down"></i></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-black" href="#">About<i class="fa-solid fa-angle-down"></i></a>
            </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
          <h1 style="font-family: 'Alex Brush', cursive; font-size:40px; ;">Book</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto navbar-list2">
              <li class="nav-item active">
                <a class="nav-link text-black" href="#">Countact us<i class="fa-solid fa-angle-down"></i></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-black" href="usercards.php">LogOut<i class="fa-solid fa-angle-down"></i></a>
          </li>
            </ul>
        </div>
</nav>
<!-- ********End the header********** -->
<!-- ********Start the first section********** -->

 
<!-- the end of countact us -->
<div class="container" style="padding-top:150px">

  <div class="row align-items-center">

    <div class="col-md-4">
<div class="img-book">

<?php
        include_once 'connection.php';

                
        //Create connection and select DB
        $db = new mysqli('localhost', 'root','', 'book_library');
        
        //Check connection
        if($db->connect_error){
           die("Connection failed: " . $db->connect_error);
        }
                 
      
        //Get image data from database
        $result = $db->query("SELECT name,type,link FROM images where id='".$_GET['varname']."'");           
     echo "<div> <img data-u='image' src='display.php?id=".$_GET['varname']. "' class='w-100' style='border-radius:10px;'></div>";  
                                      
?>
</div>
    </div>
    <div class="col-md-8">
<div class="dis-book ps-5">

<?php
  While($imgData = $result->fetch_assoc()){  
    
  ?>
  <h1 style="font-family: 'Bowlby One SC', cursive;font-family: 'Fleur De Leah', cursive;font-size:70px;color:#194105;">
 
  <?php
 
    echo $imgData['name']."  ".'<i class="fa-solid fa-heart fs-6"></i>';
?>

</h1>
<span style="font-size:35px;font-family: 'Alex Brush', cursive; color:#194105;width:50px;hight:500px">

 <?php
  
    echo "*".$imgData['type']."*";
    ?>

</span>
<br>
<p style="font-family: 'Abril Fatface', cursive;
font-family: 'Combo', cursive;font-size:18px">You can click on the link and download the file so that you can<br> read the book with ease (we always strive to facilitate you in all<br> possible ways), enjoy your time<br>If you encounter any problems, you can contact us through the main page</p>
  <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
    <br>
   <br>

    <a href='<?php echo $imgData['link']; ?>' style="font-family: 'Abril Fatface', cursive;
font-family: 'Combo', cursive;font-size:18px;color:red;border: 1px solid #8888;padding:10px; box-shadow:2px 2px 5px 0px #888888;">click here to go to link</a>
    <?php
   

}

?>
</div>

      </div>

  </div>


</div>
   
<br>



<!-- the start of footer -->
<footer class="footer-distributed bg-black">

  <div class="footer-left">
      <h3>Book<span>Library</span></h3>
  
      <p class="footer-links">
          <a href="/index.html" style="font-family: 'Josefin Sans', sans-serif">Home</a>
          |
          <a href="#" style="font-family: 'Josefin Sans', sans-serif">About</a>
          |
          <a href="#" style="font-family: 'Josefin Sans', sans-serif">Contact</a>
          
         
      </p>
  
      <p class="footer-company-name">Copyright © 2021 <strong>Book</strong> All rights reserved</p>
  </div>
  
  <div class="footer-center">
      <div>
          <i class="fa fa-map-marker"></i>
          <p style="font-family: 'Josefin Sans', sans-serif;"><span style="font-family: 'Josefin Sans', sans-serif;">Ramallah</span>
            Al Ersal Street</p>
      </div>
  
      <div>
          <i class="fa fa-phone" ></i>
          <p style="font-family: 'Josefin Sans', sans-serif">059-220-9336</p>
      </div>
      <div>
          <i class="fa fa-envelope"></i>
          <p style="font-family: 'Josefin Sans', sans-serif; font-size: 15px;"><a href="mailto:sagar00001.co@gmail.com">book_library@gmail.com</a></p>
      </div>
  </div>
  <div class="footer-right">
      <p class="footer-company-about"style="font-family: 'Josefin Sans', sans-serif;">
          <span style="font-family: 'Josefin Sans', sans-serif;">About  book library</span>
          <strong> book library</strong>It is a site that enables you to read novels
          and books with ease, so that it is easy for you
          to access sitest that contribute to reading books online.

        
          
      </p>
      <div class="footer-icons">
          <a href="#" ><i class="fa-brands fa-facebook-f"style="color:#Db8e88"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"style="color:#Db8e88"></i></a>
          <a href="#"><i class="fa-brands fa-whatsapp"style="color:#Db8e88"></i></a>
          <a href="#"><i class="fa-brands fa-github"style="color:#Db8e88"></i></a>
          <a href="#"><i class="fa-brands fa-telegram"style="color:#Db8e88"></i></a>
      </div>
  </div>
  </footer>
  
  
<!-- the end of footer -->

    

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>
</html>