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
  <div class="mainField logIn">
   <section class="form logIn">
    <header>Czat Online</header>
    <hr class="headerLine" />
    <form action="#">
     <div class="error"> </div>

     <div class="formElement">
      <input type="text" placeholder="Adres Email" name='email' />
     </div>
     <div class="formElement">
      <input type="password" placeholder="Hasło" name='password' />
     </div>
     <br />

     <div class="formElement">
      <input type="submit" value="Przejdź do czatu" />
     </div>
    </form>
   </section>
   <div class="gotAcc">Nie masz jeszcze konta? <a href="./index.php">Utwórz je teraz</a> </div>
  </div>
 </div>
 <script src="./scripts/logIn.js"></script>
</body>

</html>