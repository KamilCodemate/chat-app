const search = document.querySelector('.searchBar');
const userList = document.querySelector('.userList');
let searchValue = '';
let prevResponse = '';
let allUsersResponse = '';
search.addEventListener('keyup', () => {
  searchValue = search.value;
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/search.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        prevResponse = xhr.response;
      }
    }
  });
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhr.send('searchValue=' + searchValue);
});

addEventListener('load', () => {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', 'php/users.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        allUsersResponse = xhr.response;
        userList.innerHTML = searchValue === '' ? allUsersResponse : prevResponse;
      }
    }
  });
  xhr.send();
});

search.addEventListener('keydown', () => {
  let xhr = new XMLHttpRequest();
  xhr.open('GET', 'php/users.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        userList.innerHTML = searchValue === '' ? xhr.response : prevResponse;
      }
    }
  });
  xhr.send();
});

setInterval(() => {
  if (searchValue === '') userList.innerHTML = allUsersResponse;
}, 1000);
