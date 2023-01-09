<?php
session_start();
if(isset($_SESSION['unique_id'])){
include_once "connect.php";
$in_id = mysqli_real_escape_string($conn, $_POST['inId']);
$out_id = mysqli_real_escape_string($conn, $_POST['outId']);
$content = mysqli_real_escape_string($conn, $_POST['content']);
 $qry;
$validExts = ['png', 'jpeg', 'jpg'];


 if (isset($_FILES['image']) || !empty($content)) {
    $finalName = 'not_provided';
    if(isset($_FILES['image']))
    {
  $imgName = $_FILES['image']['name'];
  $imgType = $_FILES['image']['type'];
  $tmpName = $_FILES['image']['tmp_name'];
  $imgEnd = explode('.', $imgName);
  $imgExtension = end($imgEnd);
      if (isset($imgExtension) || !empty($content)) {
        if (in_array($imgExtension, $validExts)) {
          $time = time();
          $newImgName = $time . $imgName;
          move_uploaded_file($tmpName, "images/" . $newImgName);
          $finalName = $newImgName;
        }

        $qry = mysqli_query($conn, "INSERT INTO messages (in_id, out_id, content, image) VALUES ('$in_id', '$out_id', '$content', '$finalName')");
        unset($_FILES['image'], $imgName, $imgType, $tmpName, $imgEnd, $imgExtension, $in_id, $out_id, $content, $qry);
        echo 'success';
      }
  }
 }

}