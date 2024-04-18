<?php
    session_start();
    if(!isset($_SESSION["User"]))
	header("location:indexlogin.php");
?>
<!-- <?php
require_once('connection.php');
$queryiddu="select admin-id  from admin where admin_email='".$_SESSION["User"]."'";
$resultiddu= mysqli_query($con,$queryiddu);


$rowqd= mysqli_fetch_assoc($resultiddu);
$v11d=$rowqd['admin-id']; #the user id

?> -->


<style>
<?php include 'assest/css/adminundex.css'; ?>
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

  <!--  -->
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

      <section>
        <div class="row vh-100">
            <div class="col-sm-2  control-manger">
                <div class="text-center mt-5 ">
                    <h1 style="font-family: 'Bowlby One SC', cursive;font-family: 'Cinzel Decorative', cursive;;font-size:28px;color: #b5b5b4;" class="text-center mt-5">Welcome TO Mangment</h1>
                    <i class="fa-solid fa-file"></i>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;"class="mt-5" >
                </div>
                <div class="text-center add-userdiv ">
                    <a href="adminindex.php" class="add-user">Add User<i class="fa-solid fa-user-plus  " style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div>
                <div class="text-center add-userdiv ">
                    <a href="edituser.php" class="add-user">Edit/Delete User<i class="fa-solid fa-user-pen ps-1" style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div>
                <div class="text-center add-userdiv ">
                    <a href="upload.php" class="add-user">Add Book<i class="fa-solid fa-user-minus ps-1" style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div>
                
                <div class="text-center add-userdiv ">
                    <a href="adminmessages.php" class="add-user">Messagge<i class="fa-solid fa-message ps-1"style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div>
                <div class="text-center add-userdiv ">
                    <a href="upload.php" class="add-user">Logout<i class="fa-solid fa-right-from-bracket ps-1" style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div>
                <!-- <div class="text-center add-userdiv ">
                    <a href="#" class="add-user">Log OUT<i class="fa-solid fa-right-from-bracket ps-1" style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div> -->
            </div>
            <div class="col-sm-10 ">
                <div class="text-center" >
                    <h1 class="text-center mt-5" style="font-size:40px;font-family: 'Bowlby One SC', cursive;font-family: 'Cinzel Decorative', cursive;">Add The User</h1>


                    <form method="post" action="adminindex.php" class="text-center mt-5">
                        
                    <input type="text" placeholder="please inter the name" class="ms-3" name="addname">
                    <input type="email" placeholder="please inter the email" class="ms-3" name="addemail">
                    <input type="password" placeholder="please inter the Password" class="ms-3" name="addpassword">
                    <input type="text" placeholder="please inter the address" class="ms-3" name="addaddress">
                  
                   <input type="submit"  value="Add User"  class="btn-add ms-3" name="adduser">
                    </form>
                         
      <?php
      if(isset($_POST['adduser'])){
          $nameusername=$_POST['addname'];
        $emailuseremail = $_POST['addemail'];
        $passworduserpass= $_POST['addpassword'];
       $addressuesradd= $_POST['addaddress'];
      $s="INSERT INTO user (user_name,user_email,user_password,user_address)
                    VALUES ('$nameusername',' $emailuseremail','$passworduserpass','$addressuesradd')";
                    mysqli_query($con,$s);
                    echo "<script>alert('You have successfully registered')</script>";
  }
?>
<div class="d-flex justify-content-center pt-5">
                    <table class="table w-50 ">
                    <?php 
     
     require_once('connection.php');

   $querymm="select * from user ";
   $resultyo = mysqli_query($con, $querymm);
   
   ?> 
                        <thead>
                          <tr>
                            <td>User Id</td>
                            <td>User Name</td>
                            <td>User Email</td>
                            <td>User Password</td>
                            <td>User Address</td>
                           

                            </tr>
                        </thead>
                        <tbody class="text-center">

                        <?php if(!$resultyo) {
   
}
  else{
    ?>
    <?php  while($rowsU=mysqli_fetch_array($resultyo)) 
    { 
  
    ?> 
    <tr> <td><?php echo $rowsU['user_id']; ?></td> 
    <td><?php echo $rowsU['user_name']; ?></td> 
    <td><?php echo $rowsU['user_email']; ?></td> 
    <td><?php echo $rowsU['user_password']; ?></td> 
    <td><?php echo $rowsU['user_address']; ?></td> 
    
    </tr> 
<?php 
           }
          } 
      ?> 
                      

                          
                        </tbody>
                      </table>
                     
                      </div>
                      
                </div>
            
            </div>



        </div>
     </section>



    </body>

</html>