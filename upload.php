

<?php
$connect = mysqli_connect("localhost", "root", "", "book_library");
$query = "SELECT * FROM user ORDER BY user_id DESC";
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
<style>
   .welcome{
            color:#5d5e5f;
            font-family: 'Cookie', cursive;
            font-size: 30px;
        }
*{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}
body{
  height: 800px;
}
.welcome{
            color:#5d5e5f;
            font-family: 'Cookie', cursive;
            font-size: 30px;
        }
    .employpage{
      display: flex;
      width: 70%;
      flex-wrap: wrap;
      margin: auto;
      font-family: verdana;
      font-size: 16px;
      border: solid 2px #f1f1f1;
      height: 450px;
      box-shadow:0px 0px 5px rgba(0,0,0,0.2);
  }
  .employpage .formdata{
    width:40%;
    margin-bottom:300px;
    height: 400px;
    padding: 15px;
  }
  .employpage .display_table {
   margin-bottom:220px;
   overflow: scroll;

   height: 450px;
  }
  .employpage .display_table table{
    border:solid 1px #ccc;
    
  }
  .employpage .display_table td, 
  .employpage .display_table th{
    border-left:solid 1px #ccc;
    border-bottom:solid 1px #ccc;
    padding:10px 5px;
    text-align:left;
    
    width: 150px;
    color:#5d5e5f;
      font-family: 'Cookie', cursive;
      font-size:30px ;
      width: 150px;
  }
  /* .employpage .display_table td:first-child, 
  .employpage .display_table th:first-child{
    border-left:none;
  } */

  .employpage .display_table {
   margin-bottom:220px;
   overflow: scroll;
   height: 450px;
   margin-right:80px;
  }
  .employpage .display_table table{
    border:solid 1px #ccc;
    
  }
  .employpage .display_table td, 
  .employpage .display_table th{
    border-left:solid 1px #ccc;
    border-bottom:solid 1px #ccc;
    padding:10px 5px;
    text-align:left;
    
    width: 150px;
    color:#5d5e5f;
      font-family: 'Cookie', cursive;
      font-size:20px ;
      padding-left:30px;
      box-shadow:0px 0px 5px rgba(0,0,0,0.3);
  }
  .employpage .display_table td:first-child, 
  .employpage .display_table th:first-child{
    border-left:none;
  }

  .employpage .display_table tr{
    border-bottom:solid 1px #ccc;
  }
  .employpage .display_table tr:last-child td{
    border-bottom:none;
  }
  
  
  .formdata form{
    display:flex;
    flex-wrap:wrap;
    background:#f1f1f1;
    padding:15px;
   
    
  }
  .formdata form label{
    width:100px;
  }
  .formdata form input, .formdata label{
    margin:10px 0;
    padding:5px;
    
  } 
  input{
    width:500px;
    padding:7px;
    box-shadow:0px 0px 5px rgba(0,0,0,0.7);
    border:0ch;
    color:#5d5e5f;
      font-family: 'Cookie', cursive;
      font-size: 20px;


  }
  
  .formdata th{
    background:#f1f1f1; 
    font-size:30px; 
    font-weight:bold;
    text-align:left;
   
  }
  .formdata .but{
    background:#000;

    font-size:20px;
  
    display:table;
    color:#fff;
margin-left: -150px;
  } 
  .the{
      width: 1000px;
  }

  .button-71 {
  background-color:#d4120b;
  border: 0;
  border-radius: 56px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size:20px;
  font-weight: 500;
  outline: 0;
  /* padding: 16px 21px; */
  position: relative;
  /* text-align: left; */
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  background-color: #d4120b;
  /* border: none; */
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left:-12px;
 }

