<?php
include_once('./php/connect.php');
session_start();

if(!isset($_SESSION['unique_id']))
{
  header("location: login.php");
}
$qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($qry) > 0)
{
  $row = mysqli_fetch_assoc($qry);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Chat Online</title>

 <link rel="stylesheet" href="./styles/main.css" />
 <link rel="stylesheet" href="./styles/users.css" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
 <div class="container">
  <div class="mainField">
   <div class="user">
    <header>
     <div class="mainContent">

      <div class="userInfo">
       <img src="./php/images/<?php echo $row['img']?>" alt="" />
       <div class="info">
        <span class="name"><?php echo $row['name']." ".$row['surname']?></span>
        <p><?php echo $row['status']?></p>
       </div>
      </div>
      <a href="./php/logout.php?user_id=<?php echo $row['unique_id']?>" class="logOut">Wyloguj się</a>
     </div>
    </header>

    <hr class="userHr" />
    <div class="search">
     <span>Aby rozpocząć czatowanie, wybierz użytkownika</span>
     <input type="text" placeholder="Wpisz imię, aby wyszukać..." class='searchBar' />
     <button class='delete'><i class="fa-solid fa-x"></i></button>
    </div>

    <div class="userList"></div>
   </div>
  </div>
 </div>
 <script src="./scripts/users.js"></script>
</body>

</html>