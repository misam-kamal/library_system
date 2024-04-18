<?php


$con=mysqli_connect('localhost','root','','book_library');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }

?>