.button-71:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 0, 0, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 80%;
}
.btn {
  background-color: #d4120b;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

.button-71:hover {
  box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}

@media (min-width: 768px) {
  .button-71 {
    padding: 10px 22px;
  }
}


   /*the css for the header list*/
   nav{
     
       height: 157px;
    position: fixed;
       width: 100%;
       top:0;
       left: 0;
       padding-top: 110px;
     transition: 1.5s;
     background-color: rgba(232,155,147,0.4);
     z-index: 3;
   
   }
   nav:hover{
       background-color: rgba(232,155,147,0.4);
      
       
   }
   .row1 {
       display: flex;
       justify-content: space-between;
       align-items: center;
   
   }
   .continer5{
       
       width:95%;
       margin: auto;
   
   }
   .list{
       display: flex;
       list-style-type: none;
   }
   .list a{
      text-decoration: none;
       color:#4c4c4b;
       font-size: 20px;
       font-family: 'Cookie', cursive;
       font-family: 'Indie Flower', cursive;
       font-weight: 900;
   }
   .list a:hover{
       color:#Db8e88;
   }
   
   .list li{
       padding: 10px;
       
   }
   .icon-list{
   display: flex;
   list-style-type: none;
   
   }
   .icon-list li{
       padding:5px;
   }
   i{
       font-size: 20px;
       color:#4c4c4b;
       padding: 6px;
   }
   .icon-list i:hover{
       color:#db8e88;
       border-radius: 25px;
       border: 2px double #4c4c4b;;
   
       background-color:#4c4c4b;; ;
   
   }
   .lis1{
   display: inline-block;
       
       width: 100%;
       height:100%;
      
       border-radius: 25px;
    
    
   
   }
  
   .try{
    background-image: url('assets/img/slider_26f6c427-959d-42ba-986e-34a184c0eebe.jpg');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 100%;
    height: 750px;
    padding: 0;
    margin: 0;
}
.line1{
    height: 1px;
    width: 0px;
    background-color:#Db8e88;
    margin-top: -3px;
    position: absolute;
  /*  opacity: 0;*/
    transition: 3s;
}
.line2{
    height: 1px;
    width: 0px;
    background-color:#Db8e88;;
    margin-top: -3px;
    position: absolute;
  /*  opacity: 0;*/
    transition: 3s;
}
.line3{
    height: 1px;
    width: 0px;
    background-color:#Db8e88;;
    margin-top: -3px;
    position: absolute;
  /*  opacity: 0;*/
    transition: 3s;
}
 
.linebig{
    height: 1px;
    width: 0px;
    background-color:#Db8e88;;
    margin-top: -3px;
    position: absolute; 
transition:3s;  
}
.l1:hover .line1{
    opacity: 1;
    width: 45px;
    
    }
    .l1:hover a{
        text-decoration: none;
    }
    .l2:hover a{
        text-decoration: none;
    }
    .l3:hover a{
        text-decoration: none;
    }
    .l4:hover a{
        text-decoration: none;
    }

.l2:hover .linebig{
        opacity: 1;
        width: 118px;
        
        }
        .l3:hover .line2{
            opacity: 1;
            width: 45px;
            }
            .l4:hover .line3{
                opacity: 1;
                width: 43px;
                
                }
              .downdroup{ /* the thierd step is to do this css style*/
                    top:157px; /* to make the list move from down to top */
                    position: absolute; /* the important one*/
                    width: 200px;
              box-shadow: -5px 0px 1px #626262;
                    padding-top:25px;
                    padding-bottom: 15px;
                    padding-left: 15px;
                    background-color:#FFDDED;
                    transition: 1s;
                    opacity: 0;
                   
                 
               

                }
           
                .downdroup3{ /* the thierd step is to do this css style*/
                    top:157px; /* to make the list move from down to top */
                    position: absolute; /* the important one*/
                    width: 200px;
             
                    padding-top:25px;
                    padding-bottom: 15px;
                    padding-left: 15px;
                    right: 1000px;
                    background-color:#FFDDED;
                    transition: 1s;
                    opacity: 0;
                    height: 175PX;
                 
               

                }
               
               .l2:hover .downdroup{
                opacity: 1;
                top:157px;
            
                }
                .l2:hover .downdroup1{
                    opacity: 1;
                    top:157px;
                    }
                    .l2:hover .downdroup2{
                        opacity: 1;
                        top:157px;
                        }
                        .l2:hover .downdroup3{
                            opacity: 1;
                            top:157px;
                            }
         
            
            
       

              ul {
                list-style-type: none;
              }
              .downdroup label,.downdroup1 label,.downdroup2 label,.downdroup3 label{
                  font-size: 18px;
                  font-weight: 1000;
                  color:#4c4c4b;
                  font-family: 'Josefin Sans', sans-serif;
              }
              .downdroup a,.downdroup1 a,.downdroup2 a,.downdroup3 a{
                font-family: 'Josefin Sans', sans-serif;
                font-size: 15px;
              }
      
              
              .upload{
                  width:50%;
                 
              }
              .iii{
                font-family: 'Cookie', cursive;
                font-size:25px;
               color:#4c4c4b;
               margin-left:350px;



              }
              .welcome{
            color:#5d5e5f;
            font-family: 'Cookie', cursive;
            font-size: 30px;
        }
              .im{
                  width:13%;
              }
              .sss{
                  width:100px;
                  margin-left:330px;
                  height: 40px;
                  font-family: 'Cookie', cursive;
                  background-color:#EDECEC;
                  font-size:20px;
                  border:0;
                  color:black;
                  border:1px solid black;
                  font-weight: 500;

              }
              .row44{
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.sss:hover{
    color:black;
    background-color:rgb(71, 198, 7,0.8) ;
}
.in1{
  width:15%;
}
.in2{
  width:85%;

}



</style>
    </head>
     <body>

      <section>
        <div class="row vh-100">
            <div class="col-sm-2  control-manger">
                <div class="text-center mt-5 ">
                    <h1 style="font-family: 'Bowlby One SC', cursive;font-family: 'Cinzel Decorative', cursive;;font-size:28px;color: #b5b5b4;" class="text-center mt-5">Welcome TO management</h1>
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
                <a href="#" class="add-user">Messagge<i class="fa-solid fa-message ps-1"style="font-size:18px ;color:#47C607"></i></a>
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
                    <h1 class="text-center mt-5 my-5" style="font-size:40px;font-family: 'Bowlby One SC', cursive;font-family: 'Cinzel Decorative', cursive;">Book Management</h1>
                    <div class="upload" style="border:2px dots #000; margin-left:-50px">
<div style="height:350px;width:750px; border: 1px solid #Db8e88;border-radius: 50px 20px;padding:30px;box-shadow: 8px -7px 15px 2px rgb(0 0 0 / 50%);margin-left:350px;margin-top:100px;" >

<div style="height:280px;width:680px; border: 2px dashed #Db8e88;border-radius: 50px 20px;padding: 10px;">

<h1 style=" margin-left:120px;font-family: 'Josefin Sans', sans-serif;font-weight: 400; ;font-size:30px; color:#4c4c4b;">Upload The<span style="font-weight: 700;"> Image</span> to Book server</h1>
<br>
<form action="store.php" method="post" enctype="multipart/form-data">
        <input type="file" class="iii" name="image" style=" margin-left:138px; padding-bottom:10px;">
        <input type="text" class="iii" name="name" style=" margin-left:120px; padding-bottom:10px;" style="width:90%" placeholder="inter the name of book" ><br>
        <input type="text" class="iii" name="type" style=" margin-left:120px; padding-bottom:10px;" placeholder="inter the type of book" ><br>
        <input type="text" class="iii" name="link" style=" margin-left:120px; padding-bottom:10px;" placeholder="inter the link of book"><br>
	    <input type="submit" class="sss" name="submit" value="UPLOAD"  style="border: 1px solid #6C6C6C;margin-left:120px;margin-top:24px" >


    </form>
   




</div>
</div>

                   
                </div>
            </div>
        </div>
     </section>
    

     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.3.3/sweetalert2.min.js" integrity="sha512-F3F53+tMh/CBxMQ60GN5R4EiFW7PcuND+9IDC3Qpkwc7SfxgzHigRdUO3+2+mNal2ot3Wp6KR0zx8r8BbsW+Bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
     <script src="assest/js/edit.js"></script>
    </body>
   
</html>