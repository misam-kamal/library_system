<?php
$connect = mysqli_connect('localhost', 'root', '', 'book_library');

$input = filter_input_array(INPUT_POST);

// $done = mysqli_real_escape_string($connect, $input["done"]);
$user_email = mysqli_real_escape_string($connect, $input["user_email"]);
$title = mysqli_real_escape_string($connect, $input["title"]);
$subject = mysqli_real_escape_string($connect, $input["subject"]);
$messages = mysqli_real_escape_string($connect, $input["messages"]);
$done = mysqli_real_escape_string($connect, $input["done"]);

if($input["action"] === 'edit')
{
//  $query = "
//  UPDATE messages 
// SET done = '".$done."'
//  WHERE id = '".$input["id"]."'
//  ";
$query = "
UPDATE messages 
SET user_email = '".$user_email."', 
title = '".$title."',
subject = '".$subject."',
messages = '".$messages."',
done = '".$done."'
WHERE id = '".$input["id"]."'
";
 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM messages 
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>
