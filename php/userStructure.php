<?php
$eq2 = '';


 while($row = mysqli_fetch_assoc($qry))
 {
    $color = trim($row['status']) == 'Aktywny teraz' ? 'rgb(17, 167, 17)' : 'grey';
    $qry2 = mysqli_query($conn, "SELECT * FROM messages WHERE in_id = {$row['unique_id']} OR out_id = {$row['unique_id']} AND out_id = '$out_id'
    OR out_id = {$row['unique_id']} ORDER BY id DESC LIMIT 1");

    $row2 = mysqli_fetch_assoc($qry2);
    if(mysqli_num_rows($qry2) > 0)
    {

        $eq2 = strlen($row2['content']) > 15 ? $row2['content'] : substr($row2['content'], 0, 15).'...';
    } else{
        $eq2 = 'Rozpocznij konwersację!';
    }
    
  $eq .= ' <div class="mainContent other">

      <a href="chat.php?user_id='.$row['unique_id'].'">
       <div class="userInfo">
        <img src="./php/images/'.$row['img'].'" alt="" />
        <div class="info">
         <span class="name">'.$row['name']." ".$row['surname'].'</span>
         <p>'.$row['status'].'</p>
        </div>
       </div>
      </a>
      <i class="active fa-solid fa-circle" style = "color:'.$color.'"></i>
     </div>';
 }