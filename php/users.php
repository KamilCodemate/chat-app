<?php
include_once('connect.php');
session_start();

$out_id = $_SESSION['unique_id'];

$qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != $out_id");
$eq = '';

if(mysqli_num_rows($qry) <= 0)
{
 $eq = 'Brak użytkowników do wyświetlenia';
}
elseif(mysqli_num_rows($qry) > 0)
{
    include "userStructure.php";
    
}
echo $eq;