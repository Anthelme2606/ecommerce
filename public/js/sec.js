const contents = document.querySelectorAll('.content');

contents.forEach(content => {
  content.addEventListener('click', () => {
    content.classList.toggle('active');
  });
});