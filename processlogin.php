<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['submitlogin']))
    {
        #the usernamelogin==emailuser.
       if(empty($_POST['emailinter']) || empty($_POST['passwordinter']))
       {
            header("location:indexlogin.php?Empty= Please Fill in the Blanks");
       }
       else
       {
   
            
    $query="select * from user where user_password='".$_POST['passwordinter']."' and user_email='".$_POST['emailinter']."'";
    $result=mysqli_query($con,$query);
    if(mysqli_fetch_assoc($result))
    {
        $_SESSION['User']=$_POST['emailinter'];
        header("location:home.php");
    }
    else
    {
        $queryy="select * from admin where admin_password='".$_POST['passwordinter']."' and admin_email='".$_POST['emailinter']."'";
        $resultt=mysqli_query($con,$queryy);
        if(mysqli_fetch_assoc($resultt))
        {
            $_SESSION['User']=$_POST['emailinter'];
            header("location:adminindex.php");
        }
        else{
        header("location:indexlogin.php?Invalid= Please Enter Correct User Name and Password ");
        }
    }
}
    }
 
?>