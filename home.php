

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
  </style>
    </head>
     <body>
<!-- ********start the header******** -->
<nav class="navbar navbar-expand-md  fixed-top bg-black">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto navbar-list ">
                <li class="nav-item active">
                    <a class="nav-link text-light " href="#home">Home<i class="fa-solid fa-angle-down "></i></a>
                </li>
                <li class="nav-item active text-light">
                  <a class="nav-link text-light " href="#services">Services<i class="fa-solid fa-angle-down"></i></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-light " href="#about">About<i class="fa-solid fa-angle-down"></i></a>
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
                <a class="nav-link text-light " href="#Countact">Countact us<i class="fa-solid fa-angle-down"></i></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-light" href="indexlogin.php">LogOut<i class="fa-solid fa-angle-down"></i></a>
          </li>
            </ul>
        </div>
</nav>
<header class="video-wrapper vh-100" id="home">
        <video playsinline autoplay muted loop poster="assest/imge/cake2.png" >
          <source src="assest/imge/111 (1).mp4" type="video/mp4">
        </video>
     
      
        <div class="header">
          <h1>THE BEST</h1>
          <h2>ONLINE BOOK LIBRARY</h2>
           <a href="#">View Our BOOK</a>
          

        
        </div> 
</header>
<!-- ********End the header********** -->
<!-- ********Start the first section********** -->
      <br>
<section>
  <div class="text-center divaffterheader">
 
    <h2 class="header2">Book Introduction : Where She Went </h2>
    
    <h3>Welcome to the Most Popular Library Today</h3>
  <br>
   <p class="line text-center m-auto"></p>
   <i class="fa fa-book  position-absolute translate-middle  ancho-icon"></i>
    <br>

  </div>
  <div class="container ">




    
   <div class="row ">
    <div class="col-md-6">
     <div>
      <img src="assest/imge/books.png" alt="" width="600px">
      
    </div>
    </div>
    <div class="col-md-5 offset-1 mt-5">
      <p class="line-line text-center m-auto  "></p>

   <i class="fa fa-star  position-absolute translate-middle iconn"></i>
   <h1 style="font-family: 'Open Sans', sans-serif;color:#888888;font-weight: 700;line-height: 1;font-size: 15px;text-transform: uppercase;" class="mt-5 text-center">100% CLIENT'S SATISFACTION</h1>
   <p class="text-center" style=" font-family: 'Roboto', sans-serif;color:#888888;font-size: 13px;">We provide 100% customer professional support and clean code to satisfy our clients.</p>
   <p class="line-line text-center mt-3"></p>

   <h1 style="font-family: 'Open Sans', sans-serif;color:#888888;font-weight: 700;line-height: 1;font-size: 15px;text-transform: uppercase;" class="mt-3 text-center">USER FRIENDLY DESIGN QUALITY</h1>
   <p class="text-center" style=" font-family: 'Roboto', sans-serif;color:#888888;font-size: 13px;">The desgin of the book library is very user friendly easy to use and customize the design and site.</p>
   <p class="line-line text-center mt-3 "></p>
   <h1 style="font-family: 'Open Sans', sans-serif;color:#888888;font-weight: 700;line-height: 1;font-size: 15px;text-transform: uppercase;" class="mt-3 text-center">GREAT IMPRESSION ON WEBSITE VISITORS</h1>
   <p class="text-center" style=" font-family: 'Roboto', sans-serif;color:#888888;font-size: 13px;">The exciting look of the book library gives a wonder full impression to the visitors and provide the traffic.</p>
   <p class="line-line text-center mt-3"></p>

   
      <div>
     
    <div class="text-center">
     
</div>
     </div>
     </div>
</div>
</div>  
</section>
      <br>
