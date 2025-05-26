document.addEventListener('DOMContentLoaded', () => {
  const toggleButton = document.getElementById('menu-toggle');
  const navList     = document.getElementById('nav-list');

  toggleButton.addEventListener('click', () => {
    const isOpen = navList.classList.toggle('show');
    toggleButton.setAttribute('aria-expanded', isOpen);
  });
});
