<?php
session_start();
include_once "connect.php";
$out_id = $_SESSION['unique_id'];
$eq = '';

$searchValue = mysqli_real_escape_string($conn, $_POST['searchValue']);

$qry = mysqli_query($conn, "SELECT * FROM users WHERE name LIKE '%$searchValue%' OR surname LIKE '%$searchValue%' OR CONCAT(name, ' ', surname) LIKE '%$searchValue%'");

if(mysqli_num_rows($qry) > 0)
{
    include "userStructure.php";
 echo $eq;
}else{
 echo 'Brak użytkowników do wyświetlenia';
}