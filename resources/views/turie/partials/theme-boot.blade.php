<script>
(function () {
   try {
      var theme = localStorage.getItem('et-theme');
      if (theme !== 'dark' && theme !== 'light') {
         theme = 'light';
      }
      document.documentElement.setAttribute('data-theme', theme);
      var lang = localStorage.getItem('et-lang');
      if (lang !== 'sw') {
         lang = 'en';
      }
      document.documentElement.lang = lang;
      document.documentElement.setAttribute('data-lang', lang);
   } catch (e) {}
})();
</script>
