<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Sign In — {{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{ asset('invenzatailwindcss-10/invenza/assets/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('invenzatailwindcss-10/invenza/assets/css/tailwind.css') }}">
  <script>try{if(localStorage.getItem('sf_theme')==="dark"){document.documentElement.classList.add("dark")}else{document.documentElement.classList.remove("dark")}}catch(e){}</script>
</head>
<body class="auth-body">
  <div class="auth-bg-shape auth-bg-shape-1"></div>
  <div class="auth-bg-shape auth-bg-shape-2"></div>
  <div class="auth-bg-shape auth-bg-shape-3"></div>

  <div class="w-full max-w-[440px] relative z-[1]">
    <div class="text-center mb-8">
      <div class="auth-logo-wrap inline-flex items-center gap-3">
        <div class="w-[48px] h-[48px] rounded-xl bg-white flex items-center justify-center shadow-[0_4px_14px_rgba(34,181,115,0.25)] overflow-hidden">
          <img src="{{ asset('enjoyable-tour-logo.png') }}" alt="{{ config('app.name') }}" class="w-11 h-11 object-contain">
        </div>
        <div class="text-left border-l border-[var(--border)] pl-3">
          <div class="text-xl font-bold text-[var(--text)] leading-[1.1] tracking-[-0.3px]">Enjoyable Tour</div>
          <div class="text-[10px] text-[var(--primary)] font-semibold tracking-[0.8px] uppercase mt-0.5">Admin Panel</div>
        </div>
      </div>
    </div>

    <div class="auth-card animate-[slideUp_0.6s_cubic-bezier(0.4,0,0.2,1)]">
      <div class="text-center mb-7">
        <h1 class="auth-title">Welcome back!</h1>
        <p class="auth-subtitle">Sign in to manage your Tanzania tours.</p>
      </div>

      @if ($errors->any())
        <div class="mb-4 rounded-xl px-4 py-3 text-sm" style="background:rgba(239,68,68,0.1);color:#DC2626;border:1px solid rgba(239,68,68,0.2);">
          {{ $errors->first() }}
        </div>
      @endif

      <form method="POST" action="{{ route('admin.login.submit') }}" class="flex flex-col gap-4.5" id="login-form">
        @csrf

        <div>
          <label class="form-label" for="login-email">Email Address</label>
          <input id="login-email" name="email" type="email" class="form-input @error('email') border-red-500 @enderror" placeholder="admin@enjoyabletour.com" value="{{ old('email', 'admin@enjoyabletour.com') }}" required autofocus>
        </div>

        <div>
          <div class="flex justify-between items-center mb-1.5">
            <label class="form-label mb-0" for="login-password">Password</label>
          </div>
          <div class="relative">
            <input id="login-password" name="password" type="password" class="form-input" placeholder="••••••••" required>
            <button type="button" id="toggle-pw" class="absolute right-3 top-1/2 -translate-y-1/2 border-none bg-transparent cursor-pointer text-[var(--muted)] p-0 transition-colors duration-200" aria-label="Toggle password">
              <svg id="eye-icon" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            </button>
          </div>
        </div>

        <div class="flex items-center gap-2">
          <input type="checkbox" id="remember-me" name="remember" value="1" {{ old('remember') ? 'checked' : 'checked' }} class="w-4 h-4 accent-[#22B573] cursor-pointer">
          <label for="remember-me" class="text-[13px] text-[var(--text)] cursor-pointer">Remember me for 30 days</label>
        </div>

        <button type="submit" class="btn btn-primary btn-lg w-full justify-center mt-1">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>
          Sign In
        </button>
      </form>
    </div>

    <div class="auth-demo-box animate-[slideUp_0.8s_cubic-bezier(0.4,0,0.2,1)]">
      <div class="auth-demo-box-title">Admin login</div>
      <div class="auth-demo-box-text">Email: <strong>admin@enjoyabletour.com</strong> · Password: <strong>password</strong></div>
    </div>
  </div>

  <script>
    document.getElementById('toggle-pw').addEventListener('click', function () {
      const pw = document.getElementById('login-password');
      pw.type = pw.type === 'password' ? 'text' : 'password';
    });
  </script>
</body>
</html>
