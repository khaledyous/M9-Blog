// 🌙 Dark mode toggle
const toggle = document.querySelector('.dark-mode-toggle');
const icon = toggle.querySelector('i');

function setTheme(theme) {
  if (theme === 'dark') {
    document.body.classList.add('dark');
    icon.classList.remove('fa-moon');
    icon.classList.add('fa-sun');
    toggle.classList.add('active');
  } else {
    document.body.classList.remove('dark');
    icon.classList.remove('fa-sun');
    icon.classList.add('fa-moon');
    toggle.classList.remove('active');
  }
  localStorage.setItem('theme', theme);
}

toggle.addEventListener('click', () => {
  if (document.body.classList.contains('dark')) {
    setTheme('light');
  } else {
    setTheme('dark');
  }
});

window.onload = () => {
  const savedTheme = localStorage.getItem('theme') || 'light';
  setTheme(savedTheme);
};

// 📌 Scroll spy
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('nav a');

window.addEventListener('scroll', () => {
  let currentSectionId = '';

  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (window.pageYOffset >= sectionTop - sectionHeight / 3) {
      currentSectionId = section.getAttribute('id');
    }
  });

  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === '#' + currentSectionId) {
      link.classList.add('active');
    }
  });
});

// 🎯 Toon alle projecten / Toon minder projecten
const showMoreBtn = document.getElementById("show-more-btn");
const hiddenProjects = document.querySelectorAll(".portfolio-item.hidden");

showMoreBtn.addEventListener("click", () => {
  const isHidden = hiddenProjects[0].classList.contains("hidden");

  hiddenProjects.forEach(item => {
    item.classList.toggle("hidden");
  });

  // Verander de knop tekst en icoon
  if (isHidden) {
    showMoreBtn.textContent = "Toon minder projecten ▲";
  } else {
    showMoreBtn.textContent = "Toon alle projecten ▼";
  }
});