<!-- ********End the first section********** -->
<section class="section3" id="services">
      <div class="main-section " style="height:950px">
        <div class="section-secandry"style="height:950px;">
          <div class=" text-center pb-3">
            <h1 style="font-size:60px">Ous Books</h1>
          </div>
          <nav>
            <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab"  role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">ALL</button>
              <button class="nav-link" id="nav-Funny-tab" data-bs-toggle="tab" data-bs-target="#nav-Funny" type="button" role="tab" aria-controls="nav-Funny" aria-selected="false">Funny</button>
              <button class="nav-link" id="nav-Politician-tab" data-bs-toggle="tab" data-bs-target="#nav-Politician" type="button" role="tab" aria-controls="nav-Politician" aria-selected="false">Politician</button>
              <button class="nav-link" id="nav-Economic-tab" data-bs-toggle="tab" data-bs-target="#nav-Economic" type="button" role="tab" aria-controls="nav-Economic" aria-selected="false">Economic</button>
              <button class="nav-link" id="nav-Novel-tab" data-bs-toggle="tab" data-bs-target="#nav-Novel" type="button" role="tab" aria-controls="nav-Novel" aria-selected="false">Novel</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">

            <div class="carousel pt-5" data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true }'>
    
    <?php
        include_once 'connection.php';

                
        //Create connection and select DB
        $db = new mysqli('localhost', 'root','', 'book_library');
        
        //Check connection
        if($db->connect_error){
           die("Connection failed: " . $db->connect_error);
        }
                 
      
        //Get image data from database
        $result = $db->query("SELECT id, created,name,type FROM images order by created DESC  limit 100");
      
        While($imgData = $result->fetch_assoc()){   
                   ?>
                     <div class="carousel-cell">
                     <?php
                      echo "<img data-u='image' src='display.php?id=". $imgData['id'] . "' class='w-100' >";  
                     
                     ?>
                     <div class="text-center div-write  pb-5" style="background-color: rgba(224, 219, 219, 0.7);box-shadow:   5px 3px 20px 0px #888888;">
                   <span style="font-size:30px; font-family:'Josefin Sans', sans-serif;color:#194105"><?php echo $imgData['name']; ?></span><br>
                   <span style="font-size:20px; font-family:'Josefin Sans', sans-serif;color:"><?php echo $imgData['type']; ?></span><br>
                   <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                   <br>
                   <a href="book.php?varname=<?php echo $imgData['id']; ?>">Move on</a>
                  </div>
                 
                     </div>
                     <?php
                  }
                  ?>

  </div>


            </div>
            <div class="tab-pane fade" id="nav-Funny" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
         
            <div class="carousel pt-5" data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true }'>
    
    <?php
        include_once 'connection.php';

                
        //Create connection and select DB
        $dbb = new mysqli('localhost', 'root','', 'book_library');
        
        //Check connection
        if($dbb->connect_error){
           die("Connection failed: " . $dbb->connect_error);
        }
                 
      
        //Get image data from database
        $resultt = $dbb->query("SELECT id, created,name,type FROM images  where type='funny' order by created DESC  limit 100");
      
        While($imgDataa = $resultt->fetch_assoc()){   
                   ?>
                     <div class="carousel-cell">
                     <?php
                      echo "<img data-u='image' src='display.php?id=". $imgDataa['id'] . "' class='w-100' >";  
                     
                     ?>
                     <div class="text-center div-write  pb-5" style="background-color: rgba(224, 219, 219, 0.7);box-shadow:   5px 3px 20px 0px #888888;">
                   <span style="font-size:30px; font-family:'Josefin Sans', sans-serif;color:#194105"><?php echo $imgDataa['name']; ?></span><br>
                   <span style="font-size:20px; font-family:'Josefin Sans', sans-serif;color:"><?php echo $imgDataa['type']; ?></span><br>
                   <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                   <br>
                   <a href="book.php?varname=<?php echo $imgDataa['id']; ?>">Move on</a>
                  </div>
                 
                     </div>
                     <?php
                  }
                  ?>

  </div>
            </div>
            <div class="tab-pane fade" id="nav-Politician" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

            <?php
        include_once 'connection.php';

                
        //Create connection and select DB
        $db = new mysqli('localhost', 'root','', 'book_library');
        
        //Check connection
        if($db->connect_error){
           die("Connection failed: " . $db->connect_error);
        }
                 
      
        //Get image data from database
        $result = $db->query("SELECT id, created,name,type FROM images where type='politician'");
      
        While($imgData = $result->fetch_assoc()){   
                   ?>
                     <div class="carousel-cell">
                     <?php
                      echo "<div> <img data-u='image' src='display.php?id=". $imgData['id'] . "' class='w-100' ></div>";  
                     
                     ?>
                     <div class="text-center div-write  pb-5" style="background-color: rgba(224, 219, 219, 0.7);box-shadow:   5px 3px 20px 0px #888888;">
                   <span style="font-size:30px; font-family:'Josefin Sans', sans-serif;color:#194105"><?php echo $imgData['name']; ?></span><br>
                   <span style="font-size:20px; font-family:'Josefin Sans', sans-serif;color:"><?php echo $imgData['type']; ?></span><br>
                   <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                   <br>
                   <a href="book.php?varname=<?php echo $imgData['id']; ?>">Move on</a>
                  </div>
                 
                     </div>
                     <?php
                  }
                  ?>






            </div>
            <div class="tab-pane fade" id="nav-Economic" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
            <?php
        include_once 'connection.php';

                
        //Create connection and select DB
        $db = new mysqli('localhost', 'root','', 'book_library');
        
        //Check connection
        if($db->connect_error){
           die("Connection failed: " . $db->connect_error);
        }
                 
      
        //Get image data from database
        $result = $db->query("SELECT id, created,name,type FROM images where type='economic'");
      
        While($imgData = $result->fetch_assoc()){   
                   ?>
                     <div class="carousel-cell">
                     <?php
                      echo "<div> <img data-u='image' src='display.php?id=". $imgData['id'] . "' class='w-100' ></div>";  
                     
                     ?>
                     <div class="text-center div-write  pb-5" style="background-color: rgba(224, 219, 219, 0.7);box-shadow:   5px 3px 20px 0px #888888;">
                   <span style="font-size:30px; font-family:'Josefin Sans', sans-serif;color:#194105"><?php echo $imgData['name']; ?></span><br>
                   <span style="font-size:20px; font-family:'Josefin Sans', sans-serif;color:"><?php echo $imgData['type']; ?></span><br>
                   <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                   <br>
                   <a href="book.php?varname=<?php echo $imgData['id']; ?>">Move on</a>
                  </div>
                 
                     </div>
                     <?php
                  }
                  ?>




            </div>


            <div class="tab-pane fade" id="nav-Novel" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">

            <?php
        include_once 'connection.php';

                
        //Create connection and select DB
        $db = new mysqli('localhost', 'root','', 'book_library');
        
        //Check connection
        if($db->connect_error){
           die("Connection failed: " . $db->connect_error);
        }
                 
      
        //Get image data from database
        $result = $db->query("SELECT id, created,name,type FROM images where type='novel'");
      
        While($imgData = $result->fetch_assoc()){   
                   ?>
                     <div class="carousel-cell">
                     <?php
                      echo "<div> <img data-u='image' src='display.php?id=". $imgData['id'] . "' class='w-100' ></div>";  
                     
                     ?>
                     <div class="text-center div-write  pb-5" style="background-color: rgba(224, 219, 219, 0.7);box-shadow:   5px 3px 20px 0px #888888;">
                   <span style="font-size:30px; font-family:'Josefin Sans', sans-serif;color:#194105"><?php echo $imgData['name']; ?></span><br>
                   <span style="font-size:20px; font-family:'Josefin Sans', sans-serif;color:"><?php echo $imgData['type']; ?></span><br>
                   <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                   <br>
                   <a href="book.php?varname=<?php echo $imgData['id']; ?>">Move on</a>
                  </div>
                 
                     </div>
                     <?php
                  }
                  ?>


            
