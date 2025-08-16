  window.toggleLesson = function(header) {
    const content = header.nextElementSibling;
    const icon = header.querySelector('i.chev');

    const isOpen = content.style.display === 'block';
    content.style.display = isOpen ? 'none' : 'block';
    icon.classList.toggle('open', !isOpen);
  };