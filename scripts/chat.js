const form = document.querySelector('.writingForm');
const input = document.querySelector('.textInp');
const writingBtn = document.querySelector('.writingBtn');
const msgContainer = document.querySelector('.messages');

form.addEventListener('submit', (e) => {
  e.preventDefault();
});

writingBtn.addEventListener('click', () => {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/sendMsg.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
    }
  });
  let formData = new FormData(form);
  xhr.send(formData);
});
addEventListener('load', () => {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/downloadMessages.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        msgContainer.innerHTML = xhr.response;
      }
    }
  });
  let formData = new FormData(form);
  xhr.send(formData);
});

writingBtn.addEventListener('click', () => {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/downloadMessages.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        msgContainer.innerHTML = xhr.response;
      }
    }
  });
  let formData = new FormData(form);
  xhr.send(formData);
});

setTimeout(() => {
  msgContainer.scrollTop = msgContainer.scrollHeight;
}, 100);

writingBtn.addEventListener('click', () => {
  setTimeout(() => {
    msgContainer.scrollTop = msgContainer.scrollHeight;
  }, 300);
});

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/downloadMessages.php', true);
  xhr.addEventListener('load', () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        msgContainer.innerHTML = xhr.response;
      }
    }
  });
  let formData = new FormData(form);
  xhr.send(formData);
}, 2000);
