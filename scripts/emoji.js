const emojiButton = document.querySelector('.emoji-button');
const emojiSelector = document.querySelector('.emoji-selector');
const textInput = document.querySelector('.textInp');

let characters = [];

fetch('https://emoji-api.com/emojis?access_key=ac30d2832d2dff857801bd2371c5ffe537ccf555')
  .then((response) => response.json())
  .then((data) => getEmoji(data));

function getEmoji(emojis) {
  const list = document.createElement('ul');
  list.classList.add('emojiList');
  emojis.forEach((element) => {
    if (element.slug !== 'smiling-face') {
      const emoji = document.createElement('li');
      emoji.setAttribute('emojiName', element.slug);
      emoji.textContent = element.character;
      emoji.addEventListener('click', () => {
        textInput.value = textInput.value + element.character;
      });
      list.appendChild(emoji);
    }
  });

  emojiSelector.appendChild(list);
}

emojiButton.addEventListener('click', () => {
  emojiSelector.classList.contains('active') ? emojiSelector.classList.remove('active') : emojiSelector.classList.add('active');
  console.log(emojiSelector.classList);
});
