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
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
 <div class="container">
  <div class="chatUsers">
   <header>
    <h2>Dostępni użytkownicy: </h2>
   </header>
   <br />
   <div class="userField">


   </div>
  </div>
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
       <a href='./users.php'> <i class="fa-solid fa-arrow-left"></i></a>
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
    <form action="#" class='writingForm' ectype="multipart/form-data">
     <input type="hidden" name='outId' value="<?php echo $_SESSION['unique_id']?>">
     <input type="hidden" name='inId' value="<?php echo $id?>">
     <div class="msgWrite">
      <input type="text" placeholder="Napisz wiadomość..." class='textInp' name='content' />
      <button class='writingBtn'><i class="fa-regular fa-paper-plane"></i></button>
     </div>
     <div class="tools">

      <label for="fileInput" class='attachmentSimbol'>
       <i class="fa-solid fa-paperclip"></i>
      </label>
      <input type="file" id="fileInput" style="display:none" class='chatFileInput' name='image' />
    </form>

    <span class="emoji-button">🙂</span>
    <div class='emoji-selector'></div>
   </div>

  </div>

 </div>
 </div>
 <script src="./scripts/chat.js"></script>
 <script src="./scripts/usersChat.js"></script>
 <script src='./scripts/emoji.js'></script>
</body>

</html>