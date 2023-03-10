<?php
session_start();
if (isset($_SESSION['unique_id']))
 header("location: users.php");

?>

<!DOCTYPE html>
<html lang="pl">

<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Chat Online</title>

 <link rel="stylesheet" href="./styles/main.css" />
 <link rel="stylesheet" href="./styles/form.css" />
</head>

<body>
 <div class="container">
  <div class="mainField">
   <section class="form signUp">
    <header>Czat Online</header>
    <hr class='headerLine' />
    <form action="#" enctype="multipart/form-data">
     <div class="error"> </div>

     <div class="formElement">
      <input type="text" placeholder="Imię" name="name" />
     </div>
     <div class="formElement">
      <input type="text" placeholder="Nazwisko" name="surname" />
     </div>

     <div class="formElement">
      <input type="text" placeholder="Adres Email" name="email" />
     </div>
     <div class="formElement">
      <input type="password" placeholder="Hasło" name="password" />
     </div>

     <br />
     <div class="formElement">
      <label>Wybierz Avatar</label>
      <input type="file" name="image" />
     </div>
     <br />

     <div class="formElement">
      <input type="submit" value="Przejdź do czatu" />
     </div>
    </form>
   </section>
   <div class="gotAcc">Masz już konto? <a href="./form.php">Zaloguj się teraz</a> </div>
   <script src="./scripts/signUP.js"></script>
  </div>
 </div>
</body>

</html>