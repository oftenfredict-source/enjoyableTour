(function () {
   var panel = document.getElementById('et-tools-panel');
   var overlay = document.getElementById('et-tools-overlay');
   var row = document.getElementById('et-tools-dests');
   if (!panel || !overlay) {
      return;
   }

   function setOpen(open) {
      panel.classList.toggle('is-open', open);
      overlay.classList.toggle('is-open', open);
      panel.setAttribute('aria-hidden', open ? 'false' : 'true');
      document.body.style.overflow = open ? 'hidden' : '';
      if (open) {
         document.querySelectorAll('.tp-offcanvas').forEach(function (menu) {
            menu.classList.remove('tp-offcanvas-open');
         });
      }
   }

   document.querySelectorAll('.et-tools-open').forEach(function (button) {
      button.addEventListener('click', function () {
         setOpen(true);
      });
   });
   document.querySelectorAll('.et-tools-close').forEach(function (button) {
      button.addEventListener('click', function () {
         setOpen(false);
      });
   });
   overlay.addEventListener('click', function () {
      setOpen(false);
   });
   document.querySelectorAll('.tp-header-toogle').forEach(function (button) {
      button.addEventListener('click', function () {
         setOpen(false);
      });
   });

   function scrollDestinations(direction) {
      if (!row) {
         return;
      }
      var card = row.querySelector('.et-tools-dest');
      var amount = card ? card.getBoundingClientRect().width + 12 : 180;
      row.scrollBy({ left: direction * amount, behavior: 'smooth' });
   }

   var previous = panel.querySelector('.et-tools-prev');
   var next = panel.querySelector('.et-tools-next');
   if (previous) {
      previous.addEventListener('click', function () { scrollDestinations(-1); });
   }
   if (next) {
      next.addEventListener('click', function () { scrollDestinations(1); });
   }
})();
