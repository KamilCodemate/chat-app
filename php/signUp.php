<?php
include_once "connect.php";

$validExts = ['png', 'jpeg', 'jpg'];

$name = mysqli_real_escape_string($conn, $_POST['name']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($name) && !empty($surname) && !empty($email) && !empty($password))
{
if(filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $qry = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    if(mysqli_num_rows($qry) > 0)
    {
      echo "$email - this email already exist!";
    }
    else{
      if(isset($_FILES['image']))
      {
        $imgName = $_FILES['image']['name'];
        $imgType = $_FILES['image']['type'];
        $tmpName = $_FILES['image']['tmp_name'];
        $imgEnd = explode('.', $imgName);
        $imgExtension = end($imgEnd);
        
        if(in_array($imgExtension, $validExts))
        {
          $time = time();
          $newImgName = $time . $imgName;
          move_uploaded_file($tmpName, "images/".$newImgName);
          $status = "Active now";
          $randomId = rand(time(), 10000000);
          $qry2 = mysqli_query($conn, "INSERT INTO users (unique_id, name, surname, email, password, img, status)
          VALUES ($randomId, '$name', '$surname', '$email', '$password', '$newImgName', '$status')");

          if($qry2)
          {
            $qry3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
            if(mysqli_num_rows($qry3) > 0)
            {
              $row = mysqli_fetch_assoc($qry3);
              $_SESSION['unique_id'] = $row['unique_id'];
              echo 'success';
            } else
              echo 'Something went wrong';
          }
        }
        else echo "Only .jpg and .png images are accepted!";
      }
      else {
        echo "You must select an avatar image!";
      }
    }
} else {
  echo "Entered email is incorrect";
}


}else{
 echo "Please fill all input fields!";
}
?>