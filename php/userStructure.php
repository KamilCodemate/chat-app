<?php

 while($row = mysqli_fetch_assoc($qry))
 {
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
      <i class="active fa-solid fa-circle"></i>
     </div>';
 }