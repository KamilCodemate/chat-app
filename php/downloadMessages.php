<?php

session_start();
if(isset($_SESSION['unique_id']))
{
 include_once "connect.php";
 $in_id = mysqli_real_escape_string($conn, $_POST['inId']);
$out_id = mysqli_real_escape_string($conn, $_POST['outId']);
 $eq = '';

 $qry = mysqli_query($conn, "SELECT * FROM messages WHERE out_id = $out_id AND in_id = $in_id
 OR out_id = $in_id AND in_id = $out_id ORDER BY id ASC");


 $qry2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = $in_id"); //1066737485
 if(mysqli_num_rows($qry2) > 0)
 {
  $row2 = mysqli_fetch_assoc($qry2);
  
 }
 if(mysqli_num_rows($qry) > 0)
 {
  while($row = mysqli_fetch_assoc($qry))
  {
   if($row['out_id'] === $out_id)
   {
    $eq .= ' <div class="chatElement outMsg">
     <span>'.$row['content'].'</span>
    </div>';
   } else{
    $eq .= ' <div class="chatElement inMsg">
     <img src="php/images/'.$row2['img'].'" alt="" />
     <div class="msgContent">
      <span>'.$row['content'].'</span>
     </div>
    </div>';
   }
  }
 }
 echo $eq;

}

?>