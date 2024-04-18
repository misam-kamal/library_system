<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Slider using Flickity Plugin | HackerRahul.com</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
         <!-- the bootstrap for css -->
         <link rel="stylesheet" href="assest/css/bootstrap.min.css">
        <!-- the bootstrap for js -->
    <script src="assest/js/bootstrap.bundle.js"></script>
    <!-- the link for font -->
    <link rel="stylesheet" href="assest/css/all.min.css">
  </head>
  <style media="screen">
  .carousel-cell {
    width:60%;
   
    }

    /* cell number */
    .carousel-cell:before {
      display: block;
    }
  </style>
  <body>
    <h1 class="w3-center">Simple Slider using Flickity Plugin By HACKERRAHUL</h1>
    <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true }'>
    
      <?php
					include_once 'connection.php';

									
					//Create connection and select DB
					$db = new mysqli('localhost', 'root','', 'book_library');
					
					//Check connection
					if($db->connect_error){
					   die("Connection failed: " . $db->connect_error);
					}
                   
				
					//Get image data from database
					$result = $db->query("SELECT id, created FROM images order by created DESC  limit 100");
				
					While($imgData = $result->fetch_assoc()){     
                     ?>
                       <div class="carousel-cell">
                       <?php
                        echo "<div> <img data-u='image' src='display.php?id=". $imgData['id'] . "' class='w-100' ></div>";  
                       ?>
                       </div>
                       <?php
                    }
                    ?>
   
    
    </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  </body>
</html>