<?php
include_once "connect.php";
$eq = '';

$searchValue = mysqli_real_escape_string($conn, $_POST['searchValue']);

$qry = mysqli_query($conn, "SELECT * FROM users WHERE name LIKE '%$searchValue%' OR surname LIKE '%$searchValue%' OR CONCAT(name, ' ', surname) LIKE '%$searchValue%'");

if(mysqli_num_rows($qry) > 0)
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
 echo $eq;
}else{
 echo 'Brak użytkowników do wyświetlenia';
}