<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'book_library');

$input = filter_input_array(INPUT_POST);

$user_name = mysqli_real_escape_string($connect, $input["user_name"]);
$user_email = mysqli_real_escape_string($connect, $input["user_email"]);
$user_password = mysqli_real_escape_string($connect, $input["user_password"]);
$user_address = mysqli_real_escape_string($connect, $input["user_address"]);
if($input["action"] === 'edit')
{
 $query = "
 UPDATE user 
 SET user_name = '".$user_name."', 
 user_email = '".$user_email."',
 user_password = '".$user_password."',
 user_address = '".$user_address."'
 WHERE user_id = '".$input["user_id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM user 
 WHERE user_id = '".$input["user_id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
