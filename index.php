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
    <form action="#">
     <div class="error"> </div>

     <div class="formElement">
      <input type="text" placeholder="Imię" name="name" required />
     </div>
     <div class="formElement">
      <input type="text" placeholder="Nazwisko" name="surname" required />
     </div>

     <div class="formElement">
      <input type="email" placeholder="Adres Email" name="email" required />
     </div>
     <div class="formElement">
      <input type="password" placeholder="Hasło" name="password" required />
     </div>
     <br />
     <div class="formElement">
      <label>Wybierz Avatar</label>
      <input type="file" name="image" required />
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