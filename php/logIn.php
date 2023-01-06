<?php
session_start();
include_once "connect.php";

$validExts = ['png', 'jpeg', 'jpg'];


$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(empty($email) && empty($password))
{
 echo 'Wypełnij wszystkie pola!';
}
else{
 $qry = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");
 if(mysqli_num_rows($qry) > 0)
 {
  $row = mysqli_fetch_assoc($qry);
  $_SESSION['unique_id'] = $row['unique_id'];
  echo 'success';
 }
 else{
  echo "Niepoprawny email lub hasło!";
 }
}

?>