const userList = document.querySelector('.userField');

let searchValue = '';
let prevResponse = '';
let allUsersResponse = '';

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

setInterval(() => {
  if (searchValue === '') userList.innerHTML = allUsersResponse;
}, 1000);
