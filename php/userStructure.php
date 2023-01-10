<?php
$eq2 = '';


 while($row = mysqli_fetch_assoc($qry))
 {
    $color = (trim($row['status']) == 'Aktywny Teraz') ? 'rgb(17, 167, 17)' : 'grey';
    $qry2 = mysqli_query($conn, "SELECT * FROM messages WHERE (in_id = {$row['unique_id']} AND out_id = {$_SESSION['unique_id']}) OR (in_id = {$_SESSION['unique_id']} AND out_id = {$row['unique_id']}) ORDER BY id DESC");

    $row2 = mysqli_fetch_assoc($qry2);
    if(mysqli_num_rows($qry2) > 0)
    {

        $eq2 = strlen($row2['content']) < 25 ? $row2['content'] : substr($row2['content'], 0, 15).'...';
        if ($row2['content'] == '' && $row2['image'] !== 'not_provided')
            $eq2 = 'Wysłano zdjęcie.';
    } else{
        $eq2 = 'Rozpocznij konwersację!';
    }
    
  $eq .= '<a href="chat.php?user_id='.$row['unique_id'].'">
   <div class="mainContent other">
<div class="userInfo">
        <img src="./php/images/'.$row['img'].'" alt="" />
        <div class="info">
         <span class="name">'.$row['name']." ".$row['surname'].'</span>
         <p>'.$eq2.'</p>
        </div>
       </div>
      
      <i class="active fa-solid fa-circle" style = "color:'.$color.'"></i>
     </div></a>'
     ;
 }