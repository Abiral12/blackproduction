  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const bar1 = document.getElementById('bar1');
  const bar2 = document.getElementById('bar2');
  const overlay = document.getElementById('overlay');
  const navLinks = document.getElementById('nav-links');
  const mobileLinks = mobileMenu.querySelectorAll('a');

  let isMenuOpen = false;

  const openMenu = () => {
    isMenuOpen = true;
    mobileMenu.classList.remove('hidden');
    mobileMenu.classList.add('show');
    overlay.classList.remove('hidden');
    overlay.classList.add('show');
    document.body.classList.add('overflow-hidden');
    if (navLinks) navLinks.classList.add('hide-links');
    bar1.classList.add('bar-transform-1');
    bar2.classList.add('bar-transform-2');

    // Animate each link with a small delay
//    mobileLinks.forEach((link, index) => {
//   link.classList.remove('fade-in'); // Reset
//   void link.offsetWidth; // Force reflow to re-trigger animation
//   setTimeout(() => {
//     link.classList.add('fade-in');
//   }, index * 300); // staggered
// });
  };

  const closeMenu = () => {
    isMenuOpen = false;
    mobileMenu.classList.remove('show');
    overlay.classList.remove('show');
    document.body.classList.remove('overflow-hidden');
    if (navLinks) navLinks.classList.remove('hide-links');
    bar1.classList.remove('bar-transform-1');
    bar2.classList.remove('bar-transform-2');

    // Delay hiding elements to allow animations to complete
    setTimeout(() => {
      mobileMenu.classList.add('hidden');
      overlay.classList.add('hidden');
    }, 400);
  };

  mobileMenuButton.addEventListener('click', () => {
    isMenuOpen ? closeMenu() : openMenu();
  });

  document.querySelectorAll('#mobile-menu a').forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  overlay.addEventListener('click', closeMenu);