
<style>
<?php include 'assets/css/login.css'?>
</style>

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
    <link rel="stylesheet" href="assest/css/login.css">
  <!-- font header -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Indie+Flower&display=swap" rel="stylesheet">
  <!-- font MisAaya -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
  <!-- font list-->
  <link rel="preconnect" href="https://fonts.googleapis.``com``">
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
    </head>
     <body>

    <!-- starrt the main section -->
    <section class="d-flex justify-content-center" >
        <div class="main-box ">
            <h1 style="font-family: 'Raleway', sans-serif;font-size: 27px;font-weight: 700;" class="pt-4 text-center">SIGN WITH</h1>
      <div class="row button-class   mt-4 text-center ">
        <div class="col-md-2 ">
       
        </div>


        <div class="col-md-4   button-facebook">
            <i class="fa-brands fa-facebook-f pt-2 "></i>
         
            </div>


        <div class="col-md-4 ms-2  button-google">
        <img src="assest/imge/google.png" alt="" width="35px" height="40px" class="pt-2">
        </div>
        <div class="col-md-2 ">
            </div>
      </div>
     <form action="processlogin.php" method="post">
   
        <input type="text"class="mt-5 mx-4 px-3 mb-4"  placeholder="inter the Email" name="emailinter"> 
        <input type="password" class="mx-4 px-3 " placeholder="inter the Password" name="passwordinter"> 
        <input type="submit" value="Log In"  name="submitlogin" class="btn-login mx-4 mt-4"style="color:white">
     </form>
     <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="ps-5 pb-5" style="color:red; font-family: 'Cookie', cursive;font-size:22px"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?> 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="ps-5 pb-5" style="color:red; font-family: 'Cookie', cursive;font-size:22px"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

   
     
        </div>






    </section>


    <!-- end the main section -->





    </body>

</html>