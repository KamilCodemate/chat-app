const form = document.querySelector('.signUp form');
const btn = document.querySelector(".formElement input[type='submit']");
const errMsg = document.querySelector('.error');
form.addEventListener('submit', (e) => {
  e.preventDefault();
});

btn.addEventListener('click', (e) => {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/signup.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (data === 'success') {
          location.href = 'users.php';
        } else {
          errMsg.innerHTML = data;
        }
      }
    }
  });
  let formData = new FormData(form);
  xhr.send(formData);
});
