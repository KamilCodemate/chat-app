const form = document.querySelector('.signUp form');
const btn = document.querySelector(".formElement input[type='submit']");

form.addEventListener('submit', (e) => {
  e.preventDefault();
});

btn.addEventListener('click', (e) => {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/signup.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
      }
    }
  });
  let formData = new formData(form);
  xhr.send(formData);
});
