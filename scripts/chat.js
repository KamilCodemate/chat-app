const form = document.querySelector('.writingForm');
const input = document.querySelector('.textInp');
const writingBtn = document.querySelector('.writingBtn');
form.addEventListener('submit', (e) => {
  e.preventDefault();
});

writingBtn.addEventListener('click', (e) => {
  console.log('dziala');
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/sendMsg.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
    }
  });
  let formData = new FormData(form);
  xhr.send(formData);
});
