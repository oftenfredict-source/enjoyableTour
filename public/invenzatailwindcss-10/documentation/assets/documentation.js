// ========================================
// Invenza Documentation Scripts
// ========================================

// --- Sidebar Active Link on Scroll ---
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.doc-sidebar nav a');

function updateActiveLink() {
  let current = '';
  sections.forEach(section => {
    const sectionTop = section.offsetTop - 120;
    if (pageYOffset >= sectionTop) {
      current = section.getAttribute('id');
    }
  });
  navLinks.forEach(link => {
    link.classList.remove('active');
    if (link.getAttribute('href') === '#' + current) {
      link.classList.add('active');
    }
  });
}

window.addEventListener('scroll', updateActiveLink);

// --- Smooth Scroll ---
navLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute('href'));
    if (target) {
      const offset = 80;
      const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
      window.scrollTo({ top, behavior: 'smooth' });

      // Close mobile sidebar if open
      const sidebar = document.getElementById('docSidebar');
      const overlay = document.getElementById('sidebarOverlay');
      if (sidebar && sidebar.classList.contains('open')) {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
      }
    }
  });
});

// --- Back to Top Button ---
const backToTopBtn = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  if (window.scrollY > 300) {
    backToTopBtn.classList.add('show');
  } else {
    backToTopBtn.classList.remove('show');
  }
});

// --- Mobile Sidebar Toggle ---
function toggleSidebar() {
  const sidebar = document.getElementById('docSidebar');
  const overlay = document.getElementById('sidebarOverlay');
  sidebar.classList.toggle('open');
  overlay.classList.toggle('active');
  document.body.style.overflow = sidebar.classList.contains('open') ? 'hidden' : '';
}

// --- Sidebar Search / Filter ---
function filterSidebar(query) {
  const allLinks = document.querySelectorAll('.doc-sidebar nav a');
  const allLabels = document.querySelectorAll('.doc-sidebar nav .sidebar-section-label');
  const lowerQuery = query.toLowerCase().trim();

  if (!lowerQuery) {
    allLinks.forEach(link => link.style.display = '');
    allLabels.forEach(label => label.style.display = '');
    return;
  }

  // Hide all labels first
  allLabels.forEach(label => label.style.display = 'none');

  allLinks.forEach(link => {
    const text = link.textContent.toLowerCase();
    if (text.includes(lowerQuery)) {
      link.style.display = '';
    } else {
      link.style.display = 'none';
    }
  });
}

// --- Initialize ---
document.addEventListener('DOMContentLoaded', () => {
  updateActiveLink();
});
