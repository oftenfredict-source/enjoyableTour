<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Dashboard') — {{ config('app.name') }} Admin</title>
  <link rel="stylesheet" href="{{ asset('invenzatailwindcss-10/invenza/assets/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('invenzatailwindcss-10/invenza/assets/css/tailwind.css') }}">
  <script>try{if(localStorage.getItem('sf_theme')==="dark"){document.documentElement.classList.add("dark")}else{document.documentElement.classList.remove("dark")}}catch(e){}</script>
  @stack('styles')
</head>
<body>
  @include('admin.partials.sidebar')

  <div id="main-wrapper">
    @include('admin.partials.header')

    <main class="flex-1 p-4 md:p-6 max-w-[1400px]">
      @yield('content')
    </main>

    <footer class="app-footer">
      <div class="app-footer-text">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</div>
    </footer>
  </div>

  <div id="toast-container" class="fixed bottom-5 right-5 z-[200] flex flex-col gap-2.5"></div>

  <script>
    window.BASE_PATH = @json(rtrim(asset('invenzatailwindcss-10/invenza'), '/') . '/');
    window.CURRENT_PAGE = @json($currentPage ?? 'dashboard');
  </script>
  <script src="{{ asset('invenzatailwindcss-10/invenza/assets/js/app.js') }}"></script>
  @stack('scripts')
</body>
</html>
