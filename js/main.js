AOS.init({
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 900, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});

/* Loading new content within the same page */

/*dark mode*/
const darkModeToggle = document.getElementById('darkModeToggle');
const navbar = document.querySelector('.navbar');
const isDarkmode = localStorage.getItem('darkMode') === 'true';
if (isDarkmode) {
  document.documentElement.setAttribute('data-bs-theme', 'dark');
  navbar.classList.add('bg-dark');
  darkModeToggle.checked = true;
}
darkModeToggle.addEventListener('click', ()=> { /*functio() or ()=> */
  if (darkModeToggle.checked) { /* this.checked*/
    document.documentElement.setAttribute('data-bs-theme', 'dark');
    navbar.classList.add('bg-dark');
    localStorage.setItem('darkMode', 'true');

  } else {
    document.documentElement.setAttribute('data-bs-theme', 'light');
    navbar.classList.remove('bg-dark');
    localStorage.setItem('darkMode', 'false');
  }
});