</div>
          </div>

          </div>
     </div>
</section>
<!--the start of about au-->
     <section class="mt-5" id="about">
      <div class="position-relative">
         
        <h1 class=" text-center h2class ">About Us</h1>
        <h3 class=" position-absolute h3class translate-middle">About Us</h3>

      </div>
<div class="container mt-5">
  <div class="row align-items-center">
    <div class="col-md-6 imgg-class text-center">
<img src="assest/imge/about-3.webp" alt="" width="75%" height="100%" >
    </div>
    <div class="col-md-5 offset-1 ">
      <h1 style="font-family: 'Cookie', cursive;;font-weight: 500;font-size: 35px;" >Our Vistion</h1><br>

    <p style="   font-family:'Josefin Sans', sans-serif;font-weight: 500;">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores libero nihil velit consequuntur fugiat obcaecati<br> provident esse magni, beatae est sunt possimus. Officiis non velit, <br>magni ullam tempore rem expedita!
         </p>
         <p style="    font-family:'Josefin Sans', sans-serif;font-weight: 500;">  Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Dolores libero nihil velit consequuntur fugiat obcaecati provident esse <br>magni, beatae est sunt possimus. Officiis non velit, magni ullam<br> tempore rem expedita!
        </p>
    </div>

    <div class="col-md-5 mt-3 ">
      <h1 style="font-family: 'Cookie', cursive;;font-weight: 500;font-size: 35px;">our Project</h1><br>

      <p style="   font-family:'Josefin Sans', sans-serif;font-weight: 500;">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores libero nihil velit consequuntur fugiat obcaecati<br> provident esse magni, beatae est sunt possimus. Officiis non velit, <br>magni ullam tempore rem expedita!
      </p>
      <p style="    font-family:'Josefin Sans', sans-serif;font-weight: 500;">  Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Dolores libero nihil velit consequuntur fugiat obcaecati provident esse <br>magni, beatae est sunt possimus. Officiis non velit, magni ullam<br> tempore rem expedita!
     </p>
    </div>
    <div class="col-md-6 offset-1 mt-5 imgg-class text-center">
      <img src="assest/imge/home-2-siider-1_b7084a39-db26-4dc2-8dfb-5688d8912c2a.webp" alt="" width="75%" height="100%" >
          </div>
  </div>
  </div>
