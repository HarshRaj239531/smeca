<!DOCTYPE html>
<html lang="en" class="h-full bg-[#f6f8f3] text-[#203a31]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Sign In | SMECA INDUSTRY PRIVATE LIMITED</title>

    <link rel="icon" type="image/png" href="{{ asset('images/smeca-logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .font-serif-display {
            font-family: 'Playfair Display', Georgia, Cambria, serif;
        }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background: radial-gradient(circle at 50% 20%, #e6ebdd 0%, #d8e1cc 45%, #c0caa7 100%);
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8 selection:bg-[#203a31] selection:text-[#c0caa7]">

    <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="inline-flex items-center gap-3 bg-white/80 backdrop-blur-md px-5 py-3 rounded-2xl border border-[#203a31]/15 shadow-sm hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('images/smeca-logo.png') }}" alt="SMECA Logo" class="h-10 w-auto object-contain">
            <div class="flex flex-col items-start leading-none">
                <span class="text-xl font-bold font-serif-display text-[#203a31]">SMECA</span>
                <span class="text-[8.5px] font-bold tracking-[0.2em] uppercase text-[#445437] mt-1">INDUSTRY PVT. LTD.</span>
            </div>
        </a>

        <h2 class="mt-6 text-2xl sm:text-3xl font-serif-display font-medium text-[#203a31] tracking-tight">
            Administrative Access
        </h2>
        <p class="mt-2 text-xs text-[#3d564c]">
            Secure login for corporate desk, formulation inquiries & OEM operations.
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md px-4 sm:px-0">
        <div class="bg-white/95 backdrop-blur-md py-8 px-6 sm:px-10 shadow-2xl rounded-3xl border border-[#203a31]/15">
            
            <!-- Flash message if logged out -->
            @if(session('status_message'))
                <div class="mb-5 p-3.5 rounded-xl bg-[#e6ebdd] border border-[#203a31]/20 text-xs font-semibold text-[#203a31] flex items-center gap-2">
                    <svg class="w-4 h-4 shrink-0 text-[#203a31]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>{{ session('status_message') }}</span>
                </div>
            @endif

            <!-- Errors -->
            @if($errors->any())
                <div class="mb-5 p-3.5 rounded-xl bg-rose-50 border border-rose-200 text-xs font-semibold text-rose-800 space-y-1">
                    @foreach($errors->all() as $error)
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 shrink-0 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-[#203a31] mb-1.5">
                        Admin Email ID <span class="text-rose-600">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"/></svg>
                        </div>
                        <input id="email" name="email" type="email" autocomplete="email" required
                               value="{{ old('email', 'admin@smeca.com') }}"
                               placeholder="admin@smeca.com"
                               class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl pl-10 pr-4 py-2.5 text-xs sm:text-sm text-[#203a31] focus:bg-white focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition">
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-xs font-bold uppercase tracking-wider text-[#203a31] mb-1.5">
                        Security Password <span class="text-rose-600">*</span>
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               placeholder="••••••••••••"
                               class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl pl-10 pr-10 py-2.5 text-xs sm:text-sm text-[#203a31] focus:bg-white focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition">
                        <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 cursor-pointer">
                            <svg id="eyeIcon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between text-xs">
                    <label class="flex items-center gap-2 cursor-pointer text-[#203a31] select-none">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded text-[#203a31] border-stone-300 focus:ring-[#203a31]">
                        <span>Keep me signed in</span>
                    </label>
                    <span class="text-[11px] text-[#445437] font-semibold">Protected Session</span>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit" class="shine-effect w-full bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-semibold py-3 px-4 rounded-xl shadow-md transition duration-200 flex items-center justify-center gap-2 cursor-pointer">
                        <span>Sign In to Admin Portal</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>
            </form>

            <!-- Pre-seeded credentials callout box -->
            <div class="mt-6 pt-5 border-t border-stone-200">
                <div class="bg-[#f6f8f3] border border-stone-200 rounded-xl p-3.5 text-xs text-[#203a31] space-y-1">
                    <div class="flex items-center justify-between font-bold text-[11px] uppercase tracking-wider text-[#445437]">
                        <span>Default Access Credentials</span>
                        <span class="bg-[#c0caa7]/40 px-2 py-0.5 rounded text-[10px]">Database Seeded</span>
                    </div>
                    <div class="flex justify-between pt-1">
                        <span class="text-slate-500">Email:</span>
                        <code class="font-mono font-bold text-[#203a31]">admin@smeca.com</code>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-slate-500">Password:</span>
                        <code class="font-mono font-bold text-[#203a31]">admin@123</code>
                    </div>
                </div>
            </div>

            <!-- Back to website -->
            <div class="mt-4 text-center">
                <a href="{{ route('home') }}" class="text-xs font-semibold text-slate-500 hover:text-[#203a31] transition">
                    &larr; Return to SMECA Public Website
                </a>
            </div>

        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const pwd = document.getElementById('password');
            if (pwd.type === 'password') {
                pwd.type = 'text';
            } else {
                pwd.type = 'password';
            }
        }
    </script>
</body>
</html>
