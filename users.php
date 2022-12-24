<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat Online</title>

    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="stylesheet" href="./styles/users.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container">
      <div class="mainField">
        <div class="user">
          <header>
            <div class="mainContent">
              <div class="userInfo">
                <img src="./photo.jpg" alt="" />
                <div class="info">
                  <span class="name">Użytkownik 1</span>
                  <p>Aktywny Teraz</p>
                </div>
              </div>
              <a href="#" class="logOut">Wyloguj się</a>
            </div>
          </header>

          <hr class="userHr" />
          <div class="search">
            <span>Aby rozpocząć czatowanie, wybierz użytkownika</span>
            <input type="text" placeholder="Wpisz imię, aby wyszukać..." />
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>

          <div class="userList">
            <div class="mainContent other">
              <div class="userInfo">
                <img src="./photo.jpg" alt="" />
                <div class="info">
                  <span class="name">Anita Morszczuk</span>
                  <p>Aktywny Teraz</p>
                </div>
              </div>
              <i class="active fa-solid fa-circle"></i>
            </div>
            <div class="mainContent other">
              <div class="userInfo">
                <img src="./photo.jpg" alt="" />
                <div class="info">
                  <span class="name">Anita Morszczuk</span>
                  <p>Aktywny Teraz</p>
                </div>
              </div>
              <i class="active fa-solid fa-circle"></i>
            </div>
            <div class="mainContent other">
              <div class="userInfo">
                <img src="./photo.jpg" alt="" />
                <div class="info">
                  <span class="name">Anita Morszczuk</span>
                  <p>Aktywny Teraz</p>
                </div>
              </div>
              <i class="active fa-solid fa-circle"></i>
            </div>
            <div class="mainContent other">
              <div class="userInfo">
                <img src="./photo.jpg" alt="" />
                <div class="info">
                  <span class="name">Anita Morszczuk</span>
                  <p>Aktywny Teraz</p>
                </div>
              </div>
              <i class="active fa-solid fa-circle"></i>
            </div>
            <div class="mainContent other">
              <div class="userInfo">
                <img src="./photo.jpg" alt="" />
                <div class="info">
                  <span class="name">Anita Morszczuk</span>
                  <p>Aktywny Teraz</p>
                </div>
              </div>
              <i class="active fa-solid fa-circle"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
