<?php
include_once('connect.php');
session_start();

$qry = mysqli_query($conn, "SELECT * FROM users");
$eq = '';

if(mysqli_num_rows($qry) <=  1)
{
 $eq = 'Brak użytkowników do wyświetlenia';
}
elseif(mysqli_num_rows($qry) > 1)
{
    include "userStructure.php";
    
}
echo $eq;