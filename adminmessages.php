

<?php
$result1=0;
$connect = mysqli_connect("localhost", "root", "", "book_library");
$query = "SELECT * FROM messages ORDER BY id  DESC";
$result = mysqli_query($connect, $query);

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
    <link rel="stylesheet" href="assest/css/edituser.css">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="assest/js/jquery.tabledit.min.js"></script>
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
                <a href="#" class="add-user">Messagge <i class="fa-solid fa-message ps-1"style="font-size:18px ;color:#47C607"></i></a>
                             <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div>
                <div class="text-center add-userdiv ">
                    <a href="indexlogin.php" class="add-user">Logout<i class="fa-solid fa-right-from-bracket ps-1" style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div>
                <!-- <div class="text-center add-userdiv ">
                    <a href="#" class="add-user">Log OUT<i class="fa-solid fa-right-from-bracket ps-1" style="font-size:18px ;color:#47C607"></i></a>
                    <hr style="color:black;height: 3px;background-color: #47C607;   box-shadow:    2px 2px 5px 0px #47C607;" >
                </div> -->
            </div>
            <div class="col-sm-10 ">
                <div class="text-center">
                    <h1 class="text-center mt-5 my-5" style="font-size:40px;font-family: 'Bowlby One SC', cursive;font-family: 'Cinzel Decorative', cursive;">User Messages</h1>


                   
<div class="d-flex justify-content-center pt-5">
                    <table class="table w-50 " id="editablee_table">
                        <thead>
                          <tr>
                            <td>User Id</td>
                            <td>User Email</td>
                            <td>Title</td>
                            <td>Subject</td>
                            <td>Message</td>
                            <td>done</td>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="data">
                       
                        <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["user_email"].'</td>
       <td>'.$row["title"].'</td>
       <td>'.$row["subject"].'</td>
       <td>'.$row["messages"].'</td>
       <td>'.$row["done"].'</td>
      </tr>
      ';
     }
     ?>
                          
                        </tbody>
                      </table>
                      </div>
                   
                </div>
            </div>
        </div>
     </section>
     <script>  
$(document).ready(function(){  
    $('#editablee_table').Tabledit({
      url:'actionmessages.php',
      columns:{
       

        identifier:[0, "id"],
       editable:[[1, 'user_email'], [2, 'title'], [3, 'subject'], [4, 'messages'],[5,'done']]
        // editable:[[5, "done"]],
        // identifier :[4, "messages"],
        // identifier :[0, 'id'],
        // identifier :[1,'user_email'],
        // identifier :[2, 'title'],
        // identifier :[3, 'subject']



      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js" integrity="sha512-F3F53+tMh/CBxMQ60GN5R4EiFW7PcuND+9IDC3Qpkwc7SfxgzHigRdUO3+2+mNal2ot3Wp6KR0zx8r8BbsW+Bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
     <script src="assest/js/edit.js"></script>
    </body>
   
</html>