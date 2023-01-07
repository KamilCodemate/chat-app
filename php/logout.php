<?php

session_start();
include_once "connect.php";
if(isset($_SESSION['unique_id'])){
 $lId = mysqli_real_escape_string($conn, $_GET['user_id']);
 $us_id = mysqli_real_escape_string($conn, $_GET['user_id']);
 if(isset($us_id))
 {

  $qry = mysqli_query($conn, "UPDATE users SET status = 'Nieaktywny teraz' WHERE unique_id = '$lId'");

  if($qry)
  {
   session_unset();
   session_destroy();
   header("location: ../form.php");
  }
  else{
   header("location: ../users.php");
  }
 }
}else{
 header("location: ../login.php");
}