<?php
session_start();
if(!isset($_SESSION['unique_id']))
{
  header('location: login.php');
}


?>


<!DOCTYPE html>
<html lang="pl">

<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Chat Online</title>

 <link rel="stylesheet" href="./styles/main.css" />
 <link rel="stylesheet" href="./styles/chat.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
 <div class="container">
  <div class="mainField">
   <div class="user">
    <header>
     <?php
     include_once('php/connect.php');
     $id = mysqli_real_escape_string($conn, $_GET['user_id']);
     
    $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '$id'");
if(mysqli_num_rows($qry) > 0)
{
  $row = mysqli_fetch_assoc($qry);
       
}
      ?>
     <div class="mainContent">
      <div class="userInfo">
       <i class="fa-solid fa-arrow-left"></i>
       <img src="./php/images/<?php echo $row['img']?>" alt="" />
       <div class="info">
        <span class="name"><?php echo $row['name']." ".$row['surname']?></span>
        <p><?php echo $row['status']?></p>
       </div>
      </div>
     </div>
    </header>
   </div>
   <div class="messages">


   </div>
   <div class="writing">
    <form action="#" class='writingForm'>
     <input type="hidden" name='outId' value="<?php echo $_SESSION['unique_id']?>">
     <input type="hidden" name='inId' value="<?php echo $id?>">
     <input type="text" placeholder="Napisz wiadomość..." class='textInp' name='content' />
     <button class='writingBtn'><i class="fa-regular fa-paper-plane"></i></button>
    </form>
   </div>
  </div>
 </div>
 <script src="./scripts/chat.js"></script>
</body>

</html>