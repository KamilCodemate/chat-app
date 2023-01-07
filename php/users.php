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
 while($row = mysqli_fetch_assoc($qry))
 {
  $eq .= ' <div class="mainContent other">
      <a href="#">
       <div class="userInfo">
        <img src="./php/images/'.$row['img'].'" alt="" />
        <div class="info">
         <span class="name">'.$row['name']." ".$row['surname'].'</span>
         <p>'.$row['status'].'</p>
        </div>
       </div>
      </a>
      <i class="active fa-solid fa-circle"></i>
     </div>';
 }
    
}
echo $eq;