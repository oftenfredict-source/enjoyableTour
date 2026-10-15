<script>
(function () {
   try {
      var theme = localStorage.getItem('et-theme');
      if (theme !== 'dark' && theme !== 'light') {
         theme = 'light';
      }
      document.documentElement.setAttribute('data-theme', theme);
   } catch (e) {}
})();
</script>
