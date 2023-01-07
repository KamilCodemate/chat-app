<?php
session_start();
if(isset($_SESSION['unique_id'])){
include_once "connect.php";
$in_id = mysqli_real_escape_string($conn, $_POST['inId']);
$out_id = mysqli_real_escape_string($conn, $_POST['outId']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
}
if(!empty($content)){
 $qry = mysqli_query($conn, "INSERT INTO messages (in_id, out_id, content) VALUES ('$in_id', '$out_id', '$content')");
}