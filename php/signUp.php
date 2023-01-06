<?php
include_once "config.php";
$name = mysqli_real_escape_string($conn, $_POST['name']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($name) && !empty($surname) && !empty($email) && !empty($password))
{
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{

} else {
  echo "Entered email is incorrect";
}


}else{
 echo "Please fill all input fields!";
}
?>