</section>
<!-- the end of about us -->
<!-- the start section img -->
<section>
  <div class=" fluid-img mt-5 text-center">
    <h1 class=" " >Book Your<br>Own Adventures</h1>
    <br>
    <p >Our top books, exclusive content <br>and competitions. <br>Straight to your inbox.</p>
  </div>
</section>
  <!-- the end section img -->
  <!-- the start of section Portfolio -->
<section class="mt-5">
        <div class="position-relative mb-5">
         
          <h1 class=" text-center h2class ">Meet Our Team</h1>
          <h3 class=" position-absolute h3class translate-middle">Meet Our Team</h3>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-3 team-css text-center classs1">
              <div class="img-team ">
            <img src="assest/imge/pexels-photo-7567491.jpeg" alt="" width="70%" height="180px" style="border-radius: 50%; border: 1px solid #47C607;" class="mt-4" >
            </div>
            <div>
              
<h1 class="text-center mt-3"  style=" font-size: 20px;  font-family:'Josefin Sans', sans-serif;font-weight: 700;">Omar Mahmoud</h1>

<p style="   font-family:'Josefin Sans', sans-serif;font-weight: 500;"> provident esse magni, beatae est sunt possimus. Officiis non velit,magni ullam tempore rem expedita!
</p>
<a href="#" ><i class="fa-brands fa-facebook fs-4"></i></a><a href="#" class="px-2"><i style="color:#9FA4EC" class="fa-brands fa-linkedin fs-4"></i></a><a href="#"><i style="color:#F63838 ;" class="fa-brands fa-instagram fs-4"></i></a>

            </div>

            </div>
            <div class="col-md-3 team-css text-center classs1" >
              <div class="img-team ">
            <img src="assest/imge/pexels-photo-789822.webp" alt="" width="70%" height="180px" style="border-radius: 50%; border: 1px solid #47C607;" class="mt-4" >
            </div>
            <div>
              
<h1 class="text-center mt-3"  style=" font-size: 20px;  font-family:'Josefin Sans', sans-serif;font-weight: 700;">Aya Salem</h1>

