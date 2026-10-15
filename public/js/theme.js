(function () {
   function current() {
      return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
   }

   function paint(theme) {
      var dark = theme === 'dark';
      document.querySelectorAll('.et-theme-toggle').forEach(function (button) {
         button.setAttribute('aria-pressed', dark ? 'true' : 'false');
         button.setAttribute('aria-label', dark ? 'Switch to light mode' : 'Switch to dark mode');
         var icon = button.querySelector('i');
         if (icon) {
            icon.className = dark ? 'fa-light fa-sun' : 'fa-light fa-moon';
         }
      });
   }

   paint(current());

   document.addEventListener('click', function (event) {
      var button = event.target.closest('.et-theme-toggle');
      if (!button) {
         return;
      }
      var next = current() === 'dark' ? 'light' : 'dark';
      try {
         localStorage.setItem('et-theme', next);
      } catch (e) {}
      document.documentElement.setAttribute('data-theme', next);
      paint(next);
   });
})();