<p style="   font-family:'Josefin Sans', sans-serif;font-weight: 500;"> provident esse magni, beatae est sunt possimus. Officiis non velit,magni ullam tempore rem expedita!
</p>
<a href="#" ><i class="fa-brands fa-facebook fs-4"></i></a><a href="#" class="px-2"><i style="color:#9FA4EC" class="fa-brands fa-linkedin fs-4"></i></a><a href="#"><i style="color:#F63838 ;" class="fa-brands fa-instagram fs-4"></i></a>

            </div>

            </div>

            <div class="col-md-3 team-css text-center classs1   " >
              <div class="img-team ">
            <img src="assest/imge/pexels-photo-3778603.jpeg" alt="" width="70%" height="180px" style="border-radius: 50%; border: 1px solid #47C607;" class="mt-4" >
            </div>
            <div>
              
<h1 class="text-center mt-3"  style=" font-size: 20px;  font-family:'Josefin Sans', sans-serif;font-weight: 700;">Khaleed Mousa</h1>

<p style="   font-family:'Josefin Sans', sans-serif;font-weight: 500;"> provident esse magni, beatae est sunt possimus. Officiis non velit,magni ullam tempore rem expedita!
</p>
<a href="#" ><i class="fa-brands fa-facebook fs-4"></i></a><a href="#" class="px-2"><i style="color:#9FA4EC" class="fa-brands fa-linkedin fs-4"></i></a><a href="#"><i style="color:#F63838 ;" class="fa-brands fa-instagram fs-4"></i></a>

            </div>

            </div>

            <div class="col-md-3 team-css text-center classs1" >
              <div class="img-team ">
            <img src="assest/imge/pexels-photo-12911738.jpeg" alt="" width="70%" height="180px" style="border-radius: 50%; border: 1px solid #47C607;" class="mt-4" >
            </div>
            <div>
              
<h1 class="text-center mt-3"  style=" font-size: 20px;  font-family:'Josefin Sans', sans-serif;font-weight: 700;">Misam Kamal</h1>

<p style="   font-family:'Josefin Sans', sans-serif;font-weight: 500;"> provident esse magni, beatae est sunt possimus. Officiis non velit,magni ullam tempore rem expedita!
</p>
<a href="#" ><i class="fa-brands fa-facebook fs-4"></i></a><a href="#" class="px-2"><i style="color:#9FA4EC" class="fa-brands fa-linkedin fs-4"></i></a><a href="#"><i style="color:#F63838 ;" class="fa-brands fa-instagram fs-4"></i></a>

            </div>

            </div>



          </div>

        </div>




      
</section>
 <!-- the end of section Portfolio -->
<!-- the start of countact us  -->
<section class="mt-5" id="Countact">
<div class="position-relative">
         
  <h1 class=" text-center h2class ">Contact Us</h1>
  <h3 class=" position-absolute h3class translate-middle">Contact Us</h3>

</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-7  countactus-us" >

      <!-- <h1 style="color:#DAB143;font-size: 30px;font-weight:100;  font-family: 'Abril Fatface', cursive;font-family: 'Dancing Script', cursive;" class="text-center pt-5">Always stay in touch with us</h1> -->

      <form action="mess.php" method="post">
        <h1 class="">Title</h1>
        <input type="text" placeholder="inter the title" name="Name">
<br>  
<h1>Subject</h1>
<input type="text" placeholder="inter the Subject" name="Subject">
<br>
<h1>Message</h1>
<input type="text" placeholder="inter the Message" class="message" name="body">
<br>
<br>
<input type="submit"class="btn form-btn btn-purple vv d sub-heading" style="margin-top:-4px" value="Send Message" name="sendsend">


                            <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
                       
      </form>
    
    </div>

    <div class="col-md-5  map-countactus">
      <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=&amp;height=600&amp;hl=en&amp;q=Palestine&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpenation.com/">https://mcpenation.com</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:600px;}.gmap_iframe {height:600px!important;}</style></div>  </div>

</div>
</div>
</section>




<!-- the end of countact us -->

   
<br>
<br>

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







      <!-- ******Start the secand section******** -->
      <!-- <section >
        <div class="section2 my-5 mx-5 text-center">
          <h1 class="pt-5">Breads delivered<br>
            to you daily</h1>
            <br>
          <h2>WE ARE PASSIONATE BAKERS AND WE LOVE TO BAKE.</h2>
        
        </div>

      </section> -->
      <!-- ******End the secand section******** -->
    

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


    </body>

</